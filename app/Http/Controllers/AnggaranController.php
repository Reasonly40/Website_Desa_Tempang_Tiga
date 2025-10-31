<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan ini diimpor

class AnggaranController extends Controller
{
    public function index()
    {
        // Ganti nama variabel agar konsisten dengan model
        $anggaran = Anggaran::latest()->paginate(10);
        return view('admin.anggaran.index', compact('anggaran'));
    }

    public function create()
    {
        return view('admin.anggaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:2000',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,xls,xlsx,doc,docx|max:10240' // File maks 10MB
        ]);

        $filePath = $request->file('file')->store('anggaran', 'public');

        Anggaran::create([
            'title' => $request->title,
            'year' => $request->year,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.anggaran.index')->with('success', 'Dokumen anggaran berhasil diunggah!');
    }

    public function edit(Anggaran $anggaran)
    {
        return view('admin.anggaran.edit', compact('anggaran'));
    }

    public function update(Request $request, Anggaran $anggaran)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:2000',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,xls,xlsx,doc,docx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            if ($anggaran->file_path) {
                Storage::disk('public')->delete($anggaran->file_path);
            }
            $filePath = $request->file('file')->store('anggaran', 'public');
            $validated['file_path'] = $filePath;
        }

        $anggaran->update($validated);

        return redirect()->route('admin.anggaran.index')->with('success', 'Dokumen anggaran berhasil diperbarui!');
    }

    public function destroy(Anggaran $anggaran)
    {
        if ($anggaran->file_path) {
            Storage::disk('public')->delete($anggaran->file_path);
        }
        $anggaran->delete();

        return redirect()->route('admin.anggaran.index')->with('success', 'Dokumen anggaran berhasil dihapus.');
    }
}

