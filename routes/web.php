<?php

use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DataController;
use App\Http\Controllers\Client\PortafolioController;
use App\Http\Controllers\Client\ServiceController;
use Illuminate\Support\Facades\Route;



// Home
Route::get('/',[HomeController::class,'index'])->name('home.index');


// Nosotros
Route::get('nosotros',[DataController::class,'index'])->name('nosotros.index');


// Servicios
Route::get('servicios',[ServiceController::class,'index'])->name('services.index');

// Portafolio
Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolios.index');

// Blogs

Route::get('blog',  [PostController::class,'index'])->name('blog.index');
Route::get('blog/{post}',  [PostController::class,'show'])->name('blog.show');



// Contacto

Route::get('contacts',  [ContactController::class,'index'])->name('contacts.index');
Route::post('contacts',  [ContactController::class,'store'])->name('contacts.store');


// Iniciar Sesion
Route::get('sesion', [LoginController::class,'show'])->name('sesion.show');

Route::post('sesion', [LoginController::class,'login']);


// Crear Usuario
Route::get('register', [RegisterController::class,'show'])->name('register.show');
Route::post('register', [RegisterController::class,'register'])->name('register.create');

// Logout
Route::get('logout', [LogoutController::class,'logout'])->name('logaout');;
