@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
<div class="px-md-2">

    <!-- 1. HEADER (Judul "Berita" & Tombol "Tambah +" Harus Paling Atas) -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold text-dark mb-0" style="font-size: 2.2rem;">Berita</h2>
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium">
            Tambah +
        </a>
    </div>

    <!-- Alert Notifikasi Sukses -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- 2. GRID KARTU BERITA (Baru Di Bawah Header) -->
    <div class="row g-4">
        @forelse ($beritas as $item)
        <div class="col-12 col-md-6 col-lg-4">
    <div class="card border-0 rounded-0 overflow-hidden shadow-sm">
        
        <!-- Area Gambar & Overlay Biru Figma -->
        <div class="position-relative" style="height: 340px;">
            <img src="{{ asset('storage/' . $item->gambar) }}" 
                 class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" 
                 alt="{{ $item->judul }}">
            
            <!-- Overlay Gradasi Biru Solid (Sesuai Figma) -->
            <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center text-white" 
                 style="background: linear-gradient(to top, rgba(13, 119, 226, 0.95) 0%, rgba(13, 119, 226, 0.7) 60%, transparent 100%); min-height: 120px; display: flex; flex-direction: column; justify-content: flex-end;">
                <small class="opacity-90 d-block mb-1 text-light fw-normal" style="font-size: 0.85rem;">{{ ucfirst($item->kategori) }}</small>
                <h6 class="fw-bold mb-0 text-white" style="font-size: 1rem; line-height: 1.3;">{{ $item->judul }}</h6>
            </div>
        </div>

        <!-- Tombol Action Edit & Hapus (Baris Putih) -->
        <div class="bg-white d-flex justify-content-around py-3 border-top">
            <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-primary text-decoration-none fw-semibold">
                Edit
            </a>
            
            <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus berita ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link text-danger text-decoration-none p-0 fw-semibold">
                    Hapus
                </button>
            </form>
        </div>

    </div>
</div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-secondary fs-5">Belum ada berita yang ditambahkan.</p>
        </div>
        @endforelse
    </div>

</div>
@endsection