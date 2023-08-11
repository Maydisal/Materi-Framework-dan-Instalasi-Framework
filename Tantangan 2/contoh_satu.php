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


Route::get('/contoh-satu', function () {
    return 'Ini adalah contoh rute satu.';
});

Route::get('/contoh-dua', function () {
    return 'Ini adalah contoh rute dua.';
});

Route::get('/contoh-tiga', function () {
    return 'Ini adalah contoh rute tiga.';
});