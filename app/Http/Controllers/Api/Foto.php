<?php

namespace App\Http\Controllers\Api;

use DB;
use Storage;
use App\Foto as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class Foto extends ApiController
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function upload(Request $request)
    {
        DB::beginTransaction();
            $fileX = $request->file('fileInput');
            $caption = $request->get('caption');
            $caption .= ' by '.auth()->user()->username;
            $foto = Model::create(['caption' => $caption]);
            $foto->filename = $filename = str_slug($foto->id.' '.$caption, '_').'.'.strtolower($fileX->getClientOriginalExtension());
            $foto->save();

            if (!file_exists($fileX->getRealPath())) 
            {
                DB::rollback();
                return ['error' => 'Upload Gagal'];
            } 

            Storage::put(
                'uploads/foto/'.$filename,
                file_get_contents($fileX->getRealPath())
            );
        DB::commit();

        return ['message' => 'ok', 'created' => $foto];
    }

    public function get(Request $request, $id)
    {
        $foto = Model::find($id);

        $filename = 'uploads/foto/'.$foto->filename;

        $file_path = storage_path().'/app/'.$filename;

        if (file_exists($file_path))
        {
            // Send Download
            return response()->download($file_path, $foto->filename, [
                'Content-Length: '. filesize($file_path),
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
    
}
