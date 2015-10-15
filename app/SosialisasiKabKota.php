<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SosialisasiKabKota extends BaseModel
{
    protected $fillable = ['kode_wilayah', 'tanggal', 'peserta', 'peserta_perempuan', 'foto_id'];

    protected $forms = [
    	'kode_wilayah' => 'required|type:hidden',
    	'tanggal' => 'required|type:date',
    	'peserta' => 'required|type:numeric|caption:Jumlah Peserta',
    	'peserta_perempuan' => 'required|type:numeric|caption:Jumlah Peserta Perempuan',
    	'foto_id' => 'type:image|caption:Foto'
    ];

    protected $rules = [
    	'kode_wilayah' => 'required|numeric',
    	'tanggal' => 'required|date',
    	'peserta' => 'required|numeric',
    	'peserta_perempuan' => 'required|numeric',
    	'foto_id' => 'numeric',
    ];

    protected $attributes = [
    	'kode_wilayah' => '',
    	'tanggal' => '',
    	'peserta' => '',
    	'peserta_perempuan' => '',
    	'foto_id' => '',
    ];

    public function getWilayahAttribute()
    {
        return Wilayah::get_kab_kota($this->kode_wilayah);
    }
}
