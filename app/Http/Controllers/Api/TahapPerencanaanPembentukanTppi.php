<?php

namespace App\Http\Controllers\Api;

use App\TahapPerencanaanPembentukanTppi as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapPerencanaanPembentukanTppi extends ApiController
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
