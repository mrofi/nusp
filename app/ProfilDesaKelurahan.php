<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilDesaKelurahan extends BaseApiModel
{
    protected $fillable = [
    	'kode_wilayah',
    	'luas_wilayah',
    	// 'jumlah_penduduk',
        'jumlah_penduduk_laki_laki',
        'jumlah_penduduk_perempuan',
        'jumlah_kk',
        'jumlah_kk_miskin',
        'jumlah_rw_dusun_lingkungan',
        'jumlah_rt',
        'jumlah_jamban_kk',
        'jumlah_septik_tank',
        'jumlah_mck_unit',
        'jumlah_mck_bilik',
        'jumlah_sumur_gali_unit',
        'jumlah_sumur_pompa_unit',
        // 'jumlah_sambungan_pdam_sr',
        'jumlah_kran_umum_unit',
        'jumlah_pah_unit',
        'nama_bkm',
        'status_keberdayaan_bkm',
        'luas_kawasan',
        'tipografi_karakteristik',
        'koordinat_latitude',
        'koordinat_longitude',
        'pendidikan_sd',
        'pendidikan_smp',
        'pendidikan_sma',
        'pendidikan_perguruan_tinggi',
        'verified_at',
    ];

    protected $forms = [
    	'kode_wilayah' => 'required|type:hidden',
    	'luas_wilayah' => 'required|type:decimal|caption:Luas Wilayah (Ha)',
    	// 'jumlah_penduduk' => 'type:numeric|caption:&sum; Penduduk',
        'jumlah_penduduk_laki_laki' => 'required|type:numeric|caption:&sum; Penduduk Laki-laki',
        'jumlah_penduduk_perempuan' => 'required|type:numeric|caption:&sum; Perempuan',
        'jumlah_kk' => 'required|type:numeric|caption:&sum; KK',
        'jumlah_kk_miskin' => 'required|type:numeric|caption:&sum; KK Miskin',
        'jumlah_rw_dusun_lingkungan' => 'required|type:numeric|caption:&sum; RW / Dusun / Lingkungan',
        'jumlah_rt' => 'required|type:numeric|caption:&sum; RT',
        'jumlah_jamban_kk' => 'required|type:numeric|caption:&sum; Jamban (KK)',
        'jumlah_septik_tank' => 'required|type:numeric|caption:&sum; Septik Tank (KK)',
        'jumlah_mck_unit' => 'required|type:numeric|caption:&sum; MCK (unit)',
        'jumlah_mck_bilik' => 'required|type:numeric|caption:&sum; MCK (Bilik)',
        'jumlah_sumur_gali_unit' => 'required|type:numeric|caption:&sum; Sumur Gali (Unit)',
        'jumlah_sumur_pompa_unit' => 'required|type:numeric|caption:&sum; Sumur Pompa (Unit)',
        // 'jumlah_sambungan_pdam_sr' => 'type:numeric|caption:&sum; Sambungan PDAM (SR)',
        'jumlah_kran_umum_unit' => 'required|type:numeric|caption:&sum; Kran Umum (Unit)',
        'jumlah_pah_unit' => 'required|type:numeric|caption:&sum; Penampungan Air Hujan (Unit)',
        'nama_bkm' => 'required|type:string|caption:Nama BKM',
        'status_keberdayaan_bkm' => 'required|type:string|caption:Status Keberdayaan BKM',
        'luas_kawasan' => 'required|type:decimal|caption:Luas Kawasan (Ha)',
        'tipografi_karakteristik' => 'required|type:string|caption:Tipografi / Karakteristik',
        'koordinat_latitude' => 'required|type:decimal5',
        'koordinat_longitude' => 'required|type:decimal5',
        'pendidikan_sd' => 'required|type:numeric|caption:&sum; SD',
        'pendidikan_smp' => 'required|type:numeric|caption:&sum; SMP',
        'pendidikan_sma' => 'required|type:numeric|caption:&sum; SMA',
        'pendidikan_perguruan_tinggi' => 'required|type:numeric|caption:&sum; > SMA',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'luas_wilayah' => 'required|numeric',
        // 'jumlah_penduduk' => 'type:numeric|caption:&sum; Penduduk',
        'jumlah_penduduk_laki_laki' => 'required|numeric',
        'jumlah_penduduk_perempuan' => 'required|numeric',
        'jumlah_kk' => 'required|numeric',
        'jumlah_kk_miskin' => 'required|numeric',
        'jumlah_rw_dusun_lingkungan' => 'required|numeric',
        'jumlah_rt' => 'required|numeric',
        'jumlah_jamban_kk' => 'required|numeric',
        'jumlah_septik_tank' => 'required|numeric',
        'jumlah_mck_unit' => 'required|numeric',
        'jumlah_mck_bilik' => 'required|numeric',
        'jumlah_sumur_gali_unit' => 'required|numeric',
        'jumlah_sumur_pompa_unit' => 'required|numeric',
        // 'jumlah_sambungan_pdam_sr' => 'numeric',
        'jumlah_kran_umum_unit' => 'required|numeric',
        'jumlah_pah_unit' => 'required|numeric',
        'nama_bkm' => 'required',
        'status_keberdayaan_bkm' => 'required',
        'luas_kawasan' => 'required|numeric',
        'tipografi_karakteristik' => 'required',
        'koordinat_latitude' => 'required|numeric',
        'koordinat_longitude' => 'required|numeric',
        'pendidikan_sd' => 'required|numeric',
        'pendidikan_smp' => 'required|numeric',
        'pendidikan_sma' => 'required|numeric',
        'pendidikan_perguruan_tinggi' => 'required|numeric',
    ];

    protected $attributes = [
    	'kode_wilayah' => '',
    	'luas_wilayah' => 0,
    	// 'jumlah_penduduk' => 0,
        'jumlah_penduduk_laki_laki' => 0,
        'jumlah_penduduk_perempuan' => 0,
        'jumlah_kk' => 0,
        'jumlah_kk_miskin' => 0,
        'jumlah_rw_dusun_lingkungan' => 0,
        'jumlah_rt' => 0,
        'jumlah_jamban_kk' => 0,
        'jumlah_septik_tank' => 0,
        'jumlah_mck_unit' => 0,
        'jumlah_mck_bilik' => 0,
        'jumlah_sumur_gali_unit' => 0,
        'jumlah_sumur_pompa_unit' => 0,
        // 'jumlah_sambungan_pdam_sr' => 0,
        'jumlah_kran_umum_unit' => 0,
        'jumlah_pah_unit' => 0,
        'nama_bkm' => '',
        'status_keberdayaan_bkm' => '',
        'luas_kawasan' => 0,
        'tipografi_karakteristik' => '',
        'koordinat_latitude' => 0,
        'koordinat_longitude' => 0,
        'pendidikan_sd' => '',
        'pendidikan_smp' => '',
        'pendidikan_sma' => '',
        'pendidikan_perguruan_tinggi' => '',
    ];

    public function getWilayahAttribute()
    {
    	return Wilayah::get_desa_kel($this->kode_wilayah);
    }

}
