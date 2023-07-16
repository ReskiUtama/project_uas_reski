<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('barangreski','App\Http\Controllers\BarangReskiController@index');
Route::get('bagianreski','App\Http\Controllers\BagianReskiController@index');
Route::get('petugasreski','App\Http\Controllers\PetugasReskiController@index');
Route::get('pengeluaranreski','App\Http\Controllers\PengeluaranReskiController@index');
Route::get('pengeluaranitemreski','App\Http\Controllers\PengeluaranitemReskiController@index');
Route::get('kategorireski','App\Http\Controllers\KategoriReskiController@index');
