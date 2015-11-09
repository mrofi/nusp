<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenetapanLokasi extends BaseApiModel
{
    protected $fillable = ['kode_wilayah', 'tanggal_sk', 'nomor_sk', 'jumlah_lokasi', 'file_id', 'verified_at'];

    protected $forms = [
    	'kode_wilayah' => 'required|type:hidden',
    	'tanggal_sk' => 'required|type:date',
    	'nomor_sk' => 'required|type:string',
    	'jumlah_lokasi' => 'required|type:numeric',
    	'file_id' => 'type:file|caption:File'
    ];

    protected $rules = [
    	'kode_wilayah' => 'required|numeric',
    	'tanggal_sk' => 'required',
    	'nomor_sk' => 'required',
    	'jumlah_lokasi' => 'required|numeric',
    	'file_id' => 'numeric',
    ];

    protected $attributes = [
    	'kode_wilayah' => '',
    	'tanggal_sk' => '',
    	'nomor_sk' => '',
    	'jumlah_lokasi' => '',
    	'file_id' => '',
    ];

    public function getWilayahAttribute()
    {
        return Wilayah::get_kab_kota($this->kode_wilayah);
    }
    
}
