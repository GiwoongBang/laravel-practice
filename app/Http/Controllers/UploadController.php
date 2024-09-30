<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $result = $request->file->store();
        $result = "<img src='storage/" . $result . "' width='500'>";
        return "File successfully uploaded! <br><br> $result";
    }
}
