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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/form', function () {
    return view('formulir');
=======
Route::get('/home', function () {
    return view('home');
>>>>>>> 80003140a4a0ba43b8a56f6fe7fef988f67a41f0
});
