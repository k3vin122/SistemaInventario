<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::resource('inventarios', App\Http\Controllers\InventarioController::class)->middleware('auth');
Route::resource('marcas', App\Http\Controllers\MarcaController::class)->middleware('auth');
Route::resource('modelos', App\Http\Controllers\ModeloController::class)->middleware('auth');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('tipo-equipos', App\Http\Controllers\TipoEquipoController::class)->middleware('auth');



Route::resource('registro-series', App\Http\Controllers\RegistroSeriesController::class)->middleware('auth');
Route::resource('guias', App\Http\Controllers\GuiaController::class)->middleware('auth');
Route::resource('ordenes', App\Http\Controllers\OrdeneController::class)->middleware('auth');
