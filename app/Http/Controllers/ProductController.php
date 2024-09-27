<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = ['tv', 'phone', 'watch'];

        return view('welcome', compact('products'));
    }
}
