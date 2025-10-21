<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- Pastikan ini ada

class KegiatanController extends Controller
{
    /**
     * Menampilkan daftar semua kegiatan (halaman admin).
     */
    public function index()
    {
        // Ambil semua data kegiatan, urutkan dari yang terbaru
        $kegiatan = Kegiatan::latest()->paginate(10);
        
        // Kirim data ke view 'admin.kegiatan.index'
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Menampilkan form untuk membuat kegiatan baru.
     */
    public function create()
    {
        // Method ini sudah benar
        return view('admin.kegiatan.create');
    }

    /**
     * Menyimpan kegiatan baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'activity_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // 2. Proses Upload Gambar
        $imagePath = $request->file('image')->store('kegiatan', 'public');

        // 3. Simpan Data ke Database
        Kegiatan::create([
            'title' => $request->title,
            'description' => $request->description,
            'activity_date' => $request->activity_date,
            'image' => $imagePath,
        ]);

        // 4. Redirect kembali ke halaman index (daftar kegiatan)
        return redirect()->route('admin.kegiatan.index')->with('success', 'Data kegiatan berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail satu kegiatan. (Belum kita buat view-nya)
     */
    public function show(Kegiatan $kegiatan)
    {
        return '<h1>Ini adalah halaman detail untuk kegiatan: ' . $kegiatan->title . '</h1>';
    }

    /**
     * Menampilkan form untuk mengedit kegiatan.
     * (INI YANG DISESUAIKAN)
     */
    public function edit(Kegiatan $kegiatan)
    {
        // $kegiatan sudah otomatis diambil berdasarkan ID di URL
        // Kirim data $kegiatan itu ke view 'admin.kegiatan.edit'
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Memperbarui data kegiatan di database.
     * (INI YANG DISESUAIKAN)
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        // 1. Validasi Input (gambar sekarang boleh kosong/nullable)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'activity_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Opsional
        ]);

        // 2. Cek apakah ada file gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($kegiatan->image) {
                Storage::disk('public')->delete($kegiatan->image);
            }
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('kegiatan', 'public');
            $validated['image'] = $imagePath; // Tambahkan path gambar baru ke data
        }

        // 3. Update data di database
        $kegiatan->update($validated);

        // 4. Redirect kembali ke halaman index (daftar kegiatan)
        return redirect()->route('admin.kegiatan.index')->with('success', 'Data kegiatan berhasil diperbarui!');
    }

    /**
     * Menghapus data kegiatan dari database.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        // 1. Hapus file gambar dari storage
        if ($kegiatan->image) {
            Storage::disk('public')->delete($kegiatan->image);
        }

        // 2. Hapus data dari database
        $kegiatan->delete();

        // 3. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.kegiatan.index')->with('success', 'Data kegiatan berhasil dihapus.');
    }
}