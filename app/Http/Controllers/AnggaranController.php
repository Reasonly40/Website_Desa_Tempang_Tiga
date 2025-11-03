<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Storage tetap di-import, meskipun tidak terpakai

class AnggaranController extends Controller
{
    /**
     * Menampilkan daftar realisasi anggaran.
     */
    public function index()
    {
        $anggaran = Anggaran::latest()->paginate(10);
        return view('admin.anggaran.index', compact('anggaran'));
    }

    /**
     * Menampilkan form untuk menginput realisasi anggaran baru.
     */
    public function create()
    {
        return view('admin.anggaran.create');
    }

    /**
     * Menyimpan data realisasi anggaran baru ke database.
     * PERBAIKAN: Disesuaikan dengan struktur tabel input angka.
     */
    public function store(Request $request)
    {
        // Validasi untuk semua kolom input angka
        $validatedData = $request->validate([
            'tahun' => 'required|integer|min:2000|unique:anggaran,tahun', // Tahun harus unik di tabel 'anggaran'
            'dana_desa' => 'required|numeric|min:0',
            'bagi_hasil' => 'required|numeric|min:0',
            'alokasi_dana_desa' => 'required|numeric|min:0',
            'penyelenggaraan_pemerintahan' => 'required|numeric|min:0',
            'pelaksanaan_pembangunan' => 'required|numeric|min:0',
            'pembinaan_kemasyarakatan' => 'required|numeric|min:0',
            'pemberdayaan_masyarakat' => 'required|numeric|min:0',
            'penanggulangan_bencana' => 'required|numeric|min:0',
            'pembiayaan' => 'required|numeric|min:0',
        ]);

        // Buat entri database
        // Pastikan Model 'Anggaran' Anda memiliki semua field ini di $fillable
        Anggaran::create($validatedData);

        return redirect()->route('admin.anggaran.index')->with('success', 'Data realisasi anggaran berhasil disimpan!');
    }

    /**
     * Menampilkan form untuk mengedit realisasi anggaran.
     */
    public function edit(Anggaran $anggaran)
    {
        // Pastikan Model 'Anggaran' menggunakan 'protected $table = 'anggaran';'
        return view('admin.anggaran.edit', compact('anggaran'));
    }

    /**
     * Memperbarui data realisasi anggaran di database.
     * PERBAIKAN: Disesuaikan dengan struktur tabel input angka.
     */
    public function update(Request $request, Anggaran $anggaran)
    {
        // Validasi untuk update
        $validatedData = $request->validate([
            // Izinkan tahun yang sama jika itu adalah data miliknya sendiri
            'tahun' => 'required|integer|min:2000|unique:anggaran,tahun,' . $anggaran->id,
            'dana_desa' => 'required|numeric|min:0',
            'bagi_hasil' => 'required|numeric|min:0',
            'alokasi_dana_desa' => 'required|numeric|min:0',
            'penyelenggaraan_pemerintahan' => 'required|numeric|min:0',
            'pelaksanaan_pembangunan' => 'required|numeric|min:0',
            'pembinaan_kemasyarakatan' => 'required|numeric|min:0',
            'pemberdayaan_masyarakat' => 'required|numeric|min:0',
            'penanggulangan_bencana' => 'required|numeric|min:0',
            'pembiayaan' => 'required|numeric|min:0',
        ]);

        // Tidak ada file yang perlu di-handle, langsung update
        $anggaran->update($validatedData);

        return redirect()->route('admin.anggaran.index')->with('success', 'Data realisasi anggaran berhasil diperbarui!');
    }

    /**
     * Menghapus data realisasi anggaran dari database.
     * PERBAIKAN: Disesuaikan dengan struktur tabel input angka.
     */
    public function destroy(Anggaran $anggaran)
    {
        // Tidak ada file yang perlu dihapus dari storage
        
        // Hapus entri dari database
        $anggaran->delete();

        return redirect()->route('admin.anggaran.index')->with('success', 'Data realisasi anggaran berhasil dihapus.');
    }
}