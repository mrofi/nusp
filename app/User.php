<?php

namespace App;

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

        return $this->hasRole($admin, $wilayah);
    }

    public function hasRole(Role $role, $wilayah = null)
    {
        $userRole = UserWilayahRole::where('user_id', $this->id)->where('role_id', $role->id);

        if ($wilayah == null) return $userRole->first() != null;

        return $userRole->where('kode_wilayah', $wilayah)->first() != null;
    }
    
    public static function getUserByKey($public_key = null, $api_key = null, $password = null)
    {
        if ($user = parent::where('api_key', $api_key)->where('password', $password)->first()) 
        {
            static::$api_type = 'private';
            return $user;
        }
        
        if ($user = parent::where('public_key', $public_key)->first())
        {
            static::$api_type = 'public';
            return $user;
        }
        
        return false;
    }

    public function getWilayahAttribute()
    {
        $wilayah_user = array_flatten(UserWilayahRole::where('user_id', $this->id)->get(['kode_wilayah'])->toArray());

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
}
