<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function file(Request $request){

        return view('upload');
    }

    public function registerFile(Request $request){


    }
}
