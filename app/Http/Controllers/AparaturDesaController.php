<?php

namespace App\Http\Controllers;

use App\Models\AparaturDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AparaturDesaController extends Controller
{
    /**
     * Daftar Jabatan Tetap SOTK Desa.
     */
    private function getSotkJabatan()
    {
        return [
            1 => 'Kepala Desa',
            2 => 'Sekretaris Desa',
            3 => 'Kasi Pemerintahan',
            4 => 'Kasi Kesra',
            5 => 'Kasi Pelayanan',
            6 => 'Kaur Perencanaan',
            7 => 'Kaur Keuangan',
            8 => 'Kepala Jaga I',
            9 => 'Meweteng Jaga I',
            10 => 'Kepala Jaga II',
            11 => 'Meweteng Jaga II',
            12 => 'Kepala Jaga III',
            13 => 'Meweteng Jaga III',
            14 => 'Kepala Jaga IV',
            15 => 'Meweteng Jaga IV',
        ];
    }

    /**
     * Daftar Jabatan Tetap BPD.
     */
    private function getBpdJabatan()
    {
        return [
            1 => 'BPD Ketua', 
            2 => 'BPD Wakil Ketua',
            3 => 'BPD Sekretaris',
            4 => 'BPD Anggota',
            5 => 'BPD Anggota',
        ];
    }

    /**
     * Cek dan buat data aparatur jika belum ada.
     */
    private function seedAparaturDefault()
    {
        $placeholder = 'Nama Belum Diisi';

        foreach ($this->getSotkJabatan() as $urutan => $jabatan) {
            AparaturDesa::firstOrCreate(
                ['jabatan' => $jabatan],
                ['urutan' => $urutan, 'nama' => $placeholder]
            );
        }
        
        $bpdList = $this->getBpdJabatan();
        foreach ($bpdList as $urutan => $jabatan) {
            
            if ($jabatan === 'BPD Anggota') {
                AparaturDesa::firstOrCreate(
                    ['jabatan' => $jabatan, 'urutan' => $urutan],
                    ['nama' => $placeholder]
                );
            } else {
                AparaturDesa::firstOrCreate(
                    ['jabatan' => $jabatan],
                    ['urutan' => $urutan, 'nama' => $placeholder]
                );
            }
        }
    }


    /**
     * Menampilkan daftar semua aparatur.
     */
    public function index()
    {
        $this->seedAparaturDefault();

        $semuaAparatur = AparaturDesa::orderBy('urutan', 'asc')->get();
        
        $sotk = $semuaAparatur->filter(function($item) {
            return !str_contains(strtolower($item->jabatan), 'bpd');
        });

        $bpd = $semuaAparatur->filter(function($item) {
            return str_contains(strtolower($item->jabatan), 'bpd');
        });

        return view('admin.aparatur.index', compact('sotk', 'bpd'));
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
    /**
     * Update aparatur di database.
     */
    public function update(Request $request, AparaturDesa $aparatur)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'hapus_foto' => 'nullable|in:0,1', 
        ]);

        $path = $aparatur->foto;

        if ($request->hasFile('foto')) {
            if ($path) {
                Storage::delete($path);
            }
            $path = $request->file('foto')->store('aparatur', 'public');
        
        } elseif ($request->input('hapus_foto') == '1') {
            if ($path) {
                Storage::delete($path);
            }
            $path = null;
        }
        $aparatur->update([
            'nama' => $request->nama,
            'foto' => $path,
        ]);

        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil diperbarui.');
    }

}