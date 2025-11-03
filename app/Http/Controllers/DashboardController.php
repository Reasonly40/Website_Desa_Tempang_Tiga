<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\Anggaran;
use App\Models\Perencanaan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKegiatan = Kegiatan::count();
        $jumlahProduk = Produk::count();
        $jumlahAnggaran = Anggaran::count();
        $jumlahPerencanaan = Perencanaan::count();

        return view('admin.dashboard', [
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahProduk' => $jumlahProduk,
            'jumlahAnggaran' => $jumlahAnggaran,
            'jumlahPerencanaan' => $jumlahPerencanaan,
        ]);
    }
}