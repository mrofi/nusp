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
		$formDataKontrak = with(new \App\DataKontrak)->get_forms();
		$formDataLahan = with(new \App\DataLahan)->get_forms();
		return view('backend.isian', compact('thePage', 'formSosialisasi', 'formPenetapanLokasi', 'formProfilDesaKel', 'formTahapPersiapanSosialisasiKelurahan', 'formTahapPersiapanIdentifikasiKelembagaan', 'formTahapPersiapanRembugKhususPerempuanPertama', 'formTahapPersiapanMusyawarahKelurahanPertama', 'formTahapPerencanaanPelatihanBkm', 'formTahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis', 'formTahapPerencanaanRembugKhususPerempuanKedua', 'formTahapPerencanaanMusyawarahKelurahanKedua', 'formTahapPerencanaanPenyusunanDokumenNuap', 'formTahapPerencanaanVerifikasiDanKonsolidasiNuap', 'formTahapPerencanaanRevisiDokumenNuap', 'formTahapPerencanaanMusyawarahKelurahanKetiga', 'formTahapPerencanaanPenyusunanRkm', 'formTahapPerencanaanVerifikasiFinalisasiDokumenRkm', 'formTahapPerencanaanPembentukanTppi', 'formTahapPerencanaanPembentukanKpp', 'formTahapKonstruksiKontrakSp3', 'formTahapKonstruksiRembugKhususPerempuanKetiga', 'formTahapKonstruksiMusyawarahKelurahanKeempat', 'formTahapKonstruksiPelaksanaanFisik', 'formTahapKonstruksiTahap1', 'formTahapKonstruksiTahap2', 'formTahapPascaKonstruksiMusyawarahKelurahanKelima', 'formTahapPascaKonstruksiSerahTerimaPekerjaan', 'formTahapPascaKonstruksiPemanfaatan', 'formTahapPascaKonstruksiPemeliharaan', 'formTahapKonstruksiKontrakSp3', 'formTahapPascaKonstruksiTahap3', 'formDataKontrak', 'formDataLahan'));
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

    Route::resource('data-kontrak', 'DataKontrak');
    Route::resource('data-lahan', 'DataLahan');
    
    Route::get('all', function() {
		$wilayah =  auth()->user()->wilayah;

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

	Route::get('kontrak-lahan-pemanfaat', function()
	{
		$title = 'Kontrak, Lahan dan Pemanfaat';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            $sheetTitle = 'Data Kontrak';

            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle)
            {
                $sheet->fromArray(with(new \App\DataKontrak)->excelDesaKel());

                $sheet->prependRow(1, [$sheetTitle]);

                $sheet->setAutoSize(true);

                $sheet->setWidth('A', 5);
            });

            $sheetTitle = 'Data Lahan Dan Pemanfaat';

            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle)
            {
                $sheet->fromArray(with(new \App\DataLahan)->excelDesaKel());

                $sheet->prependRow(1, [$sheetTitle]);

                $sheet->setAutoSize(true);

                $sheet->setWidth('A', 5);
            });

        })->download('xlsx');
	});

	Route::get('tahap-persiapan', function()
	{
		$title = 'Tahap Persiapan';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            foreach(with(new \App\TahapKegiatan)->getPersiapan() as $tahapan)
            {	            
	            $sheetTitle = substr(html_entity_decode($tahapan::$title), 0, 30);

	            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle, $tahapan)
	            {
	                $sheet->fromArray(with(new $tahapan)->excelDataKabKota(function($data = []) 
	                {
	                  if (isset($data['file_id'])) $data['file_id'] = ($data['file_id'] != null) ? 'Ada' : 'Tidak Ada';
	                  if (isset($data['foto_id'])) $data['foto_id'] = ($data['foto_id'] != null) ? 'Ada' : 'Tidak Ada';

	                  return $data;
	                }));

	                $sheet->prependRow(1, [html_entity_decode($tahapan::$title)]);

	                $sheet->setAutoSize(true);

	                $sheet->setWidth('A', 5);
	            });
            }

        })->download('xlsx');
	});

	Route::get('tahap-perencanaan', function()
	{
		$title = 'Tahap Perencanaan';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            foreach(with(new \App\TahapKegiatan)->getPerencanaan() as $tahapan)
            {	            
	            $sheetTitle = substr(html_entity_decode($tahapan::$title), 0, 30);

	            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle, $tahapan)
	            {
					$sheet->fromArray(with(new $tahapan)->excelDataKabKota(function($data = []) 
	                {
		                if (isset($data['file_id'])) $data['file_id'] = ($data['file_id'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['foto_id'])) $data['foto_id'] = ($data['foto_id'] != null) ? 'Ada' : 'Tidak Ada';
		                
		                return $data;
	                }));
	                $sheet->prependRow(1, [html_entity_decode($tahapan::$title)]);

	                $sheet->setAutoSize(true);

	                $sheet->setWidth('A', 5);
	            });
            }

        })->download('xlsx');
	});

	Route::get('tahap-konstruksi', function()
	{
		$title = 'Tahap Konstruksi';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            foreach(with(new \App\TahapKegiatan)->getKonstruksi() as $tahapan)
            {	            
	            $sheetTitle = substr(html_entity_decode($tahapan::$title), 0, 30);

	            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle, $tahapan)
	            {
	                $sheet->fromArray(with(new $tahapan)->excelDataKabKota(function($data = []) 
	                {
		                if (isset($data['file_id'])) $data['file_id'] = ($data['file_id'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['foto_id'])) $data['foto_id'] = ($data['foto_id'] != null) ? 'Ada' : 'Tidak Ada';
						if (isset($data['kontrak_sp3'])) $data['kontrak_sp3'] = ($data['kontrak_sp3'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['ringkasan_kontrak'])) $data['ringkasan_kontrak'] = ($data['ringkasan_kontrak'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['file_spm'])) $data['file_spm'] = ($data['file_spm'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['file_sp2d'])) $data['file_sp2d'] = ($data['file_sp2d'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['file_berita_acara'])) $data['file_berita_acara'] = ($data['file_berita_acara'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['file_kuitansi'])) $data['file_kuitansi'] = ($data['file_kuitansi'] != null) ? 'Ada' : 'Tidak Ada';
		                
		                return $data;
	                }));

	                $sheet->prependRow(1, [html_entity_decode($tahapan::$title)]);

	                $sheet->setAutoSize(true);

	                $sheet->setWidth('A', 5);
	            });
            }

        })->download('xlsx');
	});
	
	Route::get('tahap-pasca-konstruksi', function()
	{
		$title = 'Tahap Pasca Konstruksi';
        
        $title2 = 'download NUSP 2 '.$title;
        
        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
        {
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            foreach(with(new \App\TahapKegiatan)->getPascaKonstruksi() as $tahapan)
            {	            
	            $sheetTitle = substr(html_entity_decode($tahapan::$title), 0, 30);

	            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle, $tahapan)
	            {
	            	$sheet->fromArray(with(new $tahapan)->excelDataKabKota(function($data = []) 
	                {
		                if (isset($data['file_id'])) $data['file_id'] = ($data['file_id'] != null) ? 'Ada' : 'Tidak Ada';
		                if (isset($data['foto_id'])) $data['foto_id'] = ($data['foto_id'] != null) ? 'Ada' : 'Tidak Ada';
						if (isset($data['file_tppi_ke_bkm'])) $data['file_tppi_ke_bkm'] = ($data['file_tppi_ke_bkm'] != null) ? 'Ada' : 'Tidak Ada';
						if (isset($data['file_bkm_ke_staker_ppk_nusp_2'])) $data['file_bkm_ke_staker_ppk_nusp_2'] = ($data['file_bkm_ke_staker_ppk_nusp_2'] != null) ? 'Ada' : 'Tidak Ada';
						if (isset($data['file_ppk_ke_kpp'])) $data['file_ppk_ke_kpp'] = ($data['file_ppk_ke_kpp'] != null) ? 'Ada' : 'Tidak Ada';
		                
		                return $data;
	                }));

	                $sheet->prependRow(1, [html_entity_decode($tahapan::$title)]);

	                $sheet->setAutoSize(true);

	                $sheet->setWidth('A', 5);
	            });
            }

        })->download('xlsx');
	});

	Route::get('form-penyerapan-blm', function()
	{
		$title = 'Form Penyerapan BLM';

        $title2 = 'download NUSP 2 '.$title;

        \Excel::create(camel_case($title2), function($excel) use ($title, $title2)
		{
            $excel->setTitle(ucwords($title2));
            // Chain the setters
            $excel
                  ->setManager('NUSP 2')
                  ->setCreator('NUSP 2')
                  ->setCompany('Kementrian Pekerjaan Umum');

            $sheetTitle = $title;

            $excel->sheet(snake_case($sheetTitle, '_'), function($sheet) use ($sheetTitle)
            {

                $data1 = with(new \App\TahapPersiapanIdentifikasiKelembagaan)->excelDesaKel();

                $data2 = with(new \App\TahapKonstruksiKontrakSp3)->excelDesaKel();

                $data3 = with(new \App\TahapKonstruksiTahap1)->excelDesaKel(null, function($data = [])
            	{
            		foreach ($data as $key => $value) 
            		{
            			$data[$key.'_3'] = $value;
            			unset($data[$key]);
            		}
            		return array_only($data, ['No Spm_3','Tanggal Spm_3','No Sp2d_3','Tanggal Sp2d_3','Jumlah_3']);
            	});

                $data4 = with(new \App\TahapKonstruksiTahap2)->excelDesaKel(null, function($data = [])
            	{
            		foreach ($data as $key => $value) 
            		{
            			$data[$key.'_4'] = $value;
            			unset($data[$key]);
            		}
            		return array_only($data, ['No Spm_4','Tanggal Spm_4','No Sp2d_4','Tanggal Sp2d_4','Jumlah_4']);
            	});
                
                $data5 = with(new \App\TahapPascaKonstruksiTahap3)->excelDesaKel(null, function($data = [])
            	{
            		foreach ($data as $key => $value) 
            		{
            			$data[$key.'_5'] = $value;
            			unset($data[$key]);
            		}
            		return array_only($data, ['No Spm_5','Tanggal Spm_5','No Sp2d_5','Tanggal Sp2d_5','Jumlah_5']);
            	});

                $allData = [];

                for ($i = 0; $i < count($data1); $i++)
                {

                	$data1[$i] = array_only($data1[$i], ['No','Propinsi','Kabupaten / Kota','Kecamatan','Desa / Kelurahan','Kode Wilayah','Nama BKM']);

                	$data2[$i] = array_only($data2[$i], ['Paket Pekerjaan','No Kontrak','Tanggal Kontrak','Nilai Kontrak','Tanggal Mulai','Tanggal Selesai']);

                	$jumlahDana = (isset($data3[$i]['Jumlah_3']) ? $data3[$i]['Jumlah_3'] : 0) + (isset($data4[$i]['Jumlah_4']) ? $data4[$i]['Jumlah_4'] : 0) + (isset($data5[$i]['Jumlah_5']) ? $data5[$i]['Jumlah_5'] : 0);

                	$persentase = isset($data2[$i]['Nilai Kontrak']) && $data2[$i]['Nilai Kontrak'] > 0 ? $jumlahDana / $data2[$i]['Nilai Kontrak'] * 100 : 0;

                	$data = array_merge($data1[$i], $data2[$i], $data3[$i], $data4[$i], $data5[$i], ['Total Dana' => $jumlahDana, 'Total Dana (%)' => $persentase]);

                	$allData[] = $data	;
                }

                $header = array_map(function($v) 
            	{
            		return trim($v, '_345');
            	}, array_keys($allData[0]));

                $sheet->fromArray($allData, null, 'A1', false, false);

                $sheet->prependRow(1, $header);

                $header[7] = 'Kontrak SP3';
                $header[8] = 'Kontrak SP3';
                $header[9] = 'Kontrak SP3';
                $header[10] = 'Kontrak SP3';
                $header[11] = 'Kontrak SP3';
                $header[12] = 'Kontrak SP3';
                $header[13] = 'SPM';
                $header[14] = 'SPM';
                $header[15] = 'SP2D';
                $header[16] = 'SP2D';
                $header[17] = 'Jumlah Dana';
                $header[18] = 'SPM';
                $header[19] = 'SPM';
                $header[20] = 'SP2D';
                $header[21] = 'SP2D';
                $header[22] = 'Jumlah Dana';
                $header[23] = 'SPM';
                $header[24] = 'SPM';
                $header[25] = 'SP2D';
                $header[26] = 'SP2D';
                $header[27] = 'Jumlah Dana';

                $sheet->prependRow(1, $header);

                $header[13] = 'TAHAP-1 (40%)';
                $header[14] = 'TAHAP-1 (40%)';
                $header[15] = 'TAHAP-1 (40%)';
                $header[16] = 'TAHAP-1 (40%)';
                $header[17] = 'TAHAP-1 (40%)';
                $header[18] = 'TAHAP-2 (30%)';
                $header[19] = 'TAHAP-2 (30%)';
                $header[20] = 'TAHAP-2 (30%)';
                $header[21] = 'TAHAP-2 (30%)';
                $header[22] = 'TAHAP-2 (30%)';
                $header[23] = 'TAHAP-3 (30%)';
                $header[24] = 'TAHAP-3 (30%)';
                $header[25] = 'TAHAP-3 (30%)';
                $header[26] = 'TAHAP-3 (30%)';
                $header[27] = 'TAHAP-3 (30%)';

                $sheet->prependRow(1, $header);

                $header[13] = 'PENCAIRAN BLM';
                $header[14] = 'PENCAIRAN BLM';
                $header[15] = 'PENCAIRAN BLM';
                $header[16] = 'PENCAIRAN BLM';
                $header[17] = 'PENCAIRAN BLM';
                $header[18] = 'PENCAIRAN BLM';
                $header[19] = 'PENCAIRAN BLM';
                $header[20] = 'PENCAIRAN BLM';
                $header[21] = 'PENCAIRAN BLM';
                $header[22] = 'PENCAIRAN BLM';
                $header[23] = 'PENCAIRAN BLM';
                $header[24] = 'PENCAIRAN BLM';
                $header[25] = 'PENCAIRAN BLM';
                $header[26] = 'PENCAIRAN BLM';
                $header[27] = 'PENCAIRAN BLM';
                $header[28] = 'TOTAL';
                $header[29] = 'TOTAL';

                $sheet->prependRow(1, $header);


                $sheet->prependRow(1, [$sheetTitle]);

                $sheet->setMergeColumn([
                	'columns' => ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                	'rows' => [[2, 5]]
                ]);

                $sheet->setMergeColumn([
                	'columns' => ['AC','AD'],
                	'rows' => [[3, 5]]
                ]);

                $sheet->setMergeColumn([
                	'columns' => ['R','W','AB'],
                	'rows' => [[4, 5]]
                ]);

                $sheet->mergeCells('H2:M4');
                $sheet->mergeCells('N2:AB2');
                $sheet->mergeCells('N3:R3');
                $sheet->mergeCells('S3:W3');
                $sheet->mergeCells('X3:AB3');
                $sheet->mergeCells('N4:O4');
                $sheet->mergeCells('P4:Q4');
                $sheet->mergeCells('S4:T4');
                $sheet->mergeCells('U4:V4');
                $sheet->mergeCells('X4:Y4');
                $sheet->mergeCells('Z4:AA4');
                
                $sheet->cells('A2:AD5', function($cell)
                {
                	$cell->setAlignment('center');
                	$cell->setValignment('middle');
                });

                $sheet->setAutoSize(true);

                $sheet->setWidth('A', 5);

			});
        })->download('xlsx');
	});
});

