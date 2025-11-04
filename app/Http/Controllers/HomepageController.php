<?php

namespace App\Http\Controllers;

// 1. IMPORT SEMUA MODEL YANG DIPERLUKAN
use App\Models\Produk;
use App\Models\Kegiatan;
use App\Models\Anggaran;
use App\Models\AparaturDesa;
use App\Models\DataDemografi;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    private function hitungPersen($realisasi, $anggaran)
    {
        if ($anggaran > 0) {
            return ($realisasi / $anggaran) * 100;
        }
        return 0; // Hindari pembagian dengan nol
    }

    public function index()
    {
        // 2. AMBIL DATA DARI DATABASE
        $produkTerbaru = Produk::latest()->take(3)->get();
        $kegiatanTerbaru = Kegiatan::latest()->take(3)->get();
        $anggaranTerbaru = Anggaran::latest()->first();

        // 3. SIAPKAN VARIABEL UNTUK VIEW
        
        $tahun = date('Y'); // Default tahun ini
        $perencanaanTerbaru = null; // Ini adalah pengganti fitur 'perencanaan'
        $total_anggaran_pendapatan = 0;
        $total_perencanaan_pendapatan = 0; // Ini adalah 'anggaran' pendapatan
        $total_anggaran_belanja = 0;
        $total_perencanaan_belanja = 0; // Ini adalah 'anggaran' belanja
        $realisasi_pembiayaan = 0;
        $anggaran_pembiayaan = 0;

        // Jika data anggaran ada, ambil data dari sana
        if ($anggaranTerbaru) {
            $tahun = $anggaranTerbaru->tahun;
            
            // Set 'perencanaanTerbaru' agar @if di view lolos
            $perencanaanTerbaru = $anggaranTerbaru; 

            // Hitung Total Realisasi Pendapatan
            $total_anggaran_pendapatan = $anggaranTerbaru->dana_desa +
                                         $anggaranTerbaru->bagi_hasil_pajak +
                                         $anggaranTerbaru->alokasi_dana_desa;
            
            // Hitung Total Anggaran Pendapatan
            $total_perencanaan_pendapatan = $anggaranTerbaru->anggaran_dana_desa +
                                            $anggaranTerbaru->anggaran_bagi_hasil_pajak +
                                            $anggaranTerbaru->anggaran_alokasi_dana_desa;

            // Hitung Total Realisasi Belanja
            $total_anggaran_belanja = $anggaranTerbaru->belanja_penyelenggaraan_pemerintahan_desa +
                                      $anggaranTerbaru->belanja_pelaksanaan_pembangunan_desa +
                                      $anggaranTerbaru->belanja_pembinaan_kemasyarakatan +
                                      $anggaranTerbaru->belanja_pemberdayaan_masyarakat +
                                      $anggaranTerbaru->belanja_penanggulangan_bencana;

            // Hitung Total Anggaran Belanja
            $total_perencanaan_belanja = $anggaranTerbaru->anggaran_penyelenggaraan_pemerintahan_desa +
                                         $anggaranTerbaru->anggaran_pelaksanaan_pembangunan_desa +
                                         $anggaranTerbaru->anggaran_pembinaan_kemasyarakatan +
                                         $anggaranTerbaru->anggaran_pemberdayaan_masyarakat +
                                         $anggaranTerbaru->anggaran_penanggulangan_bencana;
            
            // Data Pembiayaan (Jika ada di Model Anggaran Anda)
            // Jika Anda belum menambahkannya, ini akan bernilai 0
            $realisasi_pembiayaan = $anggaranTerbaru->pembiayaan ?? 0; 
            $anggaran_pembiayaan = $anggaranTerbaru->anggaran_pembiayaan ?? 0;
        }

        // 4. KIRIM SEMUA DATA KE VIEW 'welcome'
        return view('welcome', [
            'produkTerbaru' => $produkTerbaru,
            'kegiatanTerbaru' => $kegiatanTerbaru,
            'anggaranTerbaru' => $anggaranTerbaru,
            
            'perencanaanTerbaru' => $perencanaanTerbaru, // Digunakan untuk cek @if
            'tahun' => $tahun,
            
            'total_anggaran_pendapatan' => $total_anggaran_pendapatan,
            'total_perencanaan_pendapatan' => $total_perencanaan_pendapatan,
            
            'total_anggaran_belanja' => $total_anggaran_belanja,
            'total_perencanaan_belanja' => $total_perencanaan_belanja,

            'realisasi_pembiayaan' => $realisasi_pembiayaan,
            'anggaran_pembiayaan' => $anggaran_pembiayaan,
        ]);
    }

    public function struktur()
    {
        $aparatur = AparaturDesa::orderBy('urutan', 'asc')->get();
        $sotk = $aparatur->filter(function($item) {
            return !str_contains(strtolower($item->jabatan), 'bpd');
        });
        $bpd = $aparatur->filter(function($item) {
            return str_contains(strtolower($item->jabatan), 'bpd');
        });
        return view('profil-desa.struktur-organisasi', compact('sotk', 'bpd'));
    }

    public function demografis()
    {
        $data = DataDemografi::first();
        if (!$data) {
            $data = new DataDemografi(); // Kirim model kosong jika belum diisi
        }
        return view('profil-desa.demografis', compact('data'));
    }

    public function apbdes()
    {
        $anggaran = Anggaran::orderBy('tahun', 'desc')->orderBy('semester', 'desc')->first();

        return view('apbdes', compact('anggaran'));
    }

    public function produk()
    {
        $produk = Produk::latest()->get();
        return view('produk', compact('produk'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::latest('tanggal')->get();
        return view('kegiatan', compact('kegiatan'));
    }
}

