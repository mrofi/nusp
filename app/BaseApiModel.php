<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseApiModel extends BaseModel
{
    protected $appends = ['wilayah', 'allowVerify', 'allowEdit'];

    public function getWilayahAttribute()
    {
        return [];
    }

    public function getAllowVerifyAttribute()
    {
        return auth()->user()->hasRole(3, $this->kode_wilayah) ? true : [];
    }

    public function getAllowEditAttribute()
    {
        return auth()->user()->hasRole(1, $this->kode_wilayah) ? true : [];
    }

}
