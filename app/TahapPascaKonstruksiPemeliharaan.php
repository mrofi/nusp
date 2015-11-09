<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPascaKonstruksiPemeliharaan extends BaseApiModel
{
    protected $fillable = [
        'kode_wilayah', 
        'tanggal_mulai_digunakan',
        'apakah_sudah_terbentuk_kpp', 
        'verified_at',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai_digunakan' => 'required|type:date',
        'apakah_sudah_terbentuk_kpp' => 'required|type:combo|value:sudah,belum',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai_digunakan' => 'required',
        'apakah_sudah_terbentuk_kpp' => 'required',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai_digunakan' => '',
        'apakah_sudah_terbentuk_kpp' => '',
    ];

    public static $title = 'Pemeliharaan';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

