<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends BaseModel
{
    protected $fillable = ['kode', 'nama_wilayah', 'tingkat', 'induk'];

    public static function get_desa_kel($kode='')
    {
    	if ($kode == '') return [];

    	$desaKel = self::where('kode', $kode)->where('tingkat', '4_des_kel')->first();
    	$kec = self::where('kode', $desaKel->induk)->first();
    	$kabKota = self::where('kode', $kec->induk)->first();
    	$propinsi = self::where('kode', $kabKota->induk)->first();

    	return compact('desaKel', 'kec', 'kabKota', 'propinsi');
    }
}
