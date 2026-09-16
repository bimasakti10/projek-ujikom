@extends('layouts.admin')

@section('title', 'Kelola Galeri')

@section('content')
<div class="px-md-2">

    <!-- Header (Judul Galeri & Tombol Tambah +) -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold text-dark mb-0" style="font-size: 2.2rem;">Galeri</h2>
        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-medium" style="background-color: #0d77e2; border: none;">
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

    <!-- Grid Kartu Galeri (3 Kolom per Baris Sesuai Figma) -->
    <div class="row g-4 text-start">
        @forelse ($galeris as $item)
        <div class="col-12 col-md-6 col-lg-4">
            
            <!-- Card Wrapper -->
            <div class="card border-0 rounded-0 overflow-hidden shadow-sm">
                
                <!-- Area Foto & Overlay Gradasi Biru -->
                <div class="position-relative" style="height: 320px;">
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" 
                         alt="{{ $item->judul }}">
                    
                    <!-- Overlay Gradasi Biru Solid Figma (Tanggal + Judul) -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center text-white" 
                         style="background: linear-gradient(to top, rgba(13, 119, 226, 0.95) 0%, rgba(13, 119, 226, 0.6) 60%, transparent 100%); min-height: 100px; display: flex; flex-direction: column; justify-content: flex-end;">
                        <small class="opacity-75 text-light d-block mb-1" style="font-size: 0.8rem;">
                            {{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d/m/Y') }}
                        </small>
                        <h6 class="fw-bold mb-0 text-white" style="font-size: 1rem; line-height: 1.3;">
                            {{ $item->judul }}
                        </h6>
                    </div>
                </div>

                <!-- Action Edit & Hapus (Baris Putih Bawah) -->
                <div class="bg-white d-flex justify-content-around py-3 border-top">
                    <a href="{{ route('admin.galeri.edit', $item->id) }}" class="text-primary text-decoration-none fw-semibold">
                        Edit
                    </a>
                    
                    <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto galeri ini?')">
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
            <p class="text-secondary fs-5">Belum ada foto galeri yang ditambahkan.</p>
        </div>
        @endforelse
    </div>

</div>
@endsection