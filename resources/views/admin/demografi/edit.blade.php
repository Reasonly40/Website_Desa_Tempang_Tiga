@extends('layouts.admin')

@section('title', 'Edit Demografis')

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Edit Data Demografis
    </h2>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Card (Tailwind) --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form method="POST" action="{{ route('admin.demografi.update') }}">
            @csrf
            @method('PUT')

            {{-- 1. Kependudukan --}}
            <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b">
                1. Kependudukan
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4 mb-6">
                <div>
                    <label for="penduduk_total" class="block text-sm font-medium text-gray-700">Jumlah Penduduk (Total)</label>
                    <input id="penduduk_total" type="number" name="penduduk_total" value="{{ old('penduduk_total', $data->penduduk_total ?? 0) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="kk_total" class="block text-sm font-medium text-gray-700">Jumlah KK (Total)</label>
                    <input id="kk_total" type="number" name="kk_total" value="{{ old('kk_total', $data->kk_total ?? 0) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <fieldset class="border rounded p-4">
                    <legend class="text-sm font-medium text-gray-700 px-1">Laki-laki</legend>
                    <div class="space-y-4 mt-2">
                        <div>
                            <label for="laki_0_15" class="block text-sm font-medium text-gray-700">0 - 15 Tahun</label>
                            <input id="laki_0_15" type="number" name="laki_0_15" value="{{ old('laki_0_15', $data->laki_0_15 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="laki_16_55" class="block text-sm font-medium text-gray-700">16 - 55 Tahun</label>
                            <input id="laki_16_55" type="number" name="laki_16_55" value="{{ old('laki_16_55', $data->laki_16_55 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="laki_diatas_55" class="block text-sm font-medium text-gray-700">Diatas 55 Tahun</label>
                            <input id="laki_diatas_55" type="number" name="laki_diatas_55" value="{{ old('laki_diatas_55', $data->laki_diatas_55 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                </fieldset>
                
                <fieldset class="border rounded p-4">
                    <legend class="text-sm font-medium text-gray-700 px-1">Perempuan</legend>
                    <div class="space-y-4 mt-2">
                        <div>
                            <label for="perempuan_0_15" class="block text-sm font-medium text-gray-700">0 - 15 Tahun</label>
                            <input id="perempuan_0_15" type="number" name="perempuan_0_15" value="{{ old('perempuan_0_15', $data->perempuan_0_15 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="perempuan_16_55" class="block text-sm font-medium text-gray-700">16 - 55 Tahun</label>
                            <input id="perempuan_16_55" type="number" name="perempuan_16_55" value="{{ old('perempuan_16_55', $data->perempuan_16_55 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="perempuan_diatas_55" class="block text-sm font-medium text-gray-700">Diatas 55 Tahun</label>
                            <input id="perempuan_diatas_55" type="number" name="perempuan_diatas_55" value="{{ old('perempuan_diatas_55', $data->perempuan_diatas_55 ?? 0) }}" required
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                </fieldset>
            </div>
            
            {{-- 2. Kesejahteraan --}}
            <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 pb-2 border-b">
                2. Kesejahteraan Sosial (KK)
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

                <div><label for="kk_prasejahtera" class="block text-sm font-medium text-gray-700">KK Prasejahtera</label><input id="kk_prasejahtera" type="number" name="kk_prasejahtera" value="{{ old('kk_prasejahtera', $data->kk_prasejahtera    ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="kk_sejahtera" class="block text-sm font-medium text-gray-700">KK Sejahtera</label><input id="kk_sejahtera" type="number" name="kk_sejahtera" value="{{ old('kk_sejahtera', $data->kk_sejahtera ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="kk_kaya" class="block text-sm font-medium text-gray-700">KK Kaya</label><input id="kk_kaya" type="number" name="kk_kaya" value="{{ old('kk_kaya', $data->kk_kaya ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="kk_sedang" class="block text-sm font-medium text-gray-700">KK Sedang</label><input id="kk_sedang" type="number" name="kk_sedang" value="{{ old('kk_sedang', $data->kk_sedang ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="kk_miskin" class="block text-sm font-medium text-gray-700">KK Miskin</label><input id="kk_miskin" type="number" name="kk_miskin" value="{{ old('kk_miskin', $data->kk_miskin ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
            </div>

            {{-- 3. Pendidikan --}}
            <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 pb-2 border-b">
                3. Tingkat Pendidikan
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-6">
                <div><label for="pend_tidak_sd" class="block text-sm font-medium text-gray-700">Tidak Tamat SD</label><input id="pend_tidak_sd" type="number" name="pend_tidak_sd" value="{{ old('pend_tidak_sd', $data->pend_tidak_sd ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pend_sd" class="block text-sm font-medium text-gray-700">SD</label><input id="pend_sd" type="number" name="pend_sd" value="{{ old('pend_sd', $data->pend_sd ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pend_sltp" class="block text-sm font-medium text-gray-700">SLTP</label><input id="pend_sltp" type="number" name="pend_sltp" value="{{ old('pend_sltp', $data->pend_sltp ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pend_slta" class="block text-sm font-medium text-gray-700">SLTA</label><input id="pend_slta" type="number" name="pend_slta" value="{{ old('pend_slta', $data->pend_slta ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pend_diploma" class="block text-sm font-medium text-gray-700">Diploma/Sarjana</label><input id="pend_diploma" type="number" name="pend_diploma" value="{{ old('pend_diploma', $data->pend_diploma ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
            </div>

            {{-- 4. Pekerjaan --}}
            <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 pb-2 border-b">
                4. Mata Pencaharian
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div><label for="pek_buruh_tani" class="block text-sm font-medium text-gray-700">Buruh Tani</label><input id="pek_buruh_tani" type="number" name="pek_buruh_tani" value="{{ old('pek_buruh_tani', $data->pek_buruh_tani ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_petani" class="block text-sm font-medium text-gray-700">Petani</label><input id="pek_petani" type="number" name="pek_petani" value="{{ old('pek_petani', $data->pek_petani ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_peternak" class="block text-sm font-medium text-gray-700">Peternak</label><input id="pek_peternak" type="number" name="pek_peternak" value="{{ old('pek_peternak', $data->pek_peternak ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_pedagang" class="block text-sm font-medium text-gray-700">Pedagang</label><input id="pek_pedagang" type="number" name="pek_pedagang" value="{{ old('pek_pedagang', $data->pek_pedagang ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_tukang_kayu" class="block text-sm font-medium text-gray-700">Tukang Kayu</label><input id="pek_tukang_kayu" type="number" name="pek_tukang_kayu" value="{{ old('pek_tukang_kayu', $data->pek_tukang_kayu ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_tukang_batu" class="block text-sm font-medium text-gray-700">Tukang Batu</label><input id="pek_tukang_batu" type="number" name="pek_tukang_batu" value="{{ old('pek_tukang_batu', $data->pek_tukang_batu ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_penjahit" class="block text-sm font-medium text-gray-700">Penjahit</label><input id="pek_penjahit" type="number" name="pek_penjahit" value="{{ old('pek_penjahit', $data->pek_penjahit ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_pns" class="block text-sm font-medium text-gray-700">PNS</label><input id="pek_pns" type="number" name="pek_pns" value="{{ old('pek_pns', $data->pek_pns ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                
                {{-- PERBAIKAN: Mengganti 'pek_pensiunan' dengan 'pek_peralatan' agar sesuai migrasi --}}
                <div><label for="pek_peralatan" class="block text-sm font-medium text-gray-700">Pensiunan</label><input id="pek_peralatan" type="number" name="pek_peralatan" value="{{ old('pek_peralatan', $data->pek_peralatan ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                
                <div><label for="pek_tni_polri" class="block text-sm font-medium text-gray-700">TNI/Polri</label><input id="pek_tni_polri" type="number" name="pek_tni_polri" value="{{ old('pek_tni_polri', $data->pek_tni_polri ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_perangkat_desa" class="block text-sm font-medium text-gray-700">Perangkat Desa</label><input id="pek_perangkat_desa" type="number" name="pek_perangkat_desa" value="{{ old('pek_perangkat_desa', $data->pek_perangkat_desa ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_pengrajin" class="block text-sm font-medium text-gray-700">Pengrajin</label><input id="pek_pengrajin" type="number" name="pek_pengrajin" value="{{ old('pek_pengrajin', $data->pek_pengrajin ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_industri_kecil" class="block text-sm font-medium text-gray-700">Industri Kecil</label><input id="pek_industri_kecil" type="number" name="pek_industri_kecil" value="{{ old('pek_industri_kecil', $data->pek_industri_kecil ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_buruh_industri" class="block text-sm font-medium text-gray-700">Buruh Industri</label><input id="pek_buruh_industri" type="number" name="pek_buruh_industri" value="{{ old('pek_buruh_industri', $data->pek_buruh_industri ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="pek_lain_lain" class="block text-sm font-medium text-gray-700">Lain-lain</label><input id="pek_lain_lain" type="number" name="pek_lain_lain" value="{{ old('pek_lain_lain', $data->pek_lain_lain ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
            </div>

            {{-- 5. Agama --}}
            <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 pb-2 border-b">
                5. Agama
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div><label for="agama_islam" class="block text-sm font-medium text-gray-700">Islam</label><input id="agama_islam" type="number" name="agama_islam" value="{{ old('agama_islam', $data->agama_islam ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="agama_protestan" class="block text-sm font-medium text-gray-700">Protestan</label><input id="agama_protestan" type="number" name="agama_protestan" value="{{ old('agama_protestan', $data->agama_protestan ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="agama_katolik" class="block text-sm font-medium text-gray-700">Katolik</label><input id="agama_katolik" type="number" name="agama_katolik" value="{{ old('agama_katolik', $data->agama_katolik ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="agama_hindu" class="block text-sm font-medium text-gray-700">Hindu</label><input id="agama_hindu" type="number" name="agama_hindu" value="{{ old('agama_hindu', $data->agama_hindu ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
                <div><label for="agama_budha" class="block text-sm font-medium text-gray-700">Budha</label><input id="agama_budha" type="number" name="agama_budha" value="{{ old('agama_budha', $data->agama_budha ?? 0) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></div>
            </div>

            {{-- Tombol Aksi (Tailwind) --}}
            <div class="flex justify-end mt-8 pt-6 border-t border-gray-200">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection