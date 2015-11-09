<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPersiapanIdentifikasiKelembagaan extends BaseApiModel
{
    protected $fillable = [
        'nama_bkm',
        'tanggal_pembentukan',
        'nama_koordinator',
        'jumlah_pengurus_bkm',
        'jumlah_perempuan_pengurus_bkm',
        'alamat_bkm',
        'telepon_hp',
        'tanggal_pengesahan_notaris',
        'nomor_pengesahan',
        'nama_notaris',
        'nama_bank' ,
        'no_rekening_bank', 
        'verified_at',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'nama_bkm' => 'required|type:string|caption:Nama BKM',
        'tanggal_pembentukan' => 'required|type:date',
        'nama_koordinator' => 'required|type:string',
        'jumlah_pengurus_bkm' => 'required|type:numeric|caption:&sum; Pengurus BKM',
        'jumlah_perempuan_pengurus_bkm' => 'required|type:numeric|caption:&sum; Perempuan Pengurus BKM',
        'alamat_bkm' => 'required|type:text|caption:Alamat BKM',
        'telepon_hp' => 'type:string|caption:No. Telepon / Hp',
        'tanggal_pengesahan_notaris' => 'type:date',
        'nomor_pengesahan' => 'type:string',
        'nama_notaris' => 'type:string',
        'nama_bank'  => 'type:string',
        'no_rekening_bank' => 'type:string',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'nama_bkm' => 'required',
        'tanggal_pembentukan' => 'required|date',
        'nama_koordinator' => 'required',
        'jumlah_pengurus_bkm' => 'required|numeric',
        'jumlah_perempuan_pengurus_bkm' => 'required|numeric',
        'alamat_bkm' => 'required',
        'tanggal_pengesahan_notaris' => 'date',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'nama_bkm' => '',
        'tanggal_pembentukan' => '',
        'nama_koordinator' => '',
        'jumlah_pengurus_bkm' => '0',
        'jumlah_perempuan_pengurus_bkm' => '0',
        'alamat_bkm' => '',
        'telepon_hp' => '',
        'tanggal_pengesahan_notaris' => '',
        'nomor_pengesahan' => '',
        'nama_notaris' => '',
        'nama_bank'  => '',
        'no_rekening_bank' => '',
    ];

    public static $title = 'Identifikasi Kelembagaan';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

