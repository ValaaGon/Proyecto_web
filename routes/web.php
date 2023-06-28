<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdmiController;
use App\Http\Controllers\ArtiController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/register',[RegisterController::class,'show'] );
Route::post('/register',[RegisterController::class,'register'] );

Route::get('/login',[LoginController::class,'show'] );
Route::post('/login',[LoginController::class,'login'] );

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/perfiles', [AdmiController::class, 'indexPerfiles']);
Route::get('/cuentas', [AdmiController::class, 'showCuentas'])->name('cuentas.mostrar');
Route::delete('/cuentas/{cuenta}',[AdmiController::class,'destroy'])->name('cuentas.destroy');


Route::get('/subfot',[ArtiController::class,'show']);
Route::post('/subir-imagen', [ArtiController::class, 'subirImagen'])->name('subir-imagen');
Route::get('/galeria',[ArtiController::class,'verFotos']);
Route::get('/gestionp',[ArtiController::class,'GestionP']);
Route::delete('/gestionp/{imagen}', [ArtiController::class, 'borrarFoto'])->name('fotos.destroy');



