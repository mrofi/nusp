<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiKabKota;

class ApiTahapKegiatan extends ApiKabKota
{
    public function index(Request $request)
    {
        return $this->showIndex('report');
    }
}
