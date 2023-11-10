<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;

Route::prefix('mahasiswa')->group(function () {
    // Rute untuk halaman pendaftaran
    Route::get('/pendaftaran', function () {
        return 'Halaman Pendaftaran Mahasiswa';
    })->name('mahasiswa.pendaftaran');

    // Rute untuk halaman ujian
    Route::get('/ujian', function () {
        return 'Halaman Ujian Mahasiswa';
    })->name('mahasiswa.ujian');

    // Rute untuk halaman nilai
    Route::get('/nilai', function () {
        return 'Halaman Nilai Mahasiswa';
    })->name('mahasiswa.nilai');
});


