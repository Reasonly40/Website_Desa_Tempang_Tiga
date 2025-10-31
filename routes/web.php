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
*/
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Rute Grup Panel Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    // PERBAIKAN SEMENTARA (Cara 2):
    // Mengembalikan ke 'auth' untuk debugging eror cache.
    // Ini akan mengizinkan SEMUA user yang login mengakses admin,
    // tapi akan menghilangkan eror "Target class [admin] does not exist."
    ->middleware(['auth']) 
    ->group(function () {

        // Rute Dasbor Admin Kustom
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Rute untuk upload gambar dari TinyMCE
        Route::post('/berita/upload-image', [BeritaController::class, 'uploadImage'])
             ->name('berita.upload_image');

        // Rute CRUD (Create, Read, Update, Delete) menggunakan Resource Controller
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
