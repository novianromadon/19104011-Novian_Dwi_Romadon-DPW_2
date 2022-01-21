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

// Untuk menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Untuk menampilkan halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
});