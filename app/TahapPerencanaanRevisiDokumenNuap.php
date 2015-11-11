<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanRevisiDokumenNuap extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'tanggal_mulai', 'tanggal_selesai', 'hasil_revisi'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
        'hasil_revisi' => 'required|type:combo|value:layak,tidak layak',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'hasil_revisi' => 'required',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'hasil_revisi' => '',
    ];

    public static $title = 'Revisi Dokumen NUAP';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

