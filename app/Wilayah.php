<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends BaseModel
{
    protected $fillable = ['kode', 'nama_wilayah', 'tingkat', 'induk'];

    protected $primaryKey = 'kode';

    public static function get_wilayah($kode = '')
    {
        if ($kode == '') return [];

        $Wilayah = self::find($kode);

        if (substr($Wilayah->tingkat, 0, 1) == '1') return self::get_propinsi($kode);

        if (substr($Wilayah->tingkat, 0, 1) == '2') return self::get_kab_kota($kode);

        if (substr($Wilayah->tingkat, 0, 1) == '4') return self::get_desa_kel($kode);
    }

    public static function get_desa_kel($kode='')
    {
    	if ($kode == '') return [];

    	$desaKel = self::where('kode', $kode)->where('tingkat', 'like', '4%')->first();
    	
        if (!$desaKel) return [];

        $kec = self::where('kode', $desaKel->induk)->first();
    	$kabKota = self::where('kode', $kec->induk)->first();
    	$propinsi = self::where('kode', $kabKota->induk)->first();

    	return compact('desaKel', 'kec', 'kabKota', 'propinsi');
    }

    public static function get_kab_kota($kode='')
    {
    	if ($kode == '') return [];

    	$kabKota = self::where('kode', $kode)->where('tingkat', 'like', '2%')->first();

        if (!$kabKota) return [];

    	$propinsi = self::where('kode', $kabKota->induk)->first();

    	return compact('kabKota', 'propinsi');
    }

    public static function get_propinsi($kode='')
    {
        if ($kode == '') return [];
        
        $propinsi = self::where('kode', $kode)->where('tingkat', 'like', '1%')->first();

        return $propinsi;

    }
}
