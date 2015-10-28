<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapKegiatan extends Wilayah
{
    protected $tahapanPersiapan = [
		\App\TahapPersiapanSosialisasiKelurahan::class,
		\App\TahapPersiapanIdentifikasiKelembagaan::class,
		\App\TahapPersiapanRembugKhususPerempuanPertama::class,
		\App\TahapPersiapanMusyawarahKelurahanPertama::class,
	];
	protected $tahapanPerencanaan = [
		\App\TahapPerencanaanPelatihanBkm::class,
		\App\TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis::class,
		\App\TahapPerencanaanMusyawarahKelurahanKedua::class,
		\App\TahapPerencanaanPenyusunanDokumenNuap::class,
		\App\TahapPerencanaanVerifikasiDanKonsolidasiNuap::class,
		\App\TahapPerencanaanRevisiDokumenNuap::class,
		\App\TahapPerencanaanMusyawarahKelurahanKetiga::class,
		\App\TahapPerencanaanPenyusunanRkm::class,
		\App\TahapPerencanaanVerifikasiFinalisasiDokumenRkm::class,
		\App\TahapPerencanaanPembentukanTppi::class,
		\App\TahapPerencanaanPembentukanKpp::class,
	];
	protected $tahapanKonstruksi = [
		\App\TahapKonstruksiKontrakSp3::class,
		\App\TahapKonstruksiRembugKhususPerempuanKedua::class,
		\App\TahapKonstruksiMusyawarahKelurahanKeempat::class,
		\App\TahapKonstruksiPelaksanaanFisik::class,
		\App\TahapKonstruksiTahap1::class,
		\App\TahapKonstruksiTahap2::class,
	];
	protected $tahapanPascaKonstruksi = [
		\App\TahapPascaKonstruksiMusyawarahKelurahanKelima::class,
		\App\TahapPascaKonstruksiSerahTerimaPekerjaan::class,
		\App\TahapPascaKonstruksiPemanfaatan::class,
		\App\TahapPascaKonstruksiPemeliharaan::class,
		\App\TahapPascaKonstruksiTahap3::class,
	];

	public static function get_kegiatan($kode_wilayah = '')
	{
		return ['wilayah' => parent::get_wilayah($kode_wilayah)];
	}

}
