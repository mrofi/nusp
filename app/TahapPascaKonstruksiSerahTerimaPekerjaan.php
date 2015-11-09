<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPascaKonstruksiSerahTerimaPekerjaan extends BaseApiModel
{
    protected $fillable = [
        'kode_wilayah', 
        'tppi_ke_bkm',
        'bkm_ke_staker_ppk_nusp_2',
        'ppk_ke_kpp',
        'foto_id',
        'file_tppi_ke_bkm',
        'file_bkm_ke_staker_ppk_nusp_2',
        'file_ppk_ke_kpp', 
        'verified_at',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tppi_ke_bkm' => 'required|type:date',
        'bkm_ke_staker_ppk_nusp_2' => 'required|type:date',
        'ppk_ke_kpp' => 'required|type:date',
        'foto_id' => 'required|type:image|caption:Foto',
        'file_tppi_ke_bkm' => 'required|type:file|caption:Notulen',
        'file_bkm_ke_staker_ppk_nusp_2' => 'required|type:file|caption:Notulen',
        'file_ppk_ke_kpp' => 'required|type:file|caption:Notulen',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tppi_ke_bkm' => 'required',
        'bkm_ke_staker_ppk_nusp_2' => 'required',
        'ppk_ke_kpp' => 'required',
        'foto_id' => 'required|numeric',
        'file_tppi_ke_bkm' => 'required|numeric',
        'file_bkm_ke_staker_ppk_nusp_2' => 'required|numeric',
        'file_ppk_ke_kpp' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tppi_ke_bkm' => '',
        'bkm_ke_staker_ppk_nusp_2' => '',
        'ppk_ke_kpp' => '',
        'foto_id' => '',
        'file_tppi_ke_bkm' => '',
        'file_bkm_ke_staker_ppk_nusp_2' => '',
        'file_ppk_ke_kpp' => '',
    ];

    public static $title = 'Serah Terima Pekerjaan';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

