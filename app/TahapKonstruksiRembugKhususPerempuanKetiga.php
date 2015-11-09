<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiRembugKhususPerempuanKetiga extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'tanggal_mulai', 'tanggal_selesai', 'jumlah_peserta', 'jumlah_peserta_perempuan', 'jumlah_peserta_warga_miskin', 'foto_id', 'file_id', 'verified_at'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
        'jumlah_peserta' => 'required|type:numeric|caption:&sum; Peserta',
        'jumlah_peserta_perempuan' => 'required|type:numeric|caption:&sum; Peserta Perempuan',
        'jumlah_peserta_warga_miskin' => 'required|type:numeric|caption:&sum; Peserta Warga Miskin',
        'foto_id' => 'type:image|caption:Foto',
        'file_id' => 'type:file|caption:Berita Acara (File Word)',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
        'jumlah_peserta' => 'required|numeric',
        'jumlah_peserta_perempuan' => 'required|numeric',
        'jumlah_peserta_warga_miskin' => 'required|numeric',
        'foto_id' => 'numeric',
        'file_id' => 'numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'jumlah_peserta' => 0,
        'jumlah_peserta_perempuan' => 0,
        'jumlah_peserta_warga_miskin' => 0,
        'foto_id' => '',
        'file_id' => '',
    ];

    public static $title = 'Rembug Khusus Perempuan II';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

