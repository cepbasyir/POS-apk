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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/produks', App\Http\Controllers\ProdukController::class);
Route::resource('/transaksis', App\Http\Controllers\TransaksiController::class);

Route::get('/api/produks', [App\Http\Controllers\ProdukController::class, 'api']);
Route::get('/api/transaksis', [App\Http\Controllers\TransaksiController::class, 'api']);