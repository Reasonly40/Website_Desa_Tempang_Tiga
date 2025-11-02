<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan model Berita diimpor
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk mengelola file/gambar
use Illuminate\Support\Str; // Untuk membuat slug dari judul

// PERBAIKAN 1: Tambahkan 'use' statement untuk Controller inti Laravel dan traits
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

// PERBAIKAN 2: Ubah 'extends Controller' menjadi 'extends BaseController'
class BeritaController extends BaseController
{
    // PERBAIKAN 3: Tambahkan traits yang hilang agar ->validate() berfungsi
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Menampilkan daftar semua berita (halaman admin).
     * Terhubung ke route: GET /admin/berita (nama: admin.berita.index)
     */
    public function index()
    {
        // Ambil data berita terbaru, 10 per halaman
        // PERBAIKAN: Tambahkan ->with('user') untuk mengambil data penulis (optimasi query)
        $berita = Berita::with('user')->latest()->paginate(10);
        
        // Kirim data ke view
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Menampilkan form untuk membuat berita baru.
     * Terhubung ke route: GET /admin/berita/create (nama: admin.berita.create)
     */
    public function create()
    {
        // Hanya menampilkan halaman form
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru ke database.
     * Terhubung ke route: POST /admin/berita (nama: admin.berita.store)
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255|unique:berita,title', // Judul harus unik
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Gambar opsional, maks 2MB
        ]);

        // 2. Proses upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Simpan gambar ke folder 'public/storage/berita'
            // (Hasilnya akan menjadi 'berita/namafile.jpg')
            $imagePath = $request->file('image')->store('berita', 'public');
        }

        // 3. Simpan data ke database
        Berita::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(), // Buat slug unik (judul + timestamp)
            'content' => $request->content,
            'image' => $imagePath,
            'published_at' => now(), // Langsung set waktu publish saat dibuat
            
            // PERBAIKAN SEMENTARA: 
            // Baris ini dikomentari karena kolom 'user_id' tidak ada di database Anda.
            // 'user_id' => auth()->id(), 
        ]);

        // 4. Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail satu berita (opsional, belum dibuat view-nya).
     * Terhubung ke route: GET /admin/berita/{berita} (nama: admin.berita.show)
     */
    public function show(Berita $berita)
    {
        // $berita sudah otomatis diambil berdasarkan ID/slug di URL (Route Model Binding)
        // return view('admin.berita.show', compact('berita')); // Jika Anda ingin membuat halaman detail
        return '<h1>Detail Berita: ' . $berita->title . '</h1>'; // Placeholder
    }

    /**
     * Menampilkan form untuk mengedit berita.
     * Terhubung ke route: GET /admin/berita/{berita}/edit (nama: admin.berita.edit)
     */
    public function edit(Berita $berita)
    {
        // $berita sudah otomatis diambil berdasarkan ID/slug di URL (Route Model Binding)
        // Kirim data berita yang ingin diedit ke view
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Memperbarui data berita di database.
     * Terhubung ke route: PUT/PATCH /admin/berita/{berita} (nama: admin.berita.update)
     */
    public function update(Request $request, Berita $berita)
    {
        // 1. Validasi input (judul tidak perlu unik jika sama dengan yang lama)
        $validated = $request->validate([
            // Abaikan aturan unik jika ID sama dengan berita yang sedang diedit
            'title' => 'required|string|max:255|unique:berita,title,' . $berita->id, 
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Gambar opsional
        ]);

        // 2. [PERBAIKAN] Update slug HANYA JIKA judul berubah
        if ($request->title !== $berita->title) {
            $validated['slug'] = Str::slug($request->title) . '-' . time();
        }

        // 3. Proses upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('berita', 'public');
            $validated['image'] = $imagePath; // Tambahkan path gambar baru ke data yang akan diupdate
        }

        // 4. Update data di database
        $berita->update($validated);

        // 5. Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Menghapus data berita dari database.
     * Terhubung ke route: DELETE /admin/berita/{berita} (nama: admin.berita.destroy)
     */
    public function destroy(Berita $berita)
    {
        // 1. Hapus file gambar dari storage jika ada
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }

        // 2. Hapus data berita dari database
        $berita->delete();

        // 3. Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}

