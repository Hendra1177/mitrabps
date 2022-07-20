<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/tambahkegiatan', function () {
    return view('Kemitraan.tambahkegiatan');
});

Route::get('/mitra', function () {
    return view('Kemitraan.mitra');
});

Route::get('/tambahmitra', function () {
    return view('Kemitraan.tambahmitra');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/home', [HomeController::class, 'admin.Home'])->name('admin.home');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');    
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
