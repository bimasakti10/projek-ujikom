@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
<div class="px-md-2" style="max-width: 900px;">

    <!-- Judul Halaman -->
    <h2 class="fw-bold text-dark mb-4" style="font-size: 2.2rem;">Tambah Berita</h2>

    <!-- TAMPILKAN POPUP JIKA ADA ERROR VALIDASI -->
    @if ($errors->any())
    <div class="alert alert-danger rounded-3 mb-4">
        <ul class="mb-0 ps-3">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Tambah Berita -->
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 1. Judul Berita -->
        <div class="mb-4">
            <label for="judul" class="form-label fw-semibold text-dark mb-2">Judul Berita</label>
            <input type="text" class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50"
                style="background-color: #EEF3F8;" id="judul" name="judul" value="{{ old('judul') }}"
                placeholder="Masukkan Judul" required>
        </div>

        <!-- 2. Kategori -->
        <div class="mb-4">
            <label for="kategori" class="form-label fw-semibold text-dark mb-2">Kategori</label>
            <select class="form-select rounded-3 py-2 px-3 border-secondary border-opacity-50"
                style="background-color: #EEF3F8;" id="kategori" name="kategori" required>
                <option value="" disabled {{ old('kategori') ? '' : 'selected' }}>-- Pilih Kategori --</option>
                <option value="kegiatan" {{ old('kategori') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                <option value="prestasi" {{ old('kategori') == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
            </select>
        </div>

        <!-- 3. Tanggal -->
        <div class="mb-4">
            <label for="tanggal" class="form-label fw-semibold text-dark mb-2">Tanggal</label>
            <input type="date" class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50"
                style="background-color: #EEF3F8;" id="tanggal" name="tanggal"
                value="{{ old('tanggal', date('Y-m-d')) }}" required>
        </div>

        <!-- 4. Upload Gambar -->
        <div class="mb-4">
            <label for="gambar" class="form-label fw-semibold text-dark mb-2">Upload Gambar</label>
            <input type="file" class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50"
                style="background-color: #EEF3F8;" id="gambar" name="gambar" accept="image/*" required>
        </div>

        <!-- 5. Deskripsi -->
        <div class="mb-5">
            <label for="deskripsi" class="form-label fw-semibold text-dark mb-2">Deskripsi</label>
            <textarea
                class="form-control rounded-3 p-3 border-secondary border-opacity-50 @error('deskripsi') is-invalid @enderror"
                style="background-color: #EEF3F8;" id="deskripsi" name="deskripsi" rows="5"
                placeholder="Masukkan Deskripsi" required>{{ old('deskripsi') }}</textarea>
        </div>

        <!-- Tombol Simpan & Batal -->
        <div class="d-flex gap-3 mt-4">
            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">
                Simpan
            </button>
            <a href="{{ route('admin.berita.berita') }}" class="btn btn-danger rounded-pill px-4 py-2 fw-semibold">
                Batal
            </a>
        </div>

    </form>

</div>
@endsection