<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->paginate(10);
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        // PERBAIKAN: Validasi disesuaikan dengan form baru
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'seller_contact' => 'nullable|string|max:20', // Input untuk No. WA
            'deskripsi' => 'required|string|max:100', // Batas 100 karakter
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $imagePath = $request->file('image')->store('produk', 'public');

        // PERBAIKAN: Kolom disesuaikan dengan form baru
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'seller_contact' => $request->seller_contact, // Input untuk No. WA
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        // PERBAIKAN: Validasi disesuaikan dengan form baru
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'seller_contact' => 'nullable|string|max:20', // Input untuk No. WA
            'deskripsi' => 'required|string|max:100', // Batas 100 karakter
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($produk->image) {
                Storage::disk('public')->delete($produk->image);
            }
            $imagePath = $request->file('image')->store('produk', 'public');
            $validated['image'] = $imagePath;
        }

        $produk->update($validated);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->image) {
            Storage::disk('public')->delete($produk->image);
        }
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}