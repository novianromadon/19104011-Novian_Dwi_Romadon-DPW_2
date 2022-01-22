<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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




// Menyambungkan dari navbar Beranda ke beranda.blade.php
Route::get('/', [MyController::class, 'index'])->name('index');

// Menyambungkan dari navbar About ke about.blade.php
Route::get('/tentang', [MyController::class, 'about'])->name('about');

// Menyambungkan dari navbar Mahasiswa ke mahasiswa.blade.php
Route::get('/mahasiswa', [MyController::class, 'mahasiswa'])->name('mahasiswa');







// Harus melewati Controller dulu

// Ketika kita mengakses url /beranda dengan method GET
// maka kita akan diarahkan ke controller dengan
// nama classnya adalah myController da
// methodnya adalah index
// Penulisan di laravel 7
// Route::get('/beranda', 'myController@index');

// Penulisan di laravel 8
Route::get('/beranda', [myController::class, 'index']);

// Langsung ke viewnya
Route::view('/beranda', 'beranda');
