<?php

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



Auth::routes();
Route::get('/',function(){return view('auth.login');});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('inventarios', App\Http\Controllers\InventarioController::class);
Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('modelos', App\Http\Controllers\ModeloController::class);
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class);
Route::resource('tipo-equipos', App\Http\Controllers\TipoEquipoController::class);



Route::resource('registro-series', App\Http\Controllers\RegistroSeriesController::class);
Route::resource('guias', App\Http\Controllers\GuiaController::class);
Route::resource('ordenes', App\Http\Controllers\OrdeneController::class);
