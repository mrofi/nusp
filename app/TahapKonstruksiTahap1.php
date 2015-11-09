<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiTahap1 extends BaseApiModel
{
    protected $fillable = [
    	'kode_wilayah',
        'no_spm',
        'tanggal_spm',
        'no_sp2d',
        'tanggal_sp2d',
        'jumlah',
        'file_spm',
        'file_sp2d',
        'file_berita_acara',
        'file_kuitansi', 
        'verified_at',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'no_spm' => 'required|type:string',
        'tanggal_spm' => 'required|type:date',
        'no_sp2d' => 'required|type:string',
        'tanggal_sp2d' => 'required|type:date',
        'jumlah' => 'required|type:numeric',
        'file_spm' => 'required|type:file',
        'file_sp2d' => 'required|type:file',
        'file_berita_acara' => 'required|type:file',
        'file_kuitansi' => 'required|type:file',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'no_spm' => 'required',
        'tanggal_spm' => 'required',
        'no_sp2d' => 'required',
        'tanggal_sp2d' => 'required',
        'jumlah' => 'required|numeric',
        'file_spm' => 'required|numeric',
        'file_sp2d' => 'required|numeric',
        'file_berita_acara' => 'required|numeric',
        'file_kuitansi' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'no_spm' => '',
        'tanggal_spm' => '',
        'no_sp2d' => '',
        'tanggal_sp2d' => '',
        'jumlah' => 0,
        'file_spm' => '',
        'file_sp2d' => '',
        'file_berita_acara' => '',
        'file_kuitansi' => '',
    ];

    public static $title = 'Tahap 1';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}