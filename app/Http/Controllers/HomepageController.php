<?php

namespace App\Http\Controllers;

// 1. IMPORT SEMUA MODEL YANG DIPERLUKAN
use App\Models\Produk;
use App\Models\Kegiatan;
use App\Models\Anggaran;
use App\Models\AparaturDesa;
use App\Models\DataDemografi;
use Illuminate\Http\Request;
use Carbon\Carbon; 

class HomepageController extends Controller
{
    private function hitungPersen($realisasi, $anggaran)
    {
        if ($anggaran > 0) {
            return ($realisasi / $anggaran) * 100;
        }
        return 0; 
    }

    public function index()
    {
        // 2. AMBIL DATA DARI DATABASE
        $produkTerbaru = Produk::latest()->take(3)->get();
        $kegiatanTerbaru = Kegiatan::latest()->take(3)->get();
        $anggaranTerbaru = Anggaran::latest('tahun')->latest('semester')->first(); // Ambil yg terbaru
        $dataDemografi = DataDemografi::first(); // <-- TAMBAHKAN INI

        // 3. SIAPKAN VARIABEL UNTUK VIEW
        $tahun = date('Y');
        $total_anggaran_pendapatan = 0;
        $total_perencanaan_pendapatan = 0;
        $total_anggaran_belanja = 0;
        $total_perencanaan_belanja = 0;
        $realisasi_pembiayaan = 0;
        $anggaran_pembiayaan = 0;

        // Cek data anggaran (menggunakan struktur baru)
        if ($anggaranTerbaru) {
            $tahun = $anggaranTerbaru->tahun;
            
            // Total Pendapatan
            $total_anggaran_pendapatan = $anggaranTerbaru->pendapatan_asli_desa_realisasi +
                                         $anggaranTerbaru->pendapatan_transfer_realisasi +
                                         $anggaranTerbaru->pendapatan_lain_lain_realisasi;
            
            $total_perencanaan_pendapatan = $anggaranTerbaru->pendapatan_asli_desa_anggaran +
                                            $anggaranTerbaru->pendapatan_transfer_anggaran +
                                            $anggaranTerbaru->pendapatan_lain_lain_anggaran;

            // Total Belanja
            $total_anggaran_belanja = $anggaranTerbaru->belanja_pegawai_realisasi +
                                      $anggaranTerbaru->belanja_barang_jasa_realisasi +
                                      $anggaranTerbaru->belanja_modal_realisasi +
                                      $anggaranTerbaru->belanja_tidak_terduga_realisasi;

            $total_perencanaan_belanja = $anggaranTerbaru->belanja_pegawai_anggaran +
                                         $anggaranTerbaru->belanja_barang_jasa_anggaran +
                                         $anggaranTerbaru->belanja_modal_anggaran +
                                         $anggaranTerbaru->belanja_tidak_terduga_anggaran;
            
            // Pembiayaan Netto
            $realisasi_pembiayaan = $anggaranTerbaru->penerimaan_pembiayaan_realisasi - $anggaranTerbaru->pengeluaran_pembiayaan_realisasi;
            $anggaran_pembiayaan = $anggaranTerbaru->penerimaan_pembiayaan_anggaran - $anggaranTerbaru->pengeluaran_pembiayaan_anggaran;
        }

        // 4. KIRIM SEMUA DATA KE VIEW 'welcome'
        return view('welcome', [
            'produkTerbaru' => $produkTerbaru,
            'kegiatanTerbaru' => $kegiatanTerbaru,
            'anggaranTerbaru' => $anggaranTerbaru, // Kirim objek utuh
            'dataDemografi' => $dataDemografi, // <-- TAMBAHKAN INI
            
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
            $data = new DataDemografi();
        }
        return view('profil-desa.demografis', compact('data'));
    }

    public function apbdes()
    {
        // Ambil data terbaru (Tahun DAN Semester terbaru)
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