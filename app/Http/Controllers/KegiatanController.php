<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // <-- Import Str helper

class KegiatanController extends Controller
{
    /**
     * Menampilkan form untuk membuat kegiatan baru.
     */
    public function create()
    {
        // Method ini hanya bertugas menampilkan halaman form
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Wajib gambar, maks 2MB
        ]);

        // 2. Proses Upload Gambar
        $imagePath = $request->file('image')->store('kegiatan', 'public');

        // 3. Simpan Data ke Database
        Kegiatan::create([
            'title' => $request->title,
            'description' => $request->description,
            'activity_date' => $request->activity_date,
            'image' => $imagePath, // Simpan path gambar
        ]);

        // 4. Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->route('admin.kegiatan.create')->with('success', 'Data kegiatan berhasil ditambahkan!');
    }

    // ... method lainnya (index, show, edit, update, destroy)
}