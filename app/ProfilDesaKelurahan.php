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
    	'luas_wilayah' => 'type:decimal|caption:Luas Wilayah (m<sup>2</sup>)',
    	// 'jumlah_penduduk' => 'type:numeric|caption:&sum; Penduduk',
        'jumlah_penduduk_laki_laki' => 'type:numeric|caption:&sum; Penduduk Laki-laki',
        'jumlah_penduduk_perempuan' => 'type:numeric|caption:&sum; Perempuan',
        'jumlah_kk' => 'type:numeric|caption:&sum; KK',
        'jumlah_kk_miskin' => 'type:numeric|caption:&sum; KK Miskin',
        'jumlah_rw_dusun_lingkungan' => 'type:numeric|caption:&sum; RW / Dusun / Lingkungan',
        'jumlah_rt' => 'type:numeric|caption:&sum; RT',
        'jumlah_jamban_kk' => 'type:numeric|caption:&sum; Jamban (KK)',
        'jumlah_septik_tank' => 'type:numeric|caption:&sum; Septik Tank (KK)',
        'jumlah_mck_unit' => 'type:numeric|caption:&sum; MCK (unit)',
        'jumlah_mck_bilik' => 'type:numeric|caption:&sum; MCK (Bilik)',
        'jumlah_sumur_gali_unit' => 'type:numeric|caption:&sum; Sumur Gali (Unit)',
        'jumlah_sumur_pompa_unit' => 'type:numeric|caption:&sum; Sumur Pompa (Unit)',
        // 'jumlah_sambungan_pdam_sr' => 'type:numeric|caption:&sum; Sambungan PDAM (SR)',
        'jumlah_kran_umum_unit' => 'type:numeric|caption:&sum; Kran Umum (Unit)',
        'jumlah_pah_unit' => 'type:numeric|caption:&sum; Penampungan Air Hujan (Unit)',
        'nama_bkm' => 'type:string|caption:Nama BKM',
        'status_keberdayaan_bkm' => 'type:string|caption:Status Keberdayaan BKM',
        'luas_kawasan' => 'type:decimal|caption:Luas Kawasan (Ha)',
        'tipografi_karakteristik' => 'type:string|caption:Tipografi / Karakteristik',
        'koordinat_latitude' => 'type:decimal5',
        'koordinat_longitude' => 'type:decimal5',
        'pendidikan_sd' => 'type:numeric|caption:&sum; SD',
        'pendidikan_smp' => 'type:numeric|caption:&sum; SMP',
        'pendidikan_sma' => 'type:numeric|caption:&sum; SMA',
        'pendidikan_perguruan_tinggi' => 'type:numeric|caption:&sum; > SMA',
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
