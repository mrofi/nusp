<?php

namespace App\Http\Controllers\Api;

use App\TahapKonstruksiTahap1 as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapKonstruksiTahap1 extends ApiController
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
