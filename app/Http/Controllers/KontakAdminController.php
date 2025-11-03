<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakAdminController extends Controller
{
    public function edit()
    {
        $kontak = Kontak::firstOrNew(['id' => 1]);
        
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:50',
            'link_gmaps' => 'nullable|url',
        ]);

        Kontak::updateOrCreate(
            ['id' => 1],
            [
                'alamat' => $request->alamat,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'link_gmaps' => $request->link_gmaps,
            ]
        );

        return redirect()->route('admin.kontak.edit')->with('success', 'Info Kontak berhasil diperbarui.');
    }
}