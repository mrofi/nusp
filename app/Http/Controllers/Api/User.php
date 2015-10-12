<?php

namespace App\Http\Controllers\Api;

use App\User as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class User extends ApiController
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
