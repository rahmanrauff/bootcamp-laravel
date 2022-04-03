<?php

use App\Http\Controllers\keluhanController;
use App\Http\Controllers\PelangganController;
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
Route::get('/greeting', function () {
    return "Selamat Datang";
});

route::get('/keluhan',[keluhanController::class, 'index']);

route::get('/keluhan/{id}',[keluhanController::class, 'detail']);

route::post('/keluhan',[keluhanController::class, 'aksi']);




Route::get('/formulir', function () {
    return view('formulir');
});
Route::post('/formulir', function () {
    return "Data Berhasil disimpan";
});
Route::resource('/pelanggan', PelangganController::class);