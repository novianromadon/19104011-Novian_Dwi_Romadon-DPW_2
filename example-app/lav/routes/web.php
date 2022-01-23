<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Menuju ke controller MyController pada fungsi index
Route::get('/', [MyController::class, 'index']);



// Menyambungkan dari navbar Beranda ke beranda.blade.php
Route::get('/', [MyController::class, 'index'])->name('index');

// Menyambungkan dari navbar About ke about.blade.php
Route::get('/tentang', [MyController::class, 'about'])->name('about');

// Menyambungkan dari navbar Mahasiswa ke mahasiswa.blade.php
//Route::get('/mahasiswa1', [MyController::class, 'index'])->name('mahasiswa');



Route::get('/mahasiswa', [StudentController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [StudentController::class, 'create']);
Route::post('/mahasiswa/create', [StudentController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [StudentController::class, 'edit']);
Route::put('/mahasiswa/{id}/edit', [StudentController::class, 'update']);
Route::delete('/mahasiswa/hapus/{id}', [StudentController::class, 'destroy']);
