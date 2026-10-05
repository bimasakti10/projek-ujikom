@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    <h2 class="fw-bold text-dark mb-4">Tambah Produk</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Judul Produk</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Produk" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Harga (Rp)</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Contoh: 30000" value="{{ old('harga') }}" required>
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Deskripsi Produk</label>
            <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan deskripsi lengkap produk..." required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Nomor Telepon / WhatsApp</label>
            <input type="text" name="nomor_telpon" class="form-control @error('nomor_telpon') is-invalid @enderror" placeholder="Contoh: 081234567890" value="{{ old('nomor_telpon') }}" required>
            @error('nomor_telpon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Upload Gambar</label>
            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" required>
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4 rounded-pill">Simpan</button>
            <a href="{{ route('admin.produk.produk') }}" class="btn btn-danger px-4 rounded-pill">Batal</a>
        </div>
    </form>
</div>
@endsection