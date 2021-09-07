<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/',[ProductController::class,'index'])->name('product.index')->middleware('checkuser');
Route::get('home/{name?}',[HomeController::class,'index'])->name('home.index');
Route::get('users',[UserController::class,'index'])->name('user.index')->middleware('checkuser');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addPost');
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatePost');
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.deletePost');
