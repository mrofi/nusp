<?php

namespace App;

class DataKontrak extends BaseModel
{
    protected $fillable = [
    	'kode_wilayah',
        'no_kontrak',
        'tanggal_kontrak',
        'pelaksanaan_tanggal_mulai',
        'pelaksanaan_tanggal_selesai',
        'pelaksanaan_jenis_infrastruktur',
        'pelaksanaan_volume_unit',
        'dana_nilai_blm',
        'dana_nilai_swadaya',
    ];


    protected $forms = [
    	'kode_wilayah' => 'required|type:hidden',
        'no_kontrak' => 'required|type:string',
        'tanggal_kontrak' => 'required|type:date',
        'pelaksanaan_tanggal_mulai' => 'required|type:date|caption:Tanggal Mulai',
        'pelaksanaan_tanggal_selesai' => 'required|type:date|caption:Tanggal Selesai',
        'pelaksanaan_jenis_infrastruktur' => 'required|type:string|caption:Jenis Infrastruktur',
        'pelaksanaan_volume_unit' => 'required|type:numeric|caption:Volume (Unit)',
        'dana_nilai_blm' => 'required|type:numeric|caption:Nilai BLM',
        'dana_nilai_swadaya' => 'required|type:numeric|caption:Nilai Swadaya',
    ];

    
    protected $rules = [
    	'kode_wilayah' => 'required|numeric',
        'no_kontrak' => 'required',
        'tanggal_kontrak' => 'required|date',
        'pelaksanaan_tanggal_mulai' => 'required|date',
        'pelaksanaan_tanggal_selesai' => 'required|date',
        'pelaksanaan_jenis_infrastruktur' => 'required',
        'pelaksanaan_volume_unit' => 'required|numeric',
        'dana_nilai_blm' => 'required|numeric',
        'dana_nilai_swadaya' => 'required|numeric',
    ];
    
    
    protected $attributes = [
    	'kode_wilayah' => '',
        'no_kontrak' => '',
        'tanggal_kontrak' => '',
        'pelaksanaan_tanggal_mulai' => '',
        'pelaksanaan_tanggal_selesai' => '',
        'pelaksanaan_jenis_infrastruktur' => '',
        'pelaksanaan_volume_unit' => '0',
        'dana_nilai_blm' => '0',
        'dana_nilai_swadaya' => '0',
    ];

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }

}