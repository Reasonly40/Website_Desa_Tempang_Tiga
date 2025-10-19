<?php

use Illuminate\Support\Facades\Route;

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomepageController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\PerencanaanController;


/*
|--------------------------------------------------------------------------
| Rute untuk Halaman Publik
|--------------------------------------------------------------------------
|
| Rute ini bisa diakses oleh siapa saja.
|
*/
Route::get('/', [HomepageController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Rute untuk Halaman Admin
|--------------------------------------------------------------------------
|
| Semua rute di dalam grup ini akan memiliki:
| 1. URL yang diawali dengan /admin (contoh: /admin/kegiatan/create)
| 2. Nama rute yang diawali dengan admin. (contoh: admin.kegiatan.create)
|
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // Rute untuk dashboard admin
    Route::get('/dashboard', function () {
        // Nantinya kita bisa buat Controller khusus untuk Dashboard
        return '<h1>Selamat Datang di Dasbor Admin</h1>';
    })->name('dashboard');

    // Rute CRUD untuk setiap fitur
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('anggaran', AnggaranController::class);
    Route::resource('perencanaan', PerencanaanController::class);

});