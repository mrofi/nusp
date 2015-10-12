<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/dashboard';
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogging(Request $request)
    {
        $credential = $request->input('credential', '');
        $thepassword = $request->input('thepassword', '');
        $password = nusp_password($thepassword);
        
        if ($credential == '') return redirect($this->loginPath())->withInput($request->except('thepassword'))
                        ->withErrors(['credential' => 'Username / Email Salah']);
                        
        if ($thepassword == '') return redirect($this->loginPath())->withInput($request->except('thepassword'))
                        ->withErrors(['credential' => 'Password Tidak boleh kosong']);
        
        $validator = Validator::make($request->only('credential'), ['credential' => 'email']);
        $this->username = $credential_type = (! $validator->fails() && config('livepos.useremail')) ? 'email' : 'username';
        
        $request->session()->flash('credential', $credential_type);
        
        $request->merge($credentials = [$credential_type => $credential, 'password' => $password]);
        
        return $this->postLogin($request);
    }
}
