<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\Anggaran;
use App\Models\Perencanaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman Dashboard admin dengan data statistik.
     */
    public function index()
    {
        // Ambil data statistik (jumlah total) dari setiap model
        $jumlahKegiatan = Kegiatan::count();
        $jumlahProduk = Produk::count();
        $jumlahAnggaran = Anggaran::count();
        $jumlahPerencanaan = Perencanaan::count();

        // Kirim semua data ke view 'admin.dashboard'
        return view('admin.dashboard', [
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahProduk' => $jumlahProduk,
            'jumlahAnggaran' => $jumlahAnggaran,
            'jumlahPerencanaan' => $jumlahPerencanaan,
        ]);
    }
}