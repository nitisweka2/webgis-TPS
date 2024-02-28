<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;
use App\Http\Controllers\TPSController;
use App\Http\Livewire\MapComponent;
use App\Http\Controllers\KeluhKesahController;



//use Illuminate


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
    return view('v_index');
});
Route::get('/tampilkan-peta', [TPSController::class, 'tampilkanPeta']);
// route::get('home', 'layout/v_home');
Route::view('/home', 'layout/v_home');
Route::view('/cari-lokasi', 'tes');
Route::view('/lihat-rute', 'layout/v_sampah');
route::view('user', 'layout/v_user');
route::view('sampah', 'layout/v_informasi_sampah');
// Update route untuk pencarian
Route::get('/tps/search', [TPSController::class, 'search'])->name('tps.search');
Route::get('/sampah/search', [TPSController::class, 'search2nd'])->name('v_info.search');
route::view('tips', 'layout/v_tips');
Route::get('sampah', [App\Http\Controllers\TPSController::class, 'index']);
Route::get('/get-locations', [TPSController::class, 'getLocations']);

//crud
// routes/web.php

// Menampilkan data TPS
Route::get('/informasi-sampah', [TPSController::class, 'index'])->name('layout/v_informasi_sampah');

// Menampilkan form create
Route::get('/informasi-sampah/create', [TPSController::class, 'create'])->name('tps.create');

// Menyimpan data dari form create
Route::post('/informasi-sampah/store', [TPSController::class, 'store'])->name('tps.store');

// Menampilkan data TPS berdasarkan ID
Route::get('/informasi-sampah/{no_tps}', [TPSController::class, 'show'])->name('tps.show');

// Menampilkan form edit
Route::get('/informasi-sampah/{no_tps}/edit', [TPSController::class, 'edit'])->name('tps.edit');

// Menyimpan perubahan dari form edit
Route::put('/informasi-sampah/{no_tps}', [TPSController::class, 'update'])->name('tps.update');

// Menghapus data TPS
Route::delete('/informasi-sampah/{no_tps}', [TPSController::class, 'destroy'])->name('tps.destroy');

Route::get('/tps', [TPSController::class, 'indexdua'])->name('tps.index');

//new update keluh kesah 

Route::get('/keluh_kesah', [KeluhKesahController::class, 'create'])->name('keluh_kesah.create');
Route::post('/keluh_kesah/store', [KeluhKesahController::class, 'store'])->name('keluh_kesah.store');
Route::get('/keluh_kesah/data', [KeluhKesahController::class, 'index'])->name('keluh_kesah.index');
Route::delete('/keluh_kesah/data/{no}', [KeluhKesahController::class, 'destroy'])->name('keluh_kesah.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/get-non-full-locations', [TPSController::class, 'getNonFullBesarLocations']);
