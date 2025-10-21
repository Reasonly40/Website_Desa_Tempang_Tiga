<?php

namespace App\Http\Controllers;

use App\Models\Perencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerencanaanController extends Controller
{
    public function index()
    {
        $perencanaan = Perencanaan::latest()->paginate(10);
        return view('admin.perencanaan.index', compact('perencanaan'));
    }

    public function create()
    {
        return view('admin.perencanaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'file' => 'required|file|mimes:pdf,xls,xlsx,doc,docx|max:10240'
        ]);

        $filePath = $request->file('file')->store('perencanaan', 'public');

        Perencanaan::create([
            'title' => $request->title,
            'category' => $request->category,
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.perencanaan.index')->with('success', 'Dokumen perencanaan berhasil diunggah!');
    }

    public function edit(Perencanaan $perencanaan)
    {
        return view('admin.perencanaan.edit', compact('perencanaan'));
    }

    public function update(Request $request, Perencanaan $perencanaan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'file' => 'nullable|file|mimes:pdf,xls,xlsx,doc,docx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            if ($perencanaan->file_path) {
                Storage::disk('public')->delete($perencanaan->file_path);
            }
            $filePath = $request->file('file')->store('perencanaan', 'public');
            $validated['file_path'] = $filePath;
        }

        $perencanaan->update($validated);

        return redirect()->route('admin.perencanaan.index')->with('success', 'Dokumen perencanaan berhasil diperbarui!');
    }

    public function destroy(Perencanaan $perencanaan)
    {
        if ($perencanaan->file_path) {
            Storage::disk('public')->delete($perencanaan->file_path);
        }
        $perencanaan->delete();

        return redirect()->route('admin.perencanaan.index')->with('success', 'Dokumen perencanaan berhasil dihapus.');
    }
}