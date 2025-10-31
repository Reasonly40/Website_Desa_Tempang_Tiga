@extends('layouts.admin')
@section('title', 'Input Realisasi Anggaran')
@section('content')
    <h2>Input Realisasi Anggaran Baru</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.anggaran.store') }}" method="POST">
        @csrf
        
        {{-- Grup Tahun --}}
        <div class="form-group">
            <label for="tahun">Tahun Realisasi</label>
            <input type="number" id="tahun" name="tahun" value="{{ old('tahun', date('Y')) }}" placeholder="Contoh: 2025" required>
            @error('tahun') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <hr>
        <h3 style="margin-top: 20px;">Input Data Pendapatan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="dana_desa">Dana Desa</label>
            <input type="number" id="dana_desa" name="dana_desa" value="{{ old('dana_desa', 0) }}" required>
            @error('dana_desa') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <div class="form-group">
            <label for="bagi_hasil">Bagi Hasil Pajak & Retribusi</label>
            <input type="number" id="bagi_hasil" name="bagi_hasil" value="{{ old('bagi_hasil', 0) }}" required>
            @error('bagi_hasil') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <div class="form-group">
            <label for="alokasi_dana_desa">Alokasi Dana Desa</label>
            <input type="number" id="alokasi_dana_desa" name="alokasi_dana_desa" value="{{ old('alokasi_dana_desa', 0) }}" required>
            @error('alokasi_dana_desa') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <hr>
        <h3 style="margin-top: 20px;">Input Data Pembelanjaan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="penyelenggaraan_pemerintahan">Penyelenggaraan Pemerintahan Desa</label>
            <input type="number" id="penyelenggaraan_pemerintahan" name="penyelenggaraan_pemerintahan" value="{{ old('penyelenggaraan_pemerintahan', 0) }}" required>
            @error('penyelenggaraan_pemerintahan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pelaksanaan_pembangunan">Pelaksanaan Pembangunan Desa</label>
            <input type="number" id="pelaksanaan_pembangunan" name="pelaksanaan_pembangunan" value="{{ old('pelaksanaan_pembangunan', 0) }}" required>
            @error('pelaksanaan_pembangunan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pembinaan_kemasyarakatan">Pembinaan Kemasyarakatan</label>
            <input type="number" id="pembinaan_kemasyarakatan" name="pembinaan_kemasyarakatan" value="{{ old('pembinaan_kemasyarakatan', 0) }}" required>
            @error('pembinaan_kemasyarakatan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pemberdayaan_masyarakat">Pemberdayaan Masyarakat</label>
            <input type="number" id="pemberdayaan_masyarakat" name="pemberdayaan_masyarakat" value="{{ old('pemberdayaan_masyarakat', 0) }}" required>
            @error('pemberdayaan_masyarakat') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="penanggulangan_bencana">Penanggulangan Bencana & Mendesak</label>
            <input type="number" id="penanggulangan_bencana" name="penanggulangan_bencana" value="{{ old('penanggulangan_bencana', 0) }}" required>
            @error('penanggulangan_bencana') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <hr>
        <h3 style="margin-top: 20px;">Input Data Pembiayaan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="pembiayaan">Pembiayaan</label>
            <input type="number" id="pembiayaan" name="pembiayaan" value="{{ old('pembiayaan', 0) }}" required>
            @error('pembiayaan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn-submit">Simpan Realisasi</button>
    </form>
@endsection
