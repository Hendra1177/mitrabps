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

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});


Route::get('/kegiatan', function () {
    return view('Kemitraan.kegiatan');
});

Route::get('/mitra', function () {
    return view('Kemitraan.mitra');
});