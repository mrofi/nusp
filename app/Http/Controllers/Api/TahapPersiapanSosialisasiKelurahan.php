<?php

namespace App\Http\Controllers\Api;

use App\TahapPersiapanSosialisasiKelurahan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapPersiapanSosialisasiKelurahan extends ApiController
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
