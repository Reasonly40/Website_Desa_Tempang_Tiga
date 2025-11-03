<?php

namespace App\Http\Controllers;
use App\Models\DataDemografi;
use Illuminate\Http\Request;

class DataDemografiController extends Controller
{
    public function edit()
    {
        $data = DataDemografi::firstOrNew(['id' => 1]);
        
        return view('admin.demografi.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'penduduk_total' => 'required|integer|min:0',

            'kk_total' => 'required|integer|min:0',

            'laki_0_15' => 'required|integer|min:0',
            'laki_16_55' => 'required|integer|min:0',
            'laki_diatas_55' => 'required|integer|min:0',

            'perempuan_0_15' => 'required|integer|min:0',
            'perempuan_16_55' => 'required|integer|min:0',
            'perempuan_diatas_55' => 'required|integer|min:0',

            'kk_prasejahtera' => 'required|integer|min:0',
            'kk_sejahtera' => 'required|integer|min:0',
            'kk_kaya' => 'required|integer|min:0',
            'kk_sedang' => 'required|integer|min:0',
            'kk_miskin' => 'required|integer|min:0',

            'pend_tidak_sd' => 'required|integer|min:0',
            'pend_sd' => 'required|integer|min:0',
            'pend_sltp' => 'required|integer|min:0',
            'pend_slta' => 'required|integer|min:0',
            'pend_diploma' => 'required|integer|min:0',
            
            'pek_buruh_tani' => 'required|integer|min:0',
            'pek_petani' => 'required|integer|min:0',
            'pek_peternak' => 'required|integer|min:0',
            'pek_pedagang' => 'required|integer|min:0',
            'pek_tukang_kayu' => 'required|integer|min:0',
            'pek_tukang_batu' => 'required|integer|min:0',
            'pek_penjahit' => 'required|integer|min:0',
            'pek_pns' => 'required|integer|min:0',
            'pek_pensiunan' => 'required|integer|min:0',
            'pek_tni_polri' => 'required|integer|min:0',
            'pek_perangkat_desa' => 'required|integer|min:0',
            'pek_pengrajin' => 'required|integer|min:0',
            'pek_industri_kecil' => 'required|integer|min:0',
            'pek_buruh_industri' => 'required|integer|min:0',
            'pek_lain_lain' => 'required|integer|min:0',
            
            'agama_islam' => 'required|integer|min:0',
            'agama_kristen' => 'required|integer|min:0',
            'agama_protestan' => 'required|integer|min:0',
            'agama_katolik' => 'required|integer|min:0',
            'agama_hindu' => 'required|integer|min:0',
            'agama_budha' => 'required|integer|min:0',
        ]);

        DataDemografi::updateOrCreate(
            ['id' => 1],
            $validatedData
        );

        return redirect()->route('admin.demografi.edit')->with('success', 'Data Demografis berhasil diperbarui.');
    }
}