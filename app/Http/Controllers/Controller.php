<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseType($template, $data = [], $status = 200)
    {
        if (Route::current()->getPrefix() == 'api') {
            return response()->json($data, $status);
        }

        if(!empty($data['error'])) unset( $data['error']);
        return view($template, compact('data'));
    }

    protected function updateFile(UploadedFile $requestFile, string $oldFile, string $path) : string
    {
        if(file_exists($oldFile)){
            Storage::delete($oldFile);
        }

        return url('/'.$requestFile->store($path));
    }
}
