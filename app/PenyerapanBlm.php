<?php

namespace App;

use Illuminate\Support\Collection as Collection;
use Illuminate\Database\Eloquent\Model;

class PenyerapanBlm extends BaseApiModel
{

	public static function all($columns = ['*'])
    {
        $data1 = TahapPersiapanIdentifikasiKelembagaan::all();
    	$data2 = TahapKonstruksiKontrakSp3::all();
    	$data3 = TahapKonstruksiTahap1::all();
    	$data4 = TahapKonstruksiTahap2::all();
    	$data5 = TahapPascaKonstruksiTahap3::all();

    	$allData = [];
    	$i = 1;
    	foreach (compact('data1', 'data2', 'data3', 'data4', 'data5') as $data) 
    	{
    		foreach ($data as $row) 
    		{
    			foreach ($row as $key => $value) 
    			{
    				if ($key == 'kode_wilayah') continue;
    				$row['data'.$i.'_'.$key] = $value;
    				unset($row[$key]);
    			}

    			if (!isset($allData[$row['kode_wilayah']])) $allData[$row['kode_wilayah']] = [];

    			$append = array_merge($allData[$row['kode_wilayah']], $row);

    			$allData[$row['kode_wilayah']] = $append; 
    		}

    		$i++;
    	}

    	return Collection::make(array_values($allData));
    }

    public function getWilayahAttribute()
    {
        return Wilayah::get_kab_kota($this->kode_wilayah);
    }
}
