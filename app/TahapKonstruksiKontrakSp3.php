<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiKontrakSp3 extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'no_kontrak', 'tanggal_kontrak', 'kontrak_sp3', 'ringkasan_kontrak'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'no_kontrak' => 'required|type:string',
        'tanggal_kontrak' => 'required|type:date',
        'kontrak_sp3' => 'required|type:file|caption:Kontrak SP3',
        'ringkasan_kontrak' => 'required|type:file|caption:Ringkasan Kontrak',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'no_kontrak' => 'required',
        'tanggal_kontrak' => 'required',
        'kontrak_sp3' => 'required|numeric',
        'ringkasan_kontrak' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'no_kontrak' => '',
        'tanggal_kontrak' => '',
        'kontrak_sp3' => '',
        'ringkasan_kontrak' => '',
    ];

    public static $title = 'Kontrak SP3';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

