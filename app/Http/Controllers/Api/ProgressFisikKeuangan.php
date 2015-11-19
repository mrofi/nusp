<?php

namespace App\Http\Controllers\Api;

use App\ProgressFisikKeuangan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class ProgressFisikKeuangan extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        return $this->showIndex('fisik_keuangan');
    }

    public function show(Request $request, $kode_wilayah)
    {        
        return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah)
        {
            $show =  $this->model->where('kode_wilayah', $kode_wilayah)->first();
            
            if (!$show || ($this->model->allowEdit != true && $this->model->allowVerify != true && $show->verified_at == null)) $show = array_merge((new $this->model(['kode_wilayah' => $kode_wilayah]))->toArray(), ['wilayah' => \App\Wilayah::get_wilayah($kode_wilayah), 'empty' => true]);
                  
            $show['detail'] = with(new LaporanProgressFisikKeuangan(new \App\LaporanProgressFisikKeuangan()))->showAll($request, $kode_wilayah);

            return $show;
        });
    }
}
