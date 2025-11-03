<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; // <-- TAMBAHKAN IMPORT INI

class AnggaranController extends Controller
{
    /**
     * Validasi data.
     */
    private function validateData(Request $request, $anggaranId = null)
    {
        // Aturan validasi untuk composite unique key
        $uniqueRule = Rule::unique('anggaran')->where(function ($query) use ($request) {
            return $query->where('semester', $request->semester)
                         ->where('tahun', $request->tahun);
        });

        // Abaikan ID saat ini jika sedang update
        if ($anggaranId) {
            $uniqueRule->ignore($anggaranId);
        }
        
        $rules = [
            'tahun' => ['required', 'integer', 'min:2000', $uniqueRule], // Validasi unique baru
            'semester' => 'required|integer|in:1,2', // Validasi semester
            
            // ... (Semua validasi numeric lainnya tetap sama)
            'pendapatan_asli_desa_anggaran' => 'required|numeric|min:0',
            'pendapatan_asli_desa_realisasi' => 'required|numeric|min:0',
            'pendapatan_transfer_anggaran' => 'required|numeric|min:0',
            'pendapatan_transfer_realisasi' => 'required|numeric|min:0',
            'pendapatan_lain_lain_anggaran' => 'required|numeric|min:0',
            'pendapatan_lain_lain_realisasi' => 'required|numeric|min:0',
            'belanja_pegawai_anggaran' => 'required|numeric|min:0',
            'belanja_pegawai_realisasi' => 'required|numeric|min:0',
            'belanja_barang_jasa_anggaran' => 'required|numeric|min:0',
            'belanja_barang_jasa_realisasi' => 'required|numeric|min:0',
            'belanja_modal_anggaran' => 'required|numeric|min:0',
            'belanja_modal_realisasi' => 'required|numeric|min:0',
            'belanja_tidak_terduga_anggaran' => 'required|numeric|min:0',
            'belanja_tidak_terduga_realisasi' => 'required|numeric|min:0',
            'penerimaan_pembiayaan_anggaran' => 'required|numeric|min:0',
            'penerimaan_pembiayaan_realisasi' => 'required|numeric|min:0',
            'pengeluaran_pembiayaan_anggaran' => 'required|numeric|min:0',
            'pengeluaran_pembiayaan_realisasi' => 'required|numeric|min:0',
        ];

        return $request->validate($rules);
    }

    /**
     * Menampilkan daftar anggaran.
     */
    public function index()
    {
        // Urutkan berdasarkan tahun, LALU berdasarkan semester
        $anggaran = Anggaran::orderBy('tahun', 'desc')->orderBy('semester', 'desc')->paginate(10);
        return view('admin.anggaran.index', compact('anggaran'));
    }

    /**
     * Menampilkan form untuk membuat anggaran baru.
     */
    public function create()
    {
        return view('admin.anggaran.create');
    }

    /**
     * Menyimpan anggaran baru.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);
        Anggaran::create($validatedData);
        return redirect()->route('admin.anggaran.index')->with('success', 'Data APBDes berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit anggaran.
     */
    public function edit(Anggaran $anggaran)
    {
        return view('admin.anggaran.edit', compact('anggaran'));
    }

    /**
     * Update data anggaran.
     */
    public function update(Request $request, Anggaran $anggaran)
    {
        $validatedData = $this->validateData($request, $anggaran->id);
        $anggaran->update($validatedData);
        return redirect()->route('admin.anggaran.index')->with('success', 'Data APBDes berhasil diperbarui!');
    }

    /**
     * Hapus data anggaran.
     */
    public function destroy(Anggaran $anggaran)
    {
        $anggaran->delete();
        return redirect()->route('admin.anggaran.index')->with('success', 'Data APBDes berhasil dihapus.');
    }
}