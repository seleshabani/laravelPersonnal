<?php

namespace App\Http\Controllers;

use Orchid\Attachment\File;
use Illuminate\Http\Request;

class AdminPostUploadController extends Controller
{
    use File;

    public function upload(Request $request)
    {
        // $file = new File($request->file('photo'));
        // $attachment = $file->load();
    
        // return response()->json();
    }
}
