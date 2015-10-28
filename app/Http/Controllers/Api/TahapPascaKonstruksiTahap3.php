<?php

namespace App\Http\Controllers\Api;

use App\TahapPascaKonstruksiTahap3 as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TahapPascaKonstruksiTahap3 extends ApiController
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
