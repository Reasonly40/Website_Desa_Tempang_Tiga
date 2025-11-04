<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan; // Pastikan model diimpor
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Menampilkan daftar semua kegiatan.
     */
    public function index()
    {
        $kegiatan = Kegiatan::latest()->paginate(10);
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Menampilkan form untuk membuat kegiatan baru.
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Menyimpan kegiatan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'lokasi' => 'nullable|string|max:255', // <-- DITAMBAHKAN
            'penanggung_jawab' => 'nullable|string|max:255', // <-- DITAMBAHKAN
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $imagePath = $request->file('gambar')->store('kegiatan', 'public');

        Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi, // <-- DITAMBAHKAN
            'penanggung_jawab' => $request->penanggung_jawab, // <-- DITAMBAHKAN
            'gambar' => $imagePath,
        ]);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit kegiatan.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Memperbarui data kegiatan di database.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'lokasi' => 'nullable|string|max:255', // <-- DITAMBAHKAN
            'penanggung_jawab' => 'nullable|string|max:255', // <-- DITAMBAHKAN
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($kegiatan->gambar) {
                Storage::disk('public')->delete($kegiatan->gambar);
            }
            $imagePath = $request->file('gambar')->store('kegiatan', 'public');
            $validated['gambar'] = $imagePath;
        }

        $kegiatan->update($validated);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    /**
     * Menghapus data kegiatan dari database.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        // --- PERBAIKAN: Cek kolom 'gambar' ---
        if ($kegiatan->gambar) {
            Storage::disk('public')->delete($kegiatan->gambar);
        }
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}