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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/test', [App\Http\Controllers\ControllerProduit::class, 'getProduit'])->name('test');
Route::get('/droit', [App\Http\Controllers\ControllerProduit::class, 'getUser'])->name('droit');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produit',[App\Http\Controllers\ControllerProduit::class, 'ajouter']);
Route::post('ajouterProduit',[App\Http\Controllers\ControllerProduit::class, 'ajouterProduit']);
Route::post('validerdoc/{id}',[App\Http\Controllers\ControllerProduit::class, 'validerDocument']);
