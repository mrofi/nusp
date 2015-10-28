<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanPembentukanKpp extends BaseModel
{
    protected $fillable = [
    	'kode_wilayah', 
        'tanggal_pembentukan',
        'nama_tppi',
        'jumlah_pengurus_kpp',
        'jumlah_perempuan_pengurus_kpp',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_pembentukan' => 'required|type:date',
        'nama_kpp' => 'required|type:string|caption:Nama KPP',
        'jumlah_pengurus_kpp' => 'required|type:numeric|caption:&sum; Pengurus KPP',
        'jumlah_perempuan_pengurus_kpp' => 'required|type:numeric|caption:&sum; Perempuan Pengurus KPP',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_pembentukan' => 'required',
        'nama_kpp' => 'required',
        'jumlah_pengurus_kpp' => 'required|numeric',
        'jumlah_perempuan_pengurus_kpp' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_pembentukan' => '',
        'nama_kpp' => '',
        'jumlah_pengurus_kpp' => 0,
        'jumlah_perempuan_pengurus_kpp' => 0,
    ];

    public static $title = 'Pembentukan KPP';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}
