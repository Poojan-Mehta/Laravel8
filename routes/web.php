<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//Register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('',[LoginController::class,'index'])->name('login');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Post
Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'store']);