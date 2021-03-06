<?php

namespace App;

use Session;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends BaseModel implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // public static function create(Array $data = array())
    // {
    //     if ($data == array()) return;
    //     $data['api_key'] = str_random(64);
    //     $data['public_key'] = 'KEY-'.str_random(64);
        
    //     return parent::create($data);
    // }

    public function isAdmin($wilayah = null, $adminName = '')
    {
        $admin = Role::where('role', $adminName == '' ? 'Admin' : $adminName)->first();

        return $this->hasRole($admin->id, $wilayah);
    }

    public function hasRole($role_id = null, $kode_wilayah = null)
    {
        if ($role_id == null && $kode_wilayah == null) return false;

        $s_role = ($role_id == null) ? '0' :  $role_id;

        $s_kode = ($kode_wilayah == null) ? '0' :  $kode_wilayah;

        $hasRole = \Session::get('roles.'.auth()->user()->id.'.'.$s_role.'.'.$s_kode, null);

        if ($hasRole !== null) return $hasRole;

        $userRole = UserWilayahRole::where('user_id', $this->id);

        if ($kode_wilayah == null) return $userRole->where('role_id', $role_id)->first() != null;

        $wilayahs = [];

        if ($role_id == null)
        {

            $roles = Role::all();
            foreach ($roles as $role) 
            {
                $wilayahs = array_merge($wilayahs, $this->getWilayahPerRole($role->id));    
            }
        }
        else
        {
            $wilayahs = $this->getWilayahPerRole($role_id);
        }

        $hasRole = array_search($kode_wilayah, array_column($wilayahs, 'kode')) !== false;
        
        \Session::put('roles.'.auth()->user()->id.'.'.$s_role.'.'.$s_kode, $hasRole);

        return $hasRole; 
    }

    public function hasForbidden($role_id = null, $kode_wilayah = null)
    {
        return ! $this->hasRole($role_id, $kode_wilayah);
    }
    
    public static function getUserByKey($public_key = null, $api_key = null, $password = null)
    {
        $password = bcrypt(nusp_password($password));

        if ($user = parent::where('username', $api_key)->where('password', $password)->first()) 
        {
            static::$api_type = 'private';
            return $user;
        }
                
        return false;
    }

    public function getWilayahPerRole($role_id)
    {
        $wilayah_user = array_flatten(UserWilayahRole::where('user_id', $this->id)->where('role_id', $role_id)->get(['kode_wilayah'])->toArray());

        if (!$wilayah_user) return [];
        // $wilayah_user = ['127404', '1274051003'];

        $wilayah = Wilayah::orderBy('induk')->orderBy('nama_wilayah');
        
        if (in_array('0', $wilayah_user))
        {
            $wilayah = $wilayah->get()->toArray();
        }
        else
        {
            foreach ($wilayah_user as $kode_wilayah) 
            {
                $wilayah->orWhere('kode', $kode_wilayah)->orWhere('induk', 'like', $kode_wilayah.'%')->orWhere('kode', substr($kode_wilayah, 0, 2))->orWhere('kode', substr($kode_wilayah, 0, 4))->orWhere('kode', substr($kode_wilayah, 0, 6));
            }

            $wilayah = $wilayah->get()->toArray();
        }

        foreach ($wilayah as $key => $value) 
        {
            $wilayah[$key]['role_id'] = $role_id;    
        }

        return $wilayah;
    }

    public function getWilayahAttribute()
    {
        // $wilayah_user = array_flatten(UserWilayahRole::where('user_id', $this->id)->get(['kode_wilayah'])->toArray());

        // // $wilayah_user = ['127404', '1274051003'];

        // $wilayah = Wilayah::orderBy('induk')->orderBy('nama_wilayah');
        
        // if (in_array('0', $wilayah_user))
        // {
        //     $wilayah = $wilayah->get()->toArray();
        // }
        // else
        // {
        //     foreach ($wilayah_user as $kode_wilayah) 
        //     {
        //         $wilayah->orWhere('kode', $kode_wilayah)->orWhere('induk', 'like', $kode_wilayah.'%')->orWhere('kode', substr($kode_wilayah, 0, 2))->orWhere('kode', substr($kode_wilayah, 0, 4))->orWhere('kode', substr($kode_wilayah, 0, 6));
        //     }

        //     $wilayah = $wilayah->get()->toArray();
        // }

        $wilayah = [];

        $roles = Role::all();

        foreach ($roles as $role) 
        {
            $wilayah = array_merge($wilayah, $this->getWilayahPerRole($role->id));    
        }

        $wilayahs = [];


        foreach ($wilayah as $w) 
        {
            if (substr($w['tingkat'], 0, 1) == '1') $wilayahs[$w['kode']] = $w;
            if (substr($w['tingkat'], 0, 1) == '2') $wilayahs[$w['induk']]['kabKotas'][$w['kode']] = $w;
            if (substr($w['tingkat'], 0, 1) == '3') $wilayahs[substr($w['induk'], 0, 2)]['kabKotas'][substr($w['induk'], 0, 4)]['kecs'][$w['kode']] = $w;
            if (substr($w['tingkat'], 0, 1) == '4') $wilayahs[substr($w['induk'], 0, 2)]['kabKotas'][substr($w['induk'], 0, 4)]['kecs'][substr($w['induk'], 0, 6)]['desaKels'][$w['kode']] = $w;
        }

        return $wilayahs;
    }

    public function getPropinsiAttribute()
    {
        $wilayah =  $this->wilayah;
        // return $wilayah;

        $propinsis = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            $newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode']];

            $propinsis[] = $newPropinsi;
        }

        return $propinsis;
    }

    public function getKabKotaAttribute()
    {
        $wilayah =  $this->wilayah;
        // return $wilayah;

        $kabKotas = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                $newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode']];
                
                $kabKotas[] = $newKabKota;
            }

        }

        return $kabKotas;
    }

    public function getDesaKelAttribute()
    {
        $wilayah =  $this->wilayah;
        // return $wilayah;

        $desaKels = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                if (!isset($kabKota['kecs'])) continue;
                foreach ($kabKota['kecs'] as $kode_k => $kec) 
                {
                    if (!isset($kec['desaKels'])) continue;
                    foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
                    {
                        $newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode']];
                        $desaKels[] = $newDesaKel;
                    }
                }
            }

        }

        return $desaKels;
    }
}
