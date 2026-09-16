@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
<div class="px-md-2" style="max-width: 900px;">
    
    <!-- Judul Halaman -->
    <h2 class="fw-bold text-dark mb-4" style="font-size: 2.2rem;">Edit Galeri</h2>

    <!-- Alert Error Validasi -->
    @if ($errors->any())
        <div class="alert alert-danger rounded-3 mb-4">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit Galeri -->
    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- 1. Judul Galeri -->
        <div class="mb-4">
            <label for="judul" class="form-label fw-semibold text-dark mb-2">Judul</label>
            <input type="text" 
                   class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50" 
                   style="background-color: #EEF3F8;"
                   id="judul" 
                   name="judul" 
                   value="{{ old('judul', $galeri->judul) }}" 
                   placeholder="Masukkan Judul" required>
        </div>

        <!-- 2. Tanggal -->
        <div class="mb-4">
            <label for="tanggal" class="form-label fw-semibold text-dark mb-2">Tanggal</label>
            <input type="date" 
                   class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50" 
                   style="background-color: #EEF3F8;"
                   id="tanggal" 
                   name="tanggal" 
                   value="{{ old('tanggal', $galeri->tanggal ?? \Carbon\Carbon::parse($galeri->created_at)->format('Y-m-d')) }}" required>
        </div>

        <!-- 3. Upload Gambar (Opsional saat Edit) -->
        <div class="mb-5">
            <label for="gambar" class="form-label fw-semibold text-dark mb-2">Upload Gambar Baru (Opsional)</label>
            <input type="file" 
                   class="form-control rounded-3 py-2 px-3 border-secondary border-opacity-50" 
                   style="background-color: #EEF3F8;"
                   id="gambar" 
                   name="gambar" accept="image/*">
            
            <!-- Preview Gambar Lama -->
            @if($galeri->gambar)
                <div class="mt-3">
                    <small class="text-secondary d-block mb-1">Gambar saat ini:</small>
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="Preview" class="rounded shadow-sm" style="height: 100px; object-fit: cover;">
                </div>
            @endif
        </div>

        <!-- Tombol Simpan & Batal -->
        <div class="d-flex gap-3 mt-4">
            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" style="background-color: #0d77e2; border: none;">
                Simpan
            </button>
            <a href="{{ route('admin.galeri.galeri') }}" class="btn btn-danger rounded-pill px-4 py-2 fw-semibold">
                Batal
            </a>
        </div>

    </form>

</div>
@endsection