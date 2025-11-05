<?php

use Illuminate\Support\Facades\Route;

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomepageController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\AparaturDesaController;
use App\Http\Controllers\DataDemografiController;
use App\Http\Controllers\KontakAdminController;

// --- Controller Bawaan Breeze ---
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rute Halaman Publik (User)
|--------------------------------------------------------------------------
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

// Halaman dinamis
Route::get('/struktur-organisasi', [HomepageController::class, 'struktur'])->name('struktur-organisasi');
Route::get('/demografis', [HomepageController::class, 'demografis'])->name('demografis');

Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');

Route::get('/apbdes', [App\Http\Controllers\HomepageController::class, 'apbdes'])->name('apbdes');

Route::get('/produk', [HomepageController::class, 'produk'])->name('produk');

Route::get('/kegiatan', [HomepageController::class, 'kegiatan'])->name('kegiatan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/pengembang', function () {
    return view('pengembang');
})->name('pengembang');


/*
|--------------------------------------------------------------------------
| Rute Grup Panel Admin
|--------------------------------------------------------------------------
|
| PERUBAHAN:
| 1. Menambahkan middleware 'admin' untuk keamanan.
| 2. Menyesuaikan nama resource (misal: 'aparatur-desa' menjadi 'aparatur').
| 3. Mengganti Route::resource untuk Demografi & Kontak menjadi route kustom.
|
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin']) // Menambahkan 'admin' (dari CheckIsAdmin.php)
    ->group(function () {

        // Rute Dasbor Admin Kustom
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Rute CRUD (Create, Read, Update, Delete) menggunakan Resource Controller
        // Nama-nama ini disesuaikan agar cocok dengan admin.blade.php
        Route::resource('kegiatan', KegiatanController::class)->except(['show'])->names('kegiatan');
        Route::resource('produk', ProdukController::class)->except(['show'])->names('produk');
        Route::resource('anggaran', AnggaranController::class)->except(['show'])->names('anggaran');
        
        // CRUD Struktur Organisasi (Aparatur Desa)
        Route::resource('aparatur', \App\Http\Controllers\AparaturDesaController::class)
            ->except(['create', 'store', 'destroy', 'show']);

        // Edit Demografis
        Route::get('demografi', [DataDemografiController::class, 'edit'])->name('demografi.edit');
        Route::put('demografi', [DataDemografiController::class, 'update'])->name('demografi.update');

        // Edit Kontak
        Route::get('kontak', [KontakAdminController::class, 'edit'])->name('kontak.edit');
        Route::put('kontak', [KontakAdminController::class, 'update'])->name('kontak.update');

});

/*
|--------------------------------------------------------------------------
| Rute Profil Pengguna (Bawaan Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Rute Autentikasi (Otomatis dari Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';