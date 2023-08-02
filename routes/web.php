<?php

use App\Http\Controllers\DashboardAntrianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\FrontAntrianController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('beranda');
});

Route::resource('antrian', FrontAntrianController::class);
Route::get('livewire/antrian/cetakAntrian', [FrontAntrianController::class, 'cetakAntrian'])->name('cetakAntrian');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashboard/antrian/poliUmum', [DashboardAntrianController::class, 'indexPoliUmum']);
Route::get('dashboard/antrian/poliGigi', [DashboardAntrianController::class, 'indexPoliGigi']);
Route::get('dashboard/antrian/poliTht', [DashboardAntrianController::class, 'indexPoliTht']);

Route::get('dashboard/laporan/index', [DashboardLaporanController::class, 'index']);
Route::get('livewire/dashboard/laporan/cetakLaporan', [DashboardLaporanController::class, 'cetakLaporan'])->name('cetakLaporan');

//view
Route::resource('admin', AdminController::class);
// Route::post('/login', [LoginController::class, 'authenticate']);
Route::resource('/data_dokter', DokterController::class);

//Route View
Route::resource('/beranda', BerandaController::class);

Route::get('/tentangkami', TentangController::class)->name('tentang');

Route::get('/poliklinik', PoliklinikController::class)->name('poliklinik');

Route::get('/dokterkami', DoktorController::class)->name('dokter');

Route::get('/kontak', KontakController::class)->name('kontak');

Route::resource('data_pasien', AdminController::class);
