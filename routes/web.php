<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

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

Route::get('admin/dashboard',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin/dashboard');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

//crud
Route::get('/admin/kegiatan', 'App\Http\Controllers\KegiatanController@index');

Route::post('/admin/kegiatan/create', 'App\Http\Controllers\KegiatanController@create');

Route::get('/admin/kegiatan/{id}/edit', 'App\Http\Controllers\KegiatanController@edit');

Route::post('/admin/kegiatan/{id}/update', 'App\Http\Controllers\KegiatanController@update');

Route::get('/admin/kegiatan/{id}/delete', 'App\Http\Controllers\KegiatanController@delete');

//

Route::get('/admin/mitra', 'App\Http\Controllers\MitraController@index');

Route::post('/admin/mitra/create', 'App\Http\Controllers\MitraController@create');

Route::get('/admin/mitra/{id}/edit', 'App\Http\Controllers\MitraController@edit');

Route::post('/admin/mitra/{id}/update', 'App\Http\Controllers\MitraController@update');

Route::get('/admin/mitra/{id}/delete', 'App\Http\Controllers\MitraController@delete');

















// Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
// Route::prefix('admin')->group(function() {
//     Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
//     Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
//    }) ;
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.Home');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');    
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
