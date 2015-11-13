<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiKontrakSp3 extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'paket_pekerjaan', 'no_kontrak', 'tanggal_kontrak', 'nilai_kontrak', 'tanggal_mulai', 'tanggal_selesai', 'kontrak_sp3', 'ringkasan_kontrak'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'paket_pekerjaan' => 'required|type:string',
        'no_kontrak' => 'required|type:string',
        'tanggal_kontrak' => 'required|type:date',
        'nilai_kontrak' => 'required|type:numeric',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
        'kontrak_sp3' => 'required|type:file|caption:Kontrak SP3',
        'ringkasan_kontrak' => 'required|type:file|caption:Ringkasan Kontrak',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'paket_pekerjaan' => 'required',
        'no_kontrak' => 'required',
        'tanggal_kontrak' => 'required',
        'nilai_kontrak' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'kontrak_sp3' => 'required|numeric',
        'ringkasan_kontrak' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'paket_pekerjaan' => '',
        'no_kontrak' => '',
        'tanggal_kontrak' => '',
        'nilai_kontrak' => 0,
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'kontrak_sp3' => '',
        'ringkasan_kontrak' => '',
    ];

    public static $title = 'Kontrak SP3';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

