<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        echo 'method(): ' . $request->getMethod() . '<br><br>';
        echo 'rul(): ' . $request->url() . '<br><br>';
        echo 'fullUrl(): ' . $request->fullUrl() . '<br><br>';
        echo 'path(): ' . $request->path() . '<br><br>';
    }
}
