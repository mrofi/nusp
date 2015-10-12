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

    Route::controller('/', 'Dashboard');
	
});

Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => 'auth.api'], function()
{        
    Route::resource('user', 'User'); 
});

Route::controller('auth', 'Auth\AuthController');

Route::get('buat_password/{urut}', function($urut) {
	$users = \App\User::where('id', '>=', $urut)->get();
	foreach ($users as $user) {
		$user->password = bcrypt(nusp_password($user->password));
		$user->save();
	}
});
