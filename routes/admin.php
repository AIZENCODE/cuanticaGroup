<?php

use App\Http\Controllers\Admin\PortafolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Admin\ApproachController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('can:admin.dashboard')->name('dashboard');



// Roles
Route::resource('roles',RoleController::class)->except('show');

// Datos
Route::resource('informacion',EnterpriseController::class)->only(['index', 'edit', 'update']);

// Usuarios
Route::resource('usuarios',UserController::class)->only(['index', 'edit', 'update']);

// Servicios
Route::resource('services',ServiceController::class)->except('show');

// Enfoque de Desarrollo
Route::resource('enfoques',ApproachController::class)->except('show');

// Portafolio
Route::resource('portafolios',PortafolioController::class)->except('show');

// Equipo
Route::resource('equipo',GroupController::class)->except('show');

// Equipo
Route::resource('clientes',ClientController::class)->except('show');

// Opiniones
Route::resource('opiniones',ScoreController::class)->except('show');

// Articulos
Route::resource('posts',PostController::class)->except('show');

// Categorias
Route::resource('categories',CategoryController::class)->except('show');

// Etiquetas
Route::resource('etiquetas',TagController::class)->except('show');