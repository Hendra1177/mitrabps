
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

Route::get('/pelaksana', function () {
    return view('Kemitraan.mitra');
});

Route::get('/tambahmitra', function () {
    return view('Kemitraan.tambahmitra');
});

Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin/dashboard');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

//CRUD Admin Kegiatan
Route::get('/admin/kegiatan', 'App\Http\Controllers\KegiatanController@index');

Route::post('/admin/kegiatan/formkegiatan/create', 'App\Http\Controllers\KegiatanController@create');

Route::get('/admin/kegiatan/formkegiatan', 'App\Http\Controllers\KegiatanController@toCreate');

Route::get('/admin/kegiatan/{id}/edit', 'App\Http\Controllers\KegiatanController@edit');

Route::post('/admin/kegiatan/{id}/update', 'App\Http\Controllers\KegiatanController@update');

Route::get('/admin/kegiatan/{id}/delete', 'App\Http\Controllers\KegiatanController@delete');

//CRUD Admin Mitra

Route::get('/admin/mitra', 'App\Http\Controllers\MitraController@index');

Route::post('/admin/mitra/formmitra/create', 'App\Http\Controllers\MitraController@create');

Route::get('/admin/mitra/formmitra', 'App\Http\Controllers\MitraController@toCreate');

Route::get('/admin/mitra/{id}/edit', 'App\Http\Controllers\MitraController@edit');

Route::post('/admin/mitra/{id}/update', 'App\Http\Controllers\MitraController@update');

Route::get('/admin/mitra/{id}/delete', 'App\Http\Controllers\MitraController@delete');

Route::get('/admin/mitra/{id}/detail', 'App\Http\Controllers\MitraController@detail');

//CRUD Admin Perjanjian
Route::get('/admin/perjanjian', 'App\Http\Controllers\KegiatanMitraController@joinKegiatan');

//Form User Kegiatan 
Route::post('/tambahkegiatan/create', 'App\Http\Controllers\KegiatanController@createKegiatan');

Route::get('datalistPelaksana', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksana')->name('mitra.datalistPelaksana');
Route::get('/pelaksana', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksana');

Route::post('createKegiatan', 'App\Http\Controllers\KegiatanMitraController@createKegiatan')->name('pelaksana.create');


// Route::get('/search', 'App\Http\Controllers\KegiatanController@index')->name('search');
// Route::get('/tambahkegiatan/search', 'App\Http\Controllers\KegiatanController@autocomplete')->name('autocomplete');

// //Form User Mitra
Route::post('/tambahmitra/create', 'App\Http\Controllers\MitraController@createMitra');

// //Form User Kegiatan Mitra
// Route::post('/tambahkegiatanmitra/create', 'App\Http\Controllers\KegiatanMitraController@createKegiatanMitra');

Route::get('/perjanjiankerja', 'App\Http\Controllers\KegiatanMitraController@index')->name('userjoinKegiatan');















// Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
// Route::prefix('admin')->group(function() {
//     Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
//     Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
//    }) ;
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('admin', [HomeController::class, 'adminHome'])->name('admin.Home');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('', [HomeController::class, 'index'])->name('home');    
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');