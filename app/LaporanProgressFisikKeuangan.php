<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanProgressFisikKeuangan extends BaseApiModel
{
    protected $fillable = [

		'kode_wilayah',
        'periode',
        'blm',
        'swadaya',
        'swadaya_in_kind_material',
        'swadaya_in_kind_material_rp',
        'swadaya_in_kind_lahan_ha',
        'swadaya_in_kind_lahan_rp',
        'swadaya_in_kind_hok',
        'swadaya_in_kind_hok_rp',
        'progress_fisik_persentase',
        'tenaga_kerja_laki_laki',
        'tenaga_kerja_perempuan',
        'hari_orang_kerja',
        'jumlah_insentif',
        'laporan_penggunaan_material',
        'daftar_peserta_hadir',
        'pencatatan_dalam_bku',
        'kelengkapan_bukti_lainnya',
        'masalah_pelaksanaan',
        'tindak_lanjut',

    ];

    protected $forms = [

    	'kode_wilayah' => 'required|type:hidden',
        'periode' => 'required|type:date',
        'blm' => 'required|type:numeric|caption:BLM',
        'swadaya' => 'required|type:numeric|',
        'swadaya_in_kind_material' => 'required|type:string|caption:Material',
        'swadaya_in_kind_material_rp' => 'required|type:currency|caption:Nilai Material',
        'swadaya_in_kind_lahan_ha' => 'required|type:decimal3|caption:Luas Lahan (Ha)',
        'swadaya_in_kind_lahan_rp' => 'required|type:currency|caption:Nilai Lahan',
        'swadaya_in_kind_hok' => 'required|type:numeric|caption:HOK',
        'swadaya_in_kind_hok_rp' => 'required|type:currency|caption:Nilai HOK (Rp)',
        'progress_fisik_persentase' => 'required|type:decimal|caption:Persentase (%)',
        'tenaga_kerja_laki_laki' => 'required|type:numeric|caption:Laki - laki',
        'tenaga_kerja_perempuan' => 'required|type:numeric|caption:Perempuan',
        'hari_orang_kerja' => 'required|type:numeric',
        'jumlah_insentif' => 'required|type:numeric',
        'laporan_penggunaan_material' => 'required|type:combo|value:ada=Ada,tidak ada=Tidak Ada',
        'daftar_peserta_hadir' => 'required|type:combo|value:ada=Ada,tidak ada=Tidak Ada',
        'pencatatan_dalam_bku' => 'required|type:combo|value:ada=Ada,tidak ada=Tidak Ada',
        'kelengkapan_bukti_lainnya' => 'required|type:combo|value:ada=Ada,tidak ada=Tidak Ada',
        'masalah_pelaksanaan' => 'required|type:text',
        'tindak_lanjut' => 'required|type:text',

    ];


    protected $rules = [

    	'kode_wilayah' => 'required|numeric',
        'periode' => 'required|date',
        'blm' => 'required|numeric',
        'swadaya' => 'required|numeric',
        'swadaya_in_kind_material' => 'required',
        'swadaya_in_kind_material_rp' => 'required|numeric',
        'swadaya_in_kind_lahan_ha' => 'required|numeric',
        'swadaya_in_kind_lahan_rp' => 'required|numeric',
        'swadaya_in_kind_hok' => 'required|numeric',
        'swadaya_in_kind_hok_rp' => 'required|numeric',
        'progress_fisik_persentase' => 'required|numeric',
        'tenaga_kerja_laki_laki' => 'required|numeric',
        'tenaga_kerja_perempuan' => 'required|numeric',
        'hari_orang_kerja' => 'required|numeric',
        'jumlah_insentif' => 'required|numeric',
        'laporan_penggunaan_material' => 'required',
        'daftar_peserta_hadir' => 'required',
        'pencatatan_dalam_bku' => 'required',
        'kelengkapan_bukti_lainnya' => 'required',
        'masalah_pelaksanaan' => 'required',
        'tindak_lanjut' => 'required',

    ];



    protected $attributes = [

    	'kode_wilayah' => '',
        'periode' => '',
        'blm' => '0',
        'swadaya' => '0',
        'swadaya_in_kind_material' => '',
        'swadaya_in_kind_material_rp' => '0',
        'swadaya_in_kind_lahan_ha' => '0',
        'swadaya_in_kind_lahan_rp' => '0',
        'swadaya_in_kind_hok' => '0',
        'swadaya_in_kind_hok_rp' => '0',
        'progress_fisik_persentase' => '0',
        'tenaga_kerja_laki_laki' => '0',
        'tenaga_kerja_perempuan' => '0',
        'hari_orang_kerja' => '0',
        'jumlah_insentif' => '0',
        'laporan_penggunaan_material' => '',
        'daftar_peserta_hadir' => '',
        'pencatatan_dalam_bku' => '',
        'kelengkapan_bukti_lainnya' => '',
        'masalah_pelaksanaan' => '',
        'tindak_lanjut' => '',

    ];


}
