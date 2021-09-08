<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionCrontroller;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product',[ProductController::class,'index'])->name('product.index')->middleware('checkuser');
Route::get('home/{name?}',[HomeController::class,'index'])->name('home.index');
Route::get('users',[UserController::class,'index'])->name('user.index')->middleware('checkuser');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addPost');
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatePost');
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.deletePost');

Route::get('/session/get',[SessionCrontroller::class,'getSessionDate'])->name('session.get');
Route::get('/session/set',[SessionCrontroller::class,'storeSessionData'])->name('session.store');
Route::get('/session/remove',[SessionCrontroller::class,'deleteSessionData'])->name('session.delete');

Route::resource('produits', ProduitController::class);

Route::get('/upload',[UploadController::class,'uploadForm']);
Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');

Route::get('/{locale}', function ($locale) {
    App::setlocale($locale);
    return view('welcomeNew');

});
