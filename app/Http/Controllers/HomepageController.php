<?php

namespace App\Http\Controllers;

// 1. IMPORT SEMUA MODEL YANG DIPERLUKAN
use App\Models\Produk;
use App\Models\Kegiatan;
use App\Models\Anggaran;
use App\Models\Perencanaan;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Menampilkan halaman utama (welcome page)
     * dengan semua data yang diperlukan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 2. AMBIL DATA DARI DATABASE
        
        // Ambil 3 data produk terbaru
        $produkTerbaru = Produk::latest()->take(3)->get();
        
        // Ambil 3 data kegiatan terbaru
        $kegiatanTerbaru = Kegiatan::latest()->take(3)->get();

        // Ambil data anggaran (realisasi) terbaru
        $anggaranTerbaru = Anggaran::latest()->first();

        // Ambil data perencanaan (target) terbaru
        $perencanaanTerbaru = Perencanaan::latest()->first();

        // 3. KIRIM SEMUA DATA KE VIEW 'welcome'
        return view('welcome', [
            'produkTerbaru' => $produkTerbaru,
            'kegiatanTerbaru' => $kegiatanTerbaru,
            'anggaranTerbaru' => $anggaranTerbaru,
            'perencanaanTerbaru' => $perencanaanTerbaru,
        ]);
    }
}

