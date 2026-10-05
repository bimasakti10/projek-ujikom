@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    <h2 class="fw-bold text-dark mb-4">Edit Produk</h2>

    <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Judul Produk</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $produk->judul) }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Harga (Rp)</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga', $produk->harga) }}" required>
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Deskripsi Produk</label>
            <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Nomor Telepon / WhatsApp</label>
            <input type="text" name="nomor_telpon" class="form-control @error('nomor_telpon') is-invalid @enderror" value="{{ old('nomor_telpon', $produk->nomor_telpon) }}" required>
            @error('nomor_telpon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Gambar Saat Ini</label>
            <div class="mb-2">
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->judul }}" class="img-thumbnail" style="height: 100px;">
            </div>
            <label class="form-label text-muted small">Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4 rounded-pill">Perbarui</button>
            <a href="{{ route('admin.produk.produk') }}" class="btn btn-danger px-4 rounded-pill">Batal</a>
        </div>
    </form>
</div>
@endsection