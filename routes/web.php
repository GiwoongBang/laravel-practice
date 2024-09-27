<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StringController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');

////////////////////////////////////

Route::get('/products/{id?}', function ($id = null) {
    return 'product id: ' . $id;
})->where('id', '[0-9]+');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

////////////////////////////////////

/*
 * Spring의 @PathVariable (경로변수)
 */
Route::get('/users/{name?}', function ($name = null) {
    return view('users', compact('name'));
});

/*
 * Spring의 @RequestParam (쿼리스트링)
 */
Route::get('/users', function (Request $request) {
    $name = $request->input('name', null);
    $age = $request->input('age', null);

    return view('users', compact('name', 'age'));
});

////////////////////////////////////

Route::get('/grammar', function () {
    return view('grammar', ['variable' => '<b>variable</b>']);
});

////////////////////////////////////

Route::get('/posts', [ClientController::class, 'getAllPost']) -> name('post.getall');

Route::get('/posts/{id}', [ClientController::class, 'getPostById']) -> name('post.getbyid');

Route::get('/add-post', [ClientController::class, 'addPost']) -> name('post.add');

Route::get('/update-post', [ClientController::class, 'updatePost']) -> name('post.update');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost']) -> name('post.delete');

////////////////////////////////////

Route::get('/string', [StringController::class, 'index']) -> name('string.index');

Route::get('/array', [ArrayController::class, 'index']) -> name('array.index');
