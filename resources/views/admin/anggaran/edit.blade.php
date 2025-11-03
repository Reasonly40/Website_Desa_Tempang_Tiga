@extends('layouts.admin')
@section('title', 'Edit Realisasi Anggaran')
@section('content')
    <h2>Edit Realisasi Anggaran Tahun: {{ $anggaran->tahun }}</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.anggaran.update', $anggaran) }}" method="POST">
        @csrf
        @method('PUT')
        
        {{-- Grup Tahun --}}
        <div class="form-group">
            <label for="tahun">Tahun Realisasi</label>
            <input type="number" id="tahun" name="tahun" value="{{ old('tahun', $anggaran->tahun) }}" placeholder="Contoh: 2025" required>
            @error('tahun') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <hr>
        <h3 style="margin-top: 20px;">Input Data Pendapatan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="dana_desa">Dana Desa</label>
            <input type="number" id="dana_desa" name="dana_desa" value="{{ old('dana_desa', $anggaran->dana_desa) }}" required>
            @error('dana_desa') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <div class="form-group">
            <label for="bagi_hasil">Bagi Hasil Pajak & Retribusi</label>
            <input type="number" id="bagi_hasil" name="bagi_hasil" value="{{ old('bagi_hasil', $anggaran->bagi_hasil) }}" required>
            @error('bagi_hasil') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <div class="form-group">
            <label for="alokasi_dana_desa">Alokasi Dana Desa</label>
            <input type="number" id="alokasi_dana_desa" name="alokasi_dana_desa" value="{{ old('alokasi_dana_desa', $anggaran->alokasi_dana_desa) }}" required>
            @error('alokasi_dana_desa') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <hr>
        <h3 style="margin-top: 20px;">Input Data Pembelanjaan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="penyelenggaraan_pemerintahan">Penyelenggaraan Pemerintahan Desa</label>
            <input type="number" id="penyelenggaraan_pemerintahan" name="penyelenggaraan_pemerintahan" value="{{ old('penyelenggaraan_pemerintahan', $anggaran->penyelenggaraan_pemerintahan) }}" required>
            @error('penyelenggaraan_pemerintahan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pelaksanaan_pembangunan">Pelaksanaan Pembangunan Desa</label>
            <input type="number" id="pelaksanaan_pembangunan" name="pelaksanaan_pembangunan" value="{{ old('pelaksanaan_pembangunan', $anggaran->pelaksanaan_pembangunan) }}" required>
            @error('pelaksanaan_pembangunan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pembinaan_kemasyarakatan">Pembinaan Kemasyarakatan</label>
            <input type="number" id="pembinaan_kemasyarakatan" name="pembinaan_kemasyarakatan" value="{{ old('pembinaan_kemasyarakatan', $anggaran->pembinaan_kemasyarakatan) }}" required>
            @error('pembinaan_kemasyarakatan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="pemberdayaan_masyarakat">Pemberdayaan Masyarakat</label>
            <input type="number" id="pemberdayaan_masyarakat" name="pemberdayaan_masyarakat" value="{{ old('pemberdayaan_masyarakat', $anggaran->pemberdayaan_masyarakat) }}" required>
            @error('pemberdayaan_masyarakat') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="penanggulangan_bencana">Penanggulangan Bencana & Mendesak</label>
            <input type="number" id="penanggulangan_bencana" name="penanggulangan_bencana" value="{{ old('penanggulangan_bencana', $anggaran->penanggulangan_bencana) }}" required>
            @error('penanggulangan_bencana') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <hr>
        <h3 style="margin-top: 20px;">Input Data Pembiayaan (Realisasi)</h3>
        
        <div class="form-group">
            <label for="pembiayaan">Pembiayaan</label>
            <input type="number" id="pembiayaan" name="pembiayaan" value="{{ old('pembiayaan', $anggaran->pembiayaan) }}" required>
            @error('pembiayaan') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Update Realisasi</button>
    </form>
@endsection
