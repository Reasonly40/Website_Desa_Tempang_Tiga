<?php

use Illuminate\Support\Facades\Route;

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomepageController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\DashboardController;
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

Route::get('/visi-misi', function () {
    return view('profil-desa.visi-misi');
})->name('visi-misi');

Route::get('/sejarah', function () {
    return view('profil-desa.sejarah');
})->name('sejarah');

Route::get('/peta', function () {
    return view('profil-desa.peta');
})->name('peta');

Route::get('/struktur-organisasi', function () {
    return view('profil-desa.struktur-organisasi');
})->name('struktur-organisasi');

Route::get('/demografis', function () {
    return view('profil-desa.demografis');
})->name('demografis');

Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');

Route::get('/apbdes', function () {
    return view('apbdes');
})->name('apbdes');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/pengembang', function () {
    return view('pengembang');
})->name('pengembang');


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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute CRUD untuk setiap fitur
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('anggaran', AnggaranController::class);
    Route::resource('perencanaan', PerencanaanController::class);

});