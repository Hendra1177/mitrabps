
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\KegiatanMitra;
use App\Models\MitraBaru;

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

Route::get('/kegiatan', 'App\Http\Controllers\KegiatanController@indexUser');

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

Route::get('/admin/kegiatan/{id}/detail', 'App\Http\Controllers\KegiatanController@detailAdmin');

//CRUD Admin Mitra

Route::get('/admin/mitra/formmitra', 'App\Http\Controllers\MitraController@datalistMitraAdmin');
Route::get('/getdesa', 'App\Http\Controllers\MitraController@getDesa');
Route::get('/admin/mitra/formmitra/create', 'App\Http\Controllers\MitraController@datalistMitraAdmin')->name('mitracreate.datalistMitraAdmin');
Route::post('/admin/mitra/formmitra/created', 'App\Http\Controllers\MitraController@createMitraAdmin')->name('mitraAdmin.create');

Route::get('/admin/mitra', 'App\Http\Controllers\MitraController@index');

// Route::post('/admin/mitra/formmitra/create', 'App\Http\Controllers\MitraController@create');

// Route::get('/admin/mitra/formmitra', 'App\Http\Controllers\MitraController@toCreate');

Route::get('/admin/mitra/{id}/edit', 'App\Http\Controllers\MitraController@edit');

Route::put('/admin/mitra/{id}/update', 'App\Http\Controllers\MitraController@update');

Route::get('/admin/mitra/{id}/delete', 'App\Http\Controllers\MitraController@delete');

Route::get('/admin/mitra/{id}/detail', 'App\Http\Controllers\MitraController@detail');

Route::get('/admin/mitra/{id}/cetakpdfmitra', 'App\Http\Controllers\MitraController@cetakPdfMitra');


//CRUD Admin Perjanjian
Route::get('/admin/perjanjian', 'App\Http\Controllers\KegiatanMitraController@joinKegiatan');

Route::get('/admin/perjanjian/formperjanjian', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksanaAdmin');
Route::get('/admin/perjanjian/formperjanjian/create', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksanaAdmin')->name('kegiatanmitracreate.datalistPelaksanaAdmin');
Route::post('createKegiatanAdmin', 'App\Http\Controllers\KegiatanMitraController@createKegiatanAdmin')->name('pelaksanaAdmin.create');

Route::get('/admin/perjanjian/{id}/delete', 'App\Http\Controllers\KegiatanMitraController@delete');

Route::get('/admin/perjanjian/{id}/edit', 'App\Http\Controllers\KegiatanMitraController@edit');

Route::post('/admin/perjanjian/{id}/update', 'App\Http\Controllers\KegiatanMitraController@update');

//Admin SPK
Route::get('/admin/spk', 'App\Http\Controllers\SpkController@index');
Route::get('/admin/spk/formspk', 'App\Http\Controllers\SpkController@getCreate');
Route::post('/admin/spk/formspk/create', 'App\Http\Controllers\SpkController@create');
Route::get('/admin/spk/{id}/edit', 'App\Http\Controllers\SpkController@edit');
Route::post('/admin/spk/{id}/update', 'App\Http\Controllers\SpkController@update');
Route::get('/admin/spk/{id}/delete', 'App\Http\Controllers\SpkController@delete');
Route::get('/admin/spk/{id}/detail', 'App\Http\Controllers\SpkController@detailspk');
Route::get('/admin/spk/{id}/cetakspk', 'App\Http\Controllers\SpkController@cetakPdf');

//Form User Kegiatan 
Route::get('datalistPelaksana', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksana')->name('mitra.datalistPelaksana');
Route::get('/pelaksana', 'App\Http\Controllers\KegiatanMitraController@datalistPelaksana');
Route::post('createKegiatan', 'App\Http\Controllers\KegiatanMitraController@createKegiatan')->name('pelaksana.create');

Route::post('/kegiatan/formkegiatan/create', 'App\Http\Controllers\KegiatanController@createKegiatan');
Route::get('/kegiatan/formkegiatan', 'App\Http\Controllers\KegiatanController@toCreateUser');
Route::get('/kegiatan/{id}/edit', 'App\Http\Controllers\KegiatanController@editUser');
Route::post('/kegiatan/{id}/update', 'App\Http\Controllers\KegiatanController@updateUser');
Route::get('/kegiatan/{id}/detail', 'App\Http\Controllers\KegiatanController@detail');

// //Form User Mitra
Route::post('/tambahmitra/create', 'App\Http\Controllers\MitraController@createMitra');

// //Form User Kegiatan Mitra
// Route::post('/tambahkegiatanmitra/create', 'App\Http\Controllers\KegiatanMitraController@createKegiatanMitra');

Route::get('/perjanjiankerja', 'App\Http\Controllers\KegiatanMitraController@index')->name('userjoinKegiatan');

// route api
Route::get('/getDataDesa/{id}',[getDesa::class, 'post']);
Route::get('/getDataKegiatan/{id}', [getKegiatan::class, 'post']);

class getDesa extends Controller
{
    /**
     * Update the specified user.
     *
     * 
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function post( $id)
    {
        $desa = Desa::where('kecamatan_id', '=', $id)->get();

        // return \Illuminate\Routing\ResponseFactory::json( $desa);
        echo $desa;
    }
}

class getKegiatan extends Controller
{
    /**
     * Update the specified user.
     *
     * 
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        // $mitra = KegiatanMitra::where('mitrabaru_id', '=', 'mitrabaru.id')->get();

        $mitra = KegiatanMitra::where('kegiatan_id', '=', $id)->get('mitrabaru_id');
        // return \Illuminate\Routing\ResponseFactory::json( $mitra);
        echo $mitra;
    }
}



