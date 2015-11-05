<?php

namespace App;

class DataLahan extends BaseModel
{
	protected $fillable = [
		'kode_wilayah',
		'nama_rt_rw',
        'jenis_infrastruktur',
        'lahan_luas_m2',
        'lahan_status',
        'lahan_surat_hibah',
        'lahan_akses_jalan',
        'koordinat_latitude',
        'koordinat_longitude',
        'pemanfaat_jumlah_kk',
        'pemanfaat_jumlah_kk_miskin',
        'pemanfaat_jumlah_jiwa',
        'pemanfaat_jumlah_perempuan',
        'pemanfaat_jumlah_miskin',
    ];


    protected $forms = [
    	'kode_wilayah' => 'required|type:hidden',
    	'nama_rt_rw' => 'required|type:string|caption:Nama RT / RW',
        'jenis_infrastruktur' => 'required|type:string',
        'lahan_luas_m2' => 'required|type:decimal3|caption:Luas (m<sup>2</sup>)',
        'lahan_status' => 'required|type:combo_plus|value:Hibah,Pemda|caption:Status Lahan',
        'lahan_surat_hibah' => 'type:combo|default:Tidak Ada|if:lahan_status=Hibah|value:ada=Ada,tidak ada=Tidak Ada|caption:Ada Surat Hibah?',
        'lahan_akses_jalan' => 'required|type:combo_plus|value:Jalan Lingkungan,Jalan Setapak|caption:Akses Jalan',
        'koordinat_latitude' => 'type:decimal5|caption:Lintang (LU / LS)',
        'koordinat_longitude' => 'type:decimal5|caption:Bujur Timur',
        'pemanfaat_jumlah_kk' => 'required|type:numeric|caption:Jumlah KK',
        'pemanfaat_jumlah_kk_miskin' => 'required|type:numeric|caption:Jumlah KK Miskin',
        'pemanfaat_jumlah_jiwa' => 'required|type:numeric|caption:Jumlah (jiwa)',
        'pemanfaat_jumlah_perempuan' => 'required|type:numeric|caption:Jumlah Perempuan (jiwa)',
        'pemanfaat_jumlah_miskin' => 'required|type:numeric|caption:Jumlah Warga Miskin (jiwa)',

    ];


    protected $rules = [
    	'kode_wilayah' => 'required|numeric',
    	'nama_rt_rw' => 'required',
        'jenis_infrastruktur' => 'required',
        'lahan_luas_m2' => 'required|numeric',
        'lahan_status' => 'required',
        'lahan_surat_hibah' => '',
        'lahan_akses_jalan' => 'required',
        'koordinat_latitude' => 'numeric',
        'koordinat_longitude' => 'numeric',
        'pemanfaat_jumlah_kk' => 'required|numeric',
        'pemanfaat_jumlah_kk_miskin' => 'required|numeric',
        'pemanfaat_jumlah_jiwa' => 'required|numeric',
        'pemanfaat_jumlah_perempuan' => 'required|numeric',
        'pemanfaat_jumlah_miskin' => 'required|numeric',

    ];

    protected $attribbutes = [
    	'kode_wilayah' => '',
    	'nama_rt_rw' => '',
        'jenis_infrastruktur' => '',
        'lahan_luas_m2' => '0',
        'lahan_status' => '',
        'lahan_surat_hibah' => '',
        'lahan_akses_jalan' => '',
        'koordinat_latitude' => '',
        'koordinat_longitude' => '',
        'pemanfaat_jumlah_kk' => '0',
        'pemanfaat_jumlah_kk_miskin' => '0',
        'pemanfaat_jumlah_jiwa' => '0',
        'pemanfaat_jumlah_perempuan' => '0',
        'pemanfaat_jumlah_miskin' => '0',

    ];

    public function getWilayahAttribute()
    {
    	return Wilayah::get_desa_kel($this->kode_wilayah);
    }       

}
