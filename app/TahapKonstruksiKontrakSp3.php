<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiKontrakSp3 extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'no_kontrak', 'tanggal_kontrak', 'kontrak_sp3', 'ringkasan_kontrak', 'verified_at'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'no_kontrak' => 'required|type:string',
        'tanggal_kontrak' => 'required|type:date',
        'kontrak_sp3' => 'type:file|caption:Kontrak SP3',
        'ringkasan_kontrak' => 'type:file|caption:Ringkasan Kontrak',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'no_kontrak' => 'required',
        'tanggal_kontrak' => 'required',
        'kontrak_sp3' => 'numeric',
        'ringkasan_kontrak' => 'numeric',
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

