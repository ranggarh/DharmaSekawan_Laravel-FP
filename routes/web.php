<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\KontakController;




use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::resource('/data_dokter', DokterController::class);

//Route View
Route::resource('/beranda', BerandaController::class);

Route::get('/tentangkami', TentangController::class)->name('tentang');

Route::get('/poliklinik', PoliklinikController::class)->name('poliklinik');

Route::get('/dokterkami', DoktorController::class)->name('dokter');

Route::get('/kontak', KontakController::class)->name('kontak');

Route::resource('data_pasien', AdminController::class);


// Route::resource('/pendaftaran', BerandaController::class, 'create');




