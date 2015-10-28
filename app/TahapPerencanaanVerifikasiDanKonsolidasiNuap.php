<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanVerifikasiDanKonsolidasiNuap extends BaseModel
{
    protected $fillable = ['kode_wilayah', 'tanggal_mulai', 'tanggal_selesai', 'hasil_verifikasi', 'catatan'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
        'hasil_verifikasi' => 'required|type:combo|value:layak,tidak layak',
        'catatan' => 'type:text',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'hasil_verifikasi' => 'required',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'hasil_verifikasi' => '',
        'catatan' => '',
    ];

    public static $title = 'Verifikasi dan Konsolidasi Dokumen NUAP';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

