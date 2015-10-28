<?php

namespace App\Http\Controllers\Api;

use App\TahapPerencanaanPembentukanKpp as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapPerencanaanPembentukanKpp extends ApiController
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
