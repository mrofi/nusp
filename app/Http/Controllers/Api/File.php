<?php

namespace App\Http\Controllers\Api;

use Storage;
use App\File as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class File extends ApiController
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function upload(Request $request)
    {
        $fileX = $request->file('fileInput');
        $caption = $request->get('caption');
        $caption .= ' by '.auth()->user()->username;
        $file = Model::create(['caption' => $caption]);
        $file->filename = $filename = str_slug($file->id.' '.$caption, '_').'.'.strtolower($fileX->getClientOriginalExtension());
        $file->save();

        Storage::put(
            'uploads/file/'.$filename,
            file_get_contents($fileX->getRealPath())
        );

        return ['message' => 'ok', 'created' => $file];
    }

    public function get(Request $request, $id)
    {
        $file = Model::find($id);

        $filename = 'uploads/file/'.$file->filename;

        $file_path = storage_path().'/app/'.$filename;

        if (file_exists($file_path))
        {
            // Send Download
            return response()->download($file_path, $file->filename, [
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
