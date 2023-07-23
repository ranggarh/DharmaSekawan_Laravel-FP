<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
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

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/poliklinik', function () {
    return view('poliklinik');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/form', function () {
    return view('formulir');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/dokter', function () {
    return view('dokter');
});
