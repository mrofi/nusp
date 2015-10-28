<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPascaKonstruksiPemanfaatan extends BaseModel
{
    protected $fillable = [
        'kode_wilayah',         
        'jenis_kegiatan',
        'jumlah_kk',
        'jumlah_kk_miskin',
        'jumlah_pemanfaat',
        'jumlah_perempuan',
        'jumlah_warga_miskin',
        'realisasi_jenis_kegiatan',
        'realisasi_jumlah_kk',
        'realisasi_jumlah_kk_miskin',
        'realisasi_jumlah_pemanfaat',
        'realisasi_jumlah_perempuan',
        'realisasi_jumlah_warga_miskin',
    ];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'jenis_kegiatan' => 'required|type:text',
        'jumlah_kk' => 'required|type:numeric',
        'jumlah_kk_miskin' => 'required|type:numeric',
        'jumlah_pemanfaat' => 'required|type:numeric',
        'jumlah_perempuan' => 'required|type:numeric',
        'jumlah_warga_miskin' => 'required|type:numeric',
        'relaisasi_jenis_kegiatan' => 'required|type:text',
        'relaisasi_jumlah_kk' => 'required|type:numeric',
        'relaisasi_jumlah_kk_miskin' => 'required|type:numeric',
        'relaisasi_jumlah_pemanfaat' => 'required|type:numeric',
        'relaisasi_jumlah_perempuan' => 'required|type:numeric',
        'relaisasi_jumlah_warga_miskin' => 'required|type:numeric',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'jenis_kegiatan' => 'required',
        'jumlah_kk' => 'required|numeric',
        'jumlah_kk_miskin' => 'required|numeric',
        'jumlah_pemanfaat' => 'required|numeric',
        'jumlah_perempuan' => 'required|numeric',
        'jumlah_warga_miskin' => 'required|numeric',
        'relaisasi_jenis_kegiatan' => 'required',
        'relaisasi_jumlah_kk' => 'required|numeric',
        'relaisasi_jumlah_kk_miskin' => 'required|numeric',
        'relaisasi_jumlah_pemanfaat' => 'required|numeric',
        'relaisasi_jumlah_perempuan' => 'required|numeric',
        'relaisasi_jumlah_warga_miskin' => 'required|numeric',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'jenis_kegiatan' => '',
        'jumlah_kk' => '0',
        'jumlah_kk_miskin' => '0',
        'jumlah_pemanfaat' => '0',
        'jumlah_perempuan' => '0',
        'jumlah_warga_miskin' => '0',
        'relaisasi_jenis_kegiatan' => '',
        'relaisasi_jumlah_kk' => '0',
        'relaisasi_jumlah_kk_miskin' => '0',
        'relaisasi_jumlah_pemanfaat' => '0',
        'relaisasi_jumlah_perempuan' => '0',
        'relaisasi_jumlah_warga_miskin' => '0',
    ];

    public static $title = 'Pemanfaatan';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

