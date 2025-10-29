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
use App\Http\Controllers\BeritaController;

// --- Controller Bawaan Breeze ---
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rute Halaman Publik (User)
|--------------------------------------------------------------------------
| Rute ini bisa diakses siapa saja.
*/
Route::get('/', [HomepageController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Rute Dasbor Bawaan Breeze (Opsional)
|--------------------------------------------------------------------------
| Rute ini akan diakses jika RouteServiceProvider.php HOME = '/dashboard'
| Kita sudah ubah HOME ke /admin/dashboard, jadi rute ini mungkin tidak terpakai
| tapi biarkan saja untuk sementara.
*/
Route::get('/dashboard', function () {
    // Redirect saja ke dasbor admin jika sudah login
    if (auth()->check()) {
        return redirect()->route('admin.dashboard');
    }
    // Jika belum login, middleware auth akan melempar ke login
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Rute Panel Admin
|--------------------------------------------------------------------------
| Semua rute di sini memerlukan login (middleware 'auth').
*/
Route::prefix('admin') // URL diawali /admin
    ->name('admin.') // Nama rute diawali admin.
    ->middleware(['auth']) // WAJIB LOGIN
    ->group(function () {

    // Dasbor Admin Kustom Anda
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD untuk Fitur-fitur Admin
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('anggaran', AnggaranController::class);
    Route::resource('perencanaan', PerencanaanController::class);
    Route::resource('berita', BeritaController::class);
    // Tambahkan resource untuk Aparatur Desa jika sudah dibuat
    // Route::resource('aparatur', AparaturDesaController::class);

});

/*
|--------------------------------------------------------------------------
| Rute Profil Bawaan Breeze
|--------------------------------------------------------------------------
| Rute untuk mengelola profil pengguna yang sedang login.
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Rute Autentikasi (Login, Register, Logout, dll.)
|--------------------------------------------------------------------------
| File ini berisi semua rute yang dibuat oleh Breeze.
*/
require __DIR__.'/auth.php';