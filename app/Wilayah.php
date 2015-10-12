<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends BaseModel
{
    protected $fillable = ['kode', 'nama_wilayah', 'tingkat', 'induk'];
}
