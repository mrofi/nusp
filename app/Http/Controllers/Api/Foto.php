<?php

namespace App\Http\Controllers\Api;

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
        $fileX = $request->file('fileInput');
        $caption = 'Sosialisasi Kab Kota by '.auth()->user()->id;
        $foto = Model::create(['caption' => $caption]);
        $foto->filename = $filename = str_slug($foto->id.' '.$caption, '_').'.'.strtolower($fileX->getClientOriginalExtension());
        $foto->save();

        Storage::put(
            'uploads/foto/'.$filename,
            file_get_contents($fileX->getRealPath())
        );

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
