<?php

namespace App\Http\Controllers\Api;

use App\LaporanProgressFisikKeuangan as Model;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiDesaKel;

class LaporanProgressFisikKeuangan extends ApiDesaKel
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        return $this->showIndex('fisik_keuangan');
    }

    public function show(Request $request, $id)
    {        
        $show =  $this->model->find($id);

        if (!$show || ($this->model->allowEdit != true && $this->model->allowVerify != true && $show->verified_at == null)) 
    	{
    		return array_merge((new $this->model(['kode_wilayah' => $id]))->toArray(), ['wilayah' => \App\Wilayah::get_wilayah($id), 'empty' => true]);
    	}

        $kode_wilayah = $show->kode_wilayah;
            
        return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $show)
        {
            if (!$show || ($this->model->allowEdit != true && $this->model->allowVerify != true && $show->verified_at == null)) return array_merge((new $this->model(['kode_wilayah' => $kode_wilayah]))->toArray(), ['wilayah' => \App\Wilayah::get_wilayah($kode_wilayah), 'empty' => true]);
                        
            return array_merge($show->toArray(), ['wilayah' => \App\Wilayah::get_wilayah($kode_wilayah)]);
        });
    }

    public function showAll(Request $request, $kode_wilayah)
    {        
        return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah)
        {
            $show =  [];

            foreach ($this->model->where('kode_wilayah', $kode_wilayah)->orderBy('periode', 'desc')->get()->toArray() as $row) 
            {
            	if ($this->model->allowEdit != true && $this->model->allowVerify != true && $show->verified_at == null) continue;

            	$show[] = $row;
            }
                        
            return $show;
        });
    }

    public function store(Request $request)
    {
        $request->merge(array_map('trim', $request->all()));
        
        $kode_wilayah = $request->get('kode_wilayah', null);

        $id = $request->get('id', null);

        $ada = ($id === null) ? false : $this->model->find($id);
        
        if ($ada && $request->has('verify')) return $this->verify($request, $ada->id);

        $role = Role::where('role', 'admin')->first();
        
        return $this->userAuthorize($role->id, $kode_wilayah, function() use ($request, $ada)
        {
            // validation
            
            if ($ada && $request->has('delete_entry')) return $this->destroy($request, $ada->id);
            
            if ($ada) return $this->update($request, $ada->id);

            // validation
            $this->validate($request, $this->model->get_rules(), $this->model->get_error_messages(), $this->model->get_attributes());
            
            // adding user
            $request->merge(['created_by' => auth()->user()->id, 'updated_by' => auth()->user()->id]);
            // insert data
            $create = $this->model->create($request->all());

            if ($create['error']) return $create;

            $create = nusp_arrayMapRecursive('nusp_round', $create->toArray());

            return ['message' => 'ok', 'created' => $create];
        });
    }
}
