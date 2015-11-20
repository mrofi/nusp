<?php

namespace App\Http\Controllers\Api;

use App\ProgressFisikKeuangan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class ProgressFisikKeuangan extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->model2 = new \App\LaporanProgressFisikKeuangan;
    }

    public function showIndex($identifier = 'data')
    {
        $allData = [];

        foreach($this->model->all()->toArray() as $data) 
        {
            $allData[$data['kode_wilayah']] = $data;
        }

        $allDataDetail = [];

        foreach($this->model2->all()->toArray() as $data) 
        {
        	if (!isset($allDataDetail[$data['kode_wilayah']])) $allDataDetail[$data['kode_wilayah']] = [];

            $allDataDetail[$data['kode_wilayah']][] = $data;
        }

        $wilayah =  auth()->user()->wilayah;

        // return $allData;
        
        // return $wilayah;

        $propinsis = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;
            $kabKotas = [];
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                if (!isset($kabKota['kecs'])) continue;
                $desaKels = [];
                foreach ($kabKota['kecs'] as $kode_k => $kec) 
                {
                    if (!isset($kec['desaKels'])) continue;

                    foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
                    {
                    	$dataDetail = [];

                    	if (isset($allDataDetail[$desaKel['kode']])) 
                    	{
	                    	foreach ($allDataDetail[$desaKel['kode']] as $dd) 
	                    	{
	                			$dataDetail[] = $dd['verified_at'] != null ? $dd : [];
	                    	}
                    		
                    	}

                		$data = isset($allData[$desaKel['kode']]) && $allData[$desaKel['kode']]['verified_at'] != null ? $allData[$desaKel['kode']] : [];

                		$data['detail'] = $dataDetail;

                        $newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode'], 'role_id' => $desaKel['role_id'], $identifier => $data ];

                        $desaKels[] = $newDesaKel;
                    }
                }

                $newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'role_id' => $kabKota['role_id'], 'desaKels' => $desaKels];
                
                $kabKotas[] = $newKabKota;
            }

            $newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'role_id' => $propinsi['role_id'], 'kabKotas' => $kabKotas];

            $propinsis[] = $newPropinsi;
        }

        return $propinsis;
    }

    public function index(Request $request)
    {
        return $this->showIndex('fisik_keuangan');
    }

    public function show(Request $request, $kode_wilayah)
    {        
        return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah)
        {
            $show =  $this->model->where('kode_wilayah', $kode_wilayah)->first();
            
            if (!$show || ($this->model->allowEdit != true && $this->model->allowVerify != true && $show->verified_at == null)) $show = array_merge(with(new $this->model(['kode_wilayah' => $kode_wilayah]))->toArray(), ['empty' => true]);
            
            if (!is_array($show)) $show = $show->toArray();

            $show['detail'] = with(new LaporanProgressFisikKeuangan(new \App\LaporanProgressFisikKeuangan()))->showAll($request, $kode_wilayah);

            $show['wilayah'] = \App\Wilayah::get_wilayah($kode_wilayah); 

            return $show;
        });
    }
}
