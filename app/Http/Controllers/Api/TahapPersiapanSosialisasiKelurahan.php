<?php

namespace App\Http\Controllers\Api;

use App\TahapPersiapanSosialisasiKelurahan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiTahapKegiatan;

class TahapPersiapanSosialisasiKelurahan extends ApiTahapKegiatan
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
