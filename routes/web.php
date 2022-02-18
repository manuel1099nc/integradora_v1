<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CitasController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos',ProductoController::class);//AQUI SE MANDA A LLAMAR AL CONTROLADOR RECIEN CREADO
    Route::resource('/citas',CitasController::class);//AQUI SE MANDA A LLAMAR AL CONTROLADOR RECIEN CREADO
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
});

