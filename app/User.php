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
}
