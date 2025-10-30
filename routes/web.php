<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Ditambahkan untuk check()

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomepageController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\PerencanaanController;
use App\Http\Controllers\BeritaController; 

// --- Controller Bawaan Breeze ---
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rute Halaman Publik (User)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomepageController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Rute Dasbor Bawaan Breeze
|--------------------------------------------------------------------------
| Rute ini dilindungi oleh middleware 'auth'. 
| Jika pengguna sudah login, mereka akan diarahkan ke 'admin.dashboard'.
| Jika belum, mereka akan diarahkan ke halaman login.
| Ini adalah penyederhanaan dari logika 'if (Auth::check())' sebelumnya,
| karena middleware 'auth' sudah menangani pemeriksaan tersebut.
*/
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Rute Grup Panel Admin
|--------------------------------------------------------------------------
| Semua rute di dalam grup ini:
| 1. Memiliki awalan URL '/admin' (contoh: /admin/kegiatan)
| 2. Memiliki awalan nama rute 'admin.' (contoh: admin.kegiatan.index)
| 3. Memerlukan pengguna untuk login (middleware 'auth').
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth']) // Hanya user terautentikasi yang bisa akses
    ->group(function () {

        // Rute Dasbor Admin Kustom
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Rute CRUD (Create, Read, Update, Delete) menggunakan Resource Controller
        // Penggunaan Route::resource ini sudah benar dan otomatis
        // cocok dengan parameter {berita} di BeritaController Anda.
        Route::resource('kegiatan', KegiatanController::class);
        Route::resource('produk', ProdukController::class);
        Route::resource('anggaran', AnggaranController::class);
        Route::resource('perencanaan', PerencanaanController::class);
        Route::resource('berita', BeritaController::class); // Rute untuk Berita

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
