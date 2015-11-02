<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth', 'namespace' => 'Backend'], function()
{
    Route::get('/', ['as' => 'home', function() 
    {
	    if (config('nusp.frontend')) return 'frontend';
	    // frontend view        

		$thePage = 'Data Semua Wilayah';
		$formSosialisasi = with(new \App\SosialisasiKabKota)->get_forms();
		$formPenetapanLokasi = with(new \App\PenetapanLokasi)->get_forms();
		$formProfilDesaKel = with(new \App\ProfilDesaKelurahan)->get_forms();
		$formTahapPersiapanSosialisasiKelurahan = with(new \App\TahapPersiapanSosialisasiKelurahan)->get_forms();
		$formTahapPersiapanIdentifikasiKelembagaan  = with(new \App\TahapPersiapanIdentifikasiKelembagaan)->get_forms();
		$formTahapPersiapanRembugKhususPerempuanPertama  = with(new \App\TahapPersiapanRembugKhususPerempuanPertama)->get_forms();
		$formTahapPersiapanMusyawarahKelurahanPertama  = with(new \App\TahapPersiapanMusyawarahKelurahanPertama)->get_forms();
		$formTahapPerencanaanPelatihanBkm  = with(new \App\TahapPerencanaanPelatihanBkm)->get_forms();
		$formTahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis  = with(new \App\TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis)->get_forms();
		$formTahapPerencanaanRembugKhususPerempuanKedua  = with(new \App\TahapPerencanaanRembugKhususPerempuanKedua)->get_forms();
		$formTahapPerencanaanMusyawarahKelurahanKedua  = with(new \App\TahapPerencanaanMusyawarahKelurahanKedua)->get_forms();
		$formTahapPerencanaanPenyusunanDokumenNuap  = with(new \App\TahapPerencanaanPenyusunanDokumenNuap)->get_forms();
		$formTahapPerencanaanVerifikasiDanKonsolidasiNuap  = with(new \App\TahapPerencanaanVerifikasiDanKonsolidasiNuap)->get_forms();
		$formTahapPerencanaanRevisiDokumenNuap  = with(new \App\TahapPerencanaanRevisiDokumenNuap)->get_forms();
		$formTahapPerencanaanMusyawarahKelurahanKetiga  = with(new \App\TahapPerencanaanMusyawarahKelurahanKetiga)->get_forms();
		$formTahapPerencanaanPenyusunanRkm  = with(new \App\TahapPerencanaanPenyusunanRkm)->get_forms();
		$formTahapPerencanaanVerifikasiFinalisasiDokumenRkm  = with(new \App\TahapPerencanaanVerifikasiFinalisasiDokumenRkm)->get_forms();
		$formTahapPerencanaanPembentukanTppi  = with(new \App\TahapPerencanaanPembentukanTppi)->get_forms();
		$formTahapPerencanaanPembentukanKpp  = with(new \App\TahapPerencanaanPembentukanKpp)->get_forms();
		$formTahapKonstruksiKontrakSp3  = with(new \App\TahapKonstruksiKontrakSp3)->get_forms();
		$formTahapKonstruksiRembugKhususPerempuanKetiga  = with(new \App\TahapKonstruksiRembugKhususPerempuanKetiga)->get_forms();
		$formTahapKonstruksiMusyawarahKelurahanKeempat  = with(new \App\TahapKonstruksiMusyawarahKelurahanKeempat)->get_forms();
		$formTahapKonstruksiPelaksanaanFisik  = with(new \App\TahapKonstruksiPelaksanaanFisik)->get_forms();
		$formTahapKonstruksiTahap1  = with(new \App\TahapKonstruksiTahap1)->get_forms();
		$formTahapKonstruksiTahap2  = with(new \App\TahapKonstruksiTahap2)->get_forms();
		$formTahapPascaKonstruksiMusyawarahKelurahanKelima  = with(new \App\TahapPascaKonstruksiMusyawarahKelurahanKelima)->get_forms();
		$formTahapPascaKonstruksiSerahTerimaPekerjaan  = with(new \App\TahapPascaKonstruksiSerahTerimaPekerjaan)->get_forms();
		$formTahapPascaKonstruksiPemanfaatan  = with(new \App\TahapPascaKonstruksiPemanfaatan)->get_forms();
		$formTahapPascaKonstruksiPemeliharaan  = with(new \App\TahapPascaKonstruksiPemeliharaan)->get_forms();
		$formTahapPascaKonstruksiTahap3  = with(new \App\TahapPascaKonstruksiTahap3)->get_forms();
		return view('backend.isian', compact('thePage', 'formSosialisasi', 'formPenetapanLokasi', 'formProfilDesaKel', 'formTahapPersiapanSosialisasiKelurahan', 'formTahapPersiapanIdentifikasiKelembagaan', 'formTahapPersiapanRembugKhususPerempuanPertama', 'formTahapPersiapanMusyawarahKelurahanPertama', 'formTahapPerencanaanPelatihanBkm', 'formTahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis', 'formTahapPerencanaanRembugKhususPerempuanKedua', 'formTahapPerencanaanMusyawarahKelurahanKedua', 'formTahapPerencanaanPenyusunanDokumenNuap', 'formTahapPerencanaanVerifikasiDanKonsolidasiNuap', 'formTahapPerencanaanRevisiDokumenNuap', 'formTahapPerencanaanMusyawarahKelurahanKetiga', 'formTahapPerencanaanPenyusunanRkm', 'formTahapPerencanaanVerifikasiFinalisasiDokumenRkm', 'formTahapPerencanaanPembentukanTppi', 'formTahapPerencanaanPembentukanKpp', 'formTahapKonstruksiKontrakSp3', 'formTahapKonstruksiRembugKhususPerempuanKetiga', 'formTahapKonstruksiMusyawarahKelurahanKeempat', 'formTahapKonstruksiPelaksanaanFisik', 'formTahapKonstruksiTahap1', 'formTahapKonstruksiTahap2', 'formTahapPascaKonstruksiMusyawarahKelurahanKelima', 'formTahapPascaKonstruksiSerahTerimaPekerjaan', 'formTahapPascaKonstruksiPemanfaatan', 'formTahapPascaKonstruksiPemeliharaan', 'formTahapKonstruksiKontrakSp3', 'formTahapPascaKonstruksiTahap3'));
    }]);

    Route::get('report', function() 
    {
    	$thePage = 'Laporan Sosialisasi Kabupaten / Kota';
    	$formSosialisasi = with(new \App\SosialisasiKabKota)->get_forms();
    	$formPenetapanLokasi = with(new \App\PenetapanLokasi)->get_forms();
    	$formProfilDesaKel = with(new \App\ProfilDesaKelurahan)->get_forms();
    	return view('report.laporan', compact('thePage', 'formSosialisasi', 'formPenetapanLokasi', 'formProfilDesaKel'));
    });

});

Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => 'auth.api'], function()
{        
    Route::resource('user', 'User'); 

    Route::resource('sosialisasi', 'SosialisasiKabKota');

    Route::resource('penetapan-lokasi', 'PenetapanLokasi');

    Route::resource('profil-desa-kelurahan', 'ProfilDesaKelurahan');

    Route::get('tahap-kegiatan', 'TahapKegiatan@index');
    Route::get('tahap-kegiatan/{kode_wilayah}', 'TahapKegiatan@all');
    Route::get('tahap-persiapan/{kode_wilayah}', 'TahapKegiatan@persiapan');
    Route::get('tahap-perencanaan/{kode_wilayah}', 'TahapKegiatan@perencanaan');
    Route::get('tahap-konstruksi/{kode_wilayah}', 'TahapKegiatan@konstruksi');
    Route::get('tahap-pasca-konstruksi/{kode_wilayah}', 'TahapKegiatan@pascaKonstruksi');

    Route::resource('tahap-1/sosialisasi-kelurahan', 'TahapPersiapanSosialisasiKelurahan');
    Route::resource('tahap-1/identifikasi-kelembagaan', 'TahapPersiapanIdentifikasiKelembagaan');
    Route::resource('tahap-1/rembug-perempuan-1', 'TahapPersiapanRembugKhususPerempuanPertama');
    Route::resource('tahap-1/musyawarah-kelurahan-1', 'TahapPersiapanMusyawarahKelurahanPertama');
    Route::resource('tahap-2/pelatihan-bkm', 'TahapPerencanaanPelatihanBkm');
    Route::resource('tahap-2/survey-review-pjm-pronangkis', 'TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis');
    Route::resource('tahap-2/rembug-perempuan-2', 'TahapPerencanaanRembugKhususPerempuanKedua');
    Route::resource('tahap-2/musyawarah-kelurahan-2', 'TahapPerencanaanMusyawarahKelurahanKedua');
    Route::resource('tahap-2/penyusunan-dokumen-nuap', 'TahapPerencanaanPenyusunanDokumenNuap');
    Route::resource('tahap-2/verifikasi-konsolidasi-nuap', 'TahapPerencanaanVerifikasiDanKonsolidasiNuap');
    Route::resource('tahap-2/revisi-dokumen-nuap', 'TahapPerencanaanRevisiDokumenNuap');
    Route::resource('tahap-2/musyawarah-kelurahan-3', 'TahapPerencanaanMusyawarahKelurahanKetiga');
    Route::resource('tahap-2/penyusunan-rkm', 'TahapPerencanaanPenyusunanRkm');
    Route::resource('tahap-2/verifikasi-finalisasi-rkm', 'TahapPerencanaanVerifikasiFinalisasiDokumenRkm');
    Route::resource('tahap-2/pembentukan-tppi', 'TahapPerencanaanPembentukanTppi');
    Route::resource('tahap-2/pembentukan-kpp', 'TahapPerencanaanPembentukanKpp');
    Route::resource('tahap-3/kontrak-sp3', 'TahapKonstruksiKontrakSp3');
    Route::resource('tahap-3/rembug-perempuan-3', 'TahapKonstruksiRembugKhususPerempuanKetiga');
    Route::resource('tahap-3/musyawarah-kelurahan-4', 'TahapKonstruksiMusyawarahKelurahanKeempat');
    Route::resource('tahap-3/pelaksanaan-fisik', 'TahapKonstruksiPelaksanaanFisik');
    Route::resource('tahap-3/tahap-1', 'TahapKonstruksiTahap1');
    Route::resource('tahap-3/tahap-2', 'TahapKonstruksiTahap2');
    Route::resource('tahap-4/musyawarah-kelurahan-5', 'TahapPascaKonstruksiMusyawarahKelurahanKelima');
    Route::resource('tahap-4/serah-terima-pekerjaan', 'TahapPascaKonstruksiSerahTerimaPekerjaan');
    Route::resource('tahap-4/pemanfaatan', 'TahapPascaKonstruksiPemanfaatan');
    Route::resource('tahap-4/pemeliharaan', 'TahapPascaKonstruksiPemeliharaan');
    Route::resource('tahap-4/tahap-3', 'TahapPascaKonstruksiTahap3');
    
    Route::get('all', function() {
		$wilayah =  auth()->user()->wilayah;
		// return $wilayah;

		$propinsis = [];
		foreach ($wilayah as $kode_p => $propinsi) 
		{
			if (!isset($propinsi['kabKotas'])) continue;
			$kabKotas = [];
			foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
			{
				if (!isset($kabKota['kecs'])) continue;
				$desaKels = [];
				foreach ($kabKota['kecs'] as $kode_k => $kec) 
				{
					if (!isset($kec['desaKels'])) continue;
					foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
					{
						$newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode'], 'role_id' => $desaKel['role_id']];
						$desaKels[] = $newDesaKel;
					}
				}

				$newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'role_id' => $kabKota['role_id'], 'desaKels' => $desaKels];
				
				$kabKotas[] = $newKabKota;
			}

			$newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'role_id' => $propinsi['role_id'], 'kabKotas' => $kabKotas];

			$propinsis[] = $newPropinsi;
		}

		return $propinsis;
	});

	Route::get('propinsi', function() 
	{
		return auth()->user()->propinsi;
	});

	Route::get('kab-kota', function() 
	{
		return auth()->user()->kabKota;	
	});

	Route::get('desa-kel', function() 
	{	
		return auth()->user()->desaKel;
	});

	Route::post('foto', 'Foto@upload');

	Route::get('foto/{id}', 'Foto@get');

	Route::post('file', 'File@upload');

	Route::get('file/{id}', 'File@get');

});

Route::controller('auth', 'Auth\AuthController');

Route::group(['prefix' => 'download', 'namespace' => 'Api', 'middleware' => 'auth.api'], function()
{
	Route::get('sosialisasi-kabupaten-kota', 'SosialisasiKabKota@download');

	Route::get('penetapan-lokasi', 'PenetapanLokasi@download');

	Route::get('profil-desa-kelurahan', 'ProfilDesaKelurahan@download');

});

