<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class ApiKabKota extends ApiController
{
    public function showIndex($identifier = 'data')
    {
        $allData = [];

        foreach($this->model->all()->toArray() as $data) 
        {
            $allData[$data['kode_wilayah']] = $data;
        }

        $wilayah =  auth()->user()->wilayah;
        // return $wilayah;

        $propinsis = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;

            $kabKotas = [];
            
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                $data = isset($allData[$kabKota['kode']]) && $allData[$kabKota['kode']]['verified_at'] != null ? $allData[$kabKota['kode']] : [];
            
                $newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'role_id' => $kabKota['role_id'], $identifier => $data ];
                
                $kabKotas[] = $newKabKota;
            }

            $newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'role_id' => $propinsi['role_id'], 'kabKotas' => $kabKotas];

            $propinsis[] = $newPropinsi;
        }

        return $propinsis;
    }
}
