<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\Anggaran;
use App\Models\AparaturDesa;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKegiatan = Kegiatan::count();
        $jumlahProduk = Produk::count();
        $jumlahAnggaran = Anggaran::count();
        $jumlahAparatur = AparaturDesa::count();

        return view('admin.dashboard', [
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahProduk' => $jumlahProduk,
            'jumlahAnggaran' => $jumlahAnggaran,
            'jumlahAparatur'
        ]);
    }
}