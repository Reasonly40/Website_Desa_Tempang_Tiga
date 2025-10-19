<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\Anggaran; 
use App\Models\Perencanaan;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // Mengambil 3 data kegiatan terbaru
        $kegiatan = Kegiatan::latest()->take(3)->get();
        
        // Mengambil 3 data produk terbaru
        $produk = Produk::latest()->take(3)->get();

        // Mengambil 1 dokumen anggaran terbaru
        $anggaranTerbaru = Anggaran::latest()->first();

        // Mengambil 1 dokumen perencanaan terbaru
        $perencanaanTerbaru = Perencanaan::latest()->first();

        // Mengirim semua data ke view 'welcome'
        return view('welcome', [
            'kegiatan' => $kegiatan,
            'produk' => $produk,
            'anggaranTerbaru' => $anggaranTerbaru,
            'perencanaanTerbaru' => $perencanaanTerbaru,
        ]);
    }
}