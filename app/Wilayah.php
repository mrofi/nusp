<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends BaseModel
{
    protected $fillable = ['kode', 'nama_wilayah', 'tingkat', 'induk'];

    public static function get_desa_kel($kode='')
    {
    	if ($kode == '') return [];

    	$desaKel = self::where('kode', $kode)->where('tingkat', 'like', '4%')->first();
    	$kec = self::where('kode', $desaKel->induk)->first();
    	$kabKota = self::where('kode', $kec->induk)->first();
    	$propinsi = self::where('kode', $kabKota->induk)->first();

    	return compact('desaKel', 'kec', 'kabKota', 'propinsi');
    }

    public static function get_kab_kota($kode='')
    {
    	if ($kode == '') return [];

    	$kabKota = self::where('kode', $kode)->where('tingkat', 'like', '2%')->first();
    	$propinsi = self::where('kode', $kabKota->induk)->first();

    	return compact('desaKel', 'kec', 'kabKota', 'propinsi');
    }
}
