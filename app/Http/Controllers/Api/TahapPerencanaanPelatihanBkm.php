<?php

namespace App\Http\Controllers\Api;

use App\TahapPerencanaanPelatihanBkm as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapPerencanaanPelatihanBkm extends ApiController
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
