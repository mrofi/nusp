<?php

namespace App\Http\Controllers\Api;

use Excel;
use App\SosialisasiKabKota as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiKabKota;

class SosialisasiKabKota extends ApiKabKota
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
        return parent::showIndex('sosialisasi');
    }

    public function download()
    {
        $title = 'Sosialisasi Kabupaten Kota';
        
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
                $sheet->fromArray($this->model->excelDataKabKota(function($data = []) 
                {
                  if (isset($data['foto_id'])) $data['foto_id'] = ($data['foto_id'] != null) ? 'Ada' : 'Tidak Ada';

                  return $data;
                }));

                $sheet->prependRow(1, [$title]);

                $sheet->setAutoSize(true);

                $sheet->setWidth('A', 5);
            });

        })->download('xlsx');
    }
    
}
