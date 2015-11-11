<?php

namespace App\Http\Controllers\Api;

use App\DataKontrak as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class DataKontrak extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        return $this->showIndex('data_kontrak');
    }
}
