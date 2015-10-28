<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanPembentukanTppi extends BaseModel
{
    protected $fillable = [
    	'kode_wilayah', 
        'tanggal_pembentukan',
        'nama_tppi',
        'jumlah_pengurus_tppi',
        'jumlah_perempuan_pengurus_tppi',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_pembentukan' => 'required|type:date',
        'nama_tppi' => 'required|type:string',
        'jumlah_pengurus_tppi' => 'required|type:numeric|caption:&sum; Pengurus TPPI',
        'jumlah_perempuan_pengurus_tppi' => 'required|type:numeric|caption:&sum; Perempuan Pengurus TPPI',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_pembentukan' => 'required',
        'nama_tppi' => 'required',
        'jumlah_pengurus_tppi' => 'required|numeric',
        'jumlah_perempuan_pengurus_tppi' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_pembentukan' => '',
        'nama_tppi' => '',
        'jumlah_pengurus_tppi' => 0,
        'jumlah_perempuan_pengurus_tppi' => 0,
    ];

    public static $title = 'Pembentukan TPPI';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }

}