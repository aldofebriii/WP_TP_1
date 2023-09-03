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
Route::get('lokasi-kontak', function () {
    return view('lokasiKontak');
});

Route::get('kendaraan', function () {
    return view('kendaraan');
});

Route::get('/pengurus', function() {
    return view('pengurus');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/', function () {
    return view('home');
});
