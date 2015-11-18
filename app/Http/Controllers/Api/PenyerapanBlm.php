<?php

namespace App\Http\Controllers\Api;

use App\PenyerapanBlm as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class PenyerapanBlm extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        // return $this->model->all();
        return $this->showIndex('penyerapan_blm');
    }
}
