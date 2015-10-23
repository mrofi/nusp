<?php

namespace App\Http\Controllers\Api;

use App\ProfilDesaKelurahan as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class ProfilDesaKelurahan extends ApiController
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wilayah =  auth()->user()->wilayah;
        // return $wilayah;

        $propinsis = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;
            $kabKotas = [];
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                if (!isset($kabKota['kecs'])) continue;
                $desaKels = [];
                foreach ($kabKota['kecs'] as $kode_k => $kec) 
                {
                    if (!isset($kec['desaKels'])) continue;
                    foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
                    {
                        $newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode'], 'role_id' => $desaKel['role_id'], 'profil' =>  Model::where('kode_wilayah', $desaKel['kode'])->first()];
                        if ($newDesaKel['profil']) $newDesaKel['profil']['jumlah_penduduk'] = $newDesaKel['profil']['jumlah_penduduk_laki_laki'] + $newDesaKel['profil']['jumlah_penduduk_perempuan'];
                        $desaKels[] = $newDesaKel;
                    }
                }

                $newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'role_id' => $kabKota['role_id'], 'desaKels' => $desaKels];
                
                $kabKotas[] = $newKabKota;
            }

            $newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'role_id' => $propinsi['role_id'], 'kabKotas' => $kabKotas];

            $propinsis[] = $newPropinsi;
        }

        return $propinsis;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(array_map('trim', $request->all()));

            $kode_wilayah = $request->get('kode_wilayah', '');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $profil =  Model::where('kode_wilayah', $id)->first();
        if (!$profil) return array_merge((new Model(['kode_wilayah' => $id]))->toArray(), ['wilayah' => \App\Wilayah::get_desa_kel($id)]);
        $profil->wilayah = $profil->wilayah;
        return $profil;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
    }
}
