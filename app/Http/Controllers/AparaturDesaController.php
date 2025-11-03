<?php

namespace App\Http\Controllers;

use App\Models\AparaturDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan ini di-import

class AparaturDesaController extends Controller
{
    /**
     * Menampilkan daftar semua aparatur.
     */
    public function index()
    {
        $aparatur = AparaturDesa::orderBy('urutan', 'asc')->get();
        return view('admin.aparatur.index', compact('aparatur'));
    }

    /**
     * Menampilkan form untuk menambah aparatur baru.
     */
    public function create()
    {
        return view('admin.aparatur.create');
    }

    /**
     * Menyimpan aparatur baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'urutan' => 'nullable|integer',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/aparatur');
        }

        AparaturDesa::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $path,
            'urutan' => $request->urutan ?? 99,
        ]);

        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit aparatur.
     */
    public function edit(AparaturDesa $aparatur)
    {
        return view('admin.aparatur.edit', compact('aparatur'));
    }

    /**
     * Update aparatur di database.
     */
    public function update(Request $request, AparaturDesa $aparatur)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'urutan' => 'nullable|integer',
        ]);

        $path = $aparatur->foto;
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($path) {
                Storage::delete($path);
            }
            $path = $request->file('foto')->store('public/aparatur');
        }

        $aparatur->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $path,
            'urutan' => $request->urutan ?? 99,
        ]);

        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil diperbarui.');
    }

    /**
     * Hapus aparatur dari database.
     */
    public function destroy(AparaturDesa $aparatur)
    {
        if ($aparatur->foto) {
            Storage::delete($aparatur->foto);
        }
        $aparatur->delete();
        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil dihapus.');
    }
}