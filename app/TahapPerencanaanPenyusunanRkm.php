<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanPenyusunanRkm extends BaseModel
{
    protected $fillable = ['kode_wilayah', 'tanggal_mulai', 'tanggal_selesai', 'jumlah_peserta', 'jumlah_peserta_perempuan', 'jumlah_peserta_warga_miskin'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
        'jumlah_peserta' => 'required|type:numeric|caption:&sum; Peserta',
        'jumlah_peserta_perempuan' => 'required|type:numeric|caption:&sum; Peserta Perempuan',
        'jumlah_peserta_warga_miskin' => 'required|type:numeric|caption:&sum; Peserta Warga Miskin',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'jumlah_peserta' => 'required|numeric',
        'jumlah_peserta_perempuan' => 'required|numeric',
        'jumlah_peserta_warga_miskin' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'jumlah_peserta' => 0,
        'jumlah_peserta_perempuan' => 0,
        'jumlah_peserta_warga_miskin' => 0,
    ];

    public static $title = 'Penyusunan Dokumen RKm';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

