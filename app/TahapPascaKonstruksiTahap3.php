<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPascaKonstruksiTahap3 extends BaseApiModel
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
        'file_spm' => 'type:file',
        'file_sp2d' => 'type:file',
        'file_berita_acara' => 'type:file',
        'file_kuitansi' => 'type:file',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'no_spm' => 'required',
        'tanggal_spm' => 'required',
        'no_sp2d' => 'required',
        'tanggal_sp2d' => 'required',
        'jumlah' => 'required|numeric',
        'file_spm' => 'numeric',
        'file_sp2d' => 'numeric',
        'file_berita_acara' => 'numeric',
        'file_kuitansi' => 'numeric',
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

    public static $title = 'Tahap 3';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}