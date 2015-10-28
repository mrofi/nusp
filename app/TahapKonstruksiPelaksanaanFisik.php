<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKonstruksiPelaksanaanFisik extends BaseModel
{
    protected $fillable = [
        'kode_wilayah', 
        'pekerjaan_persiapan',
        'daftar_bahan_material',
        'daftar_hadir_tenaga_kerja',
        'penggunaan_alat_berat',
        'biaya_penggunaan_alat_berat',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'pekerjaan_persiapan' => 'required|type:date',
        'daftar_bahan_material' => 'required|type:combo|value:ada,tidak ada',
        'daftar_hadir_tenaga_kerja' => 'required|type:combo|value:ada,tidak ada',
        'penggunaan_alat_berat' => 'required|type:combo|value:ada,tidak ada',
        'biaya_penggunaan_alat_berat' => 'required|type:currency',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'pekerjaan_persiapan' => 'required|date',
        'daftar_bahan_material' => 'required',
        'daftar_hadir_tenaga_kerja' => 'required',
        'penggunaan_alat_berat' => 'required',
        'biaya_penggunaan_alat_berat' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'pekerjaan_persiapan' => '',
        'daftar_bahan_material' => '',
        'daftar_hadir_tenaga_kerja' => '',
        'penggunaan_alat_berat' => '',
        'biaya_penggunaan_alat_berat' => '0',
    ];

    public static $title = 'Pelaksanaan Fisik';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

