<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWilayahRole extends BaseModel
{
    protected $fillable = ['user_id', 'kode_wilayah', 'role_id'];
}
