<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Services\PaymentGateway\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');

////////////////////////////////////

Route::get('/products/{id?}', function ($id = null) {
    return 'product id: ' . $id;
})->where('id', '[0-9]+');

//Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

////////////////////////////////////

///*
// * Spring의 @PathVariable (경로변수)
// */
//Route::get('/users/{name?}', function ($name = null) {
//    return view('users', compact('name'));
//});
//
///*
// * Spring의 @RequestParam (쿼리스트링)
// */
//Route::get('/users', function (Request $request) {
//    $name = $request->input('name', null);
//    $age = $request->input('age', null);
//
//    return view('users', compact('name', 'age'));
//});

////////////////////////////////////

Route::get('/grammar', function () {
    return view('grammar', ['variable' => '<b>variable</b>']);
});

////////////////////////////////////

//Route::get('/posts', [ClientController::class, 'getAllPost']) -> name('post.getall');
//
//Route::get('/posts/{id}', [ClientController::class, 'getPostById']) -> name('post.getbyid');
//
//Route::get('/add-post', [ClientController::class, 'addPost']) -> name('post.add');
//
//Route::get('/update-post', [ClientController::class, 'updatePost']) -> name('post.update');
//
//Route::get('/delete-post/{id}', [ClientController::class, 'deletePost']) -> name('post.delete');

////////////////////////////////////

Route::get('/string', [StringController::class, 'index'])->name('string.index');

Route::get('/array', [ArrayController::class, 'index'])->name('array.index');

////////////////////////////////////

Route::get('/user', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

////////////////////////////////////

Route::get('/session/get', [SessionController::class, 'getSession'])->name('session.get');

Route::get('/session/store', [SessionController::class, 'storeSession'])->name('session.store');

Route::get('/session/delete', [SessionController::class, 'deleteSession'])->name('session.delete');

////////////////////////////////////

Route::get('/posts', [PostController::class, 'getAllPosts'])->name('post.getallposts');

Route::get('/post-add', [PostController::class, 'addPost'])->name('post.add');

Route::post('/post-submit', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/posts/edit/{id}', [PostController::class, 'editPost'])->name('post.editbyid');

Route::post('/posts/edit/{id}', [PostController::class, 'editPostSubmit'])->name('post.edit');

Route::get('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('post.delete');

////////////////////////////////////

Route::get('/join', [PostController::class, 'innerJoinClause'])->name('post.innerjoin');

Route::get('/join/posts', [PostController::class, 'getAllPostsUsingMode'])->name('posts.join.getallposts');

////////////////////////////////////

Route::get('/pagination/posts', [PaginationController::class, 'getAllPosts'])->name('pagination.getallposts');

////////////////////////////////////

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

////////////////////////////////////

Route::get('/upload', [UploadController::class, 'uploadForm'])->name('upload.form');

Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.file');

////////////////////////////////////

Route::get('/local/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('localization');
});

////////////////////////////////////

Route::get('/payment', function () {
    return Payment::process();
});
