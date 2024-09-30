<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request)
    {
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo 'There is no session!';
        }
    }

    public function storeSession(Request $request)
    {
        $request->session()->put('name', 'John');

    }

    public function deleteSession(Request $request)
    {
        if ($request->session()->has('name')) {
            $request->session()->forget('name');
            echo 'Session has been deleted!';
        } else {
            echo 'There is no session!';
        }
    }
}
