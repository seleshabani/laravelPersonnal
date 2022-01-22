<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function display($filename)
    {
        
        $path = storage_path('app/images/' . $filename);
        // dd($path);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = (new Response($file, 200));
        $response->header("Content-Type", $type);
        return $response;

    }
}
