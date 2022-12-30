<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');



Route::resource('posts',PostController::class);

Route::resource('categories',CategoryController::class);