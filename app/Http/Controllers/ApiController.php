<?php

namespace App\Http\Controllers;

use Gate;
use Closure;    
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    protected function userAuthorize($role_id, $kode_wilayah, Closure $next)
    {
        if (Gate::denies('api-authorization', [$role_id, $kode_wilayah])) return response(['error' => 'Unauthorized.'], 401);
        
        return $next();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $data = $this->model->all()->toArray();  
            
        // return nusp_arrayMapRecursive('nusp_round', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->merge(array_map('trim', $request->all()));
        
        $kode_wilayah = $request->get('kode_wilayah', null);

        $role = Role::where('role', 'admin')->first();
        
        return $this->userAuthorize($role->id, $kode_wilayah, function() use ($request, $kode_wilayah)
        {
            // validation
            $ada = $this->model->where('kode_wilayah', $kode_wilayah)->first();

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $kode_wilayah)
    {        
        return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah)
        {
            $show =  $this->model->where('kode_wilayah', $kode_wilayah)->first();
            
            if (!$show) return array_merge((new $this->model(['kode_wilayah' => $kode_wilayah]))->toArray(), ['wilayah' => \App\Wilayah::get_wilayah($kode_wilayah)]);
            
            $show->wilayah = $show->wilayah;
            
            return $show;
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->merge(array_map('trim', $request->all()));

        $kode_wilayah = $request->get('kode_wilayah', null);

        $role = Role::where('role', 'admin')->first();
     
        return $this->userAuthorize($role->id, $kode_wilayah, function() use ($request, $id)
        {
            // find record
            $update = $this->model->findOrFail($id);
            
            $new_data = array_merge($update->toArray(), $request->all());

            $request->merge($new_data);
            
            // validation
            $this->validate($request, $this->model->get_rules($id), $this->model->get_error_messages(), $this->model->get_attributes());
            
            // adding user
            $request->merge(['updated_by' => auth()->user()->id]);
            
            // update data
            $update->update($request->all());

            $update = nusp_arrayMapRecursive('nusp_round', $update->toArray());

            return ['message' => 'ok', 'updated' => $update];
        });
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        return $this->userAuthorize('destroy', function() use ($request, $id)
        {
            // find record
            $delete = $this->model->find($id);
            if (! $delete) return ['error' => 'no data'];
            
            $delete->delete();

            $delete = $delete->toArray();

            return ['message' => 'ok', 'deleted' => $delete];
        });
    }
}
