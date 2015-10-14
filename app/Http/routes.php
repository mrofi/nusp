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

Route::get('/', ['as' => 'home', function()
{
    if (!config('nusp.frontend')) return redirect('dashboard');
    
    // frontend view        
    return 'frontend';
}]);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Backend'], function()
{
    Route::get('/', function() 
    {
    	$thePage = 'Beranda';
    	return view('backend.beranda', compact('thePage'));
    });

    Route::get('isian/sosialisasi', function() 
    {
    	$thePage = 'Isian Data / Sosialisasi Kabupaten - Kota';
    	$forms = with(new \App\SosialisasiKabKota)->get_forms();
    	return view('backend.isian', compact('thePage', 'forms'));
    });
	
    // Route::controller('/', 'Dashboard');
});

Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => 'auth.api'], function()
{        
    Route::resource('user', 'User'); 

    Route::resource('sosialisasi', 'SosialisasiKabKota');
});

Route::controller('auth', 'Auth\AuthController');

Route::get('buat_password/{urut}', function($urut) {
	$users = \App\User::where('id', '>=', $urut)->get();
	foreach ($users as $user) {
		$user->password = bcrypt(nusp_password($user->password));
		$user->save();
	}
});

Route::get('tes', function() {
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
					$newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('content '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode']];
					$desaKels[] = $newDesaKel;
				}
			}

			$newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug('content '.$kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'desaKels' => $desaKels];
			
			$kabKotas[] = $newKabKota;
		}

		$newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('content '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'kabKotas' => $kabKotas];

		$propinsis[] = $newPropinsi;
	}

	return $propinsis;
});
