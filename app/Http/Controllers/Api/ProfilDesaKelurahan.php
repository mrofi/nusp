<?php

namespace App\Http\Controllers\Api;

use App\ProfilDesaKelurahan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class ProfilDesaKelurahan extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wilayah =  auth()->user()->wilayah;
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
                        $newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode'], 'role_id' => $desaKel['role_id'], 'profil' =>  Model::where('kode_wilayah', $desaKel['kode'])->first()];
                        if ($newDesaKel['profil']) $newDesaKel['profil']['jumlah_penduduk'] = $newDesaKel['profil']['jumlah_penduduk_laki_laki'] + $newDesaKel['profil']['jumlah_penduduk_perempuan'];
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

    public function download()
    {
        $title = 'Profil Desa Atau Kelurahan';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            $excel->sheet(snake_case($title, '_'), function($sheet) use ($title, $title2)
            {
                $sheet->fromArray($this->model->excelDesaKel());

                $sheet->prependRow(1, [$title]);

                $sheet->setAutoSize(true);

                $sheet->setWidth('A', 5);
            });

        })->download('xlsx');
    }
}
