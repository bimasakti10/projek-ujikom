@extends('layouts.app')

@section('title', 'Katalog Produk - SMKN 4 Bogor')

@section('content')
<div class="container py-5 mt-4">
    <!-- Bagian Judul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark" style="font-size: 2.2rem;">Katalog Produk Sekolah</h2>
        <p class="text-secondary fs-6" style="max-width: 650px; margin: 0 auto;">
            Koleksi lengkap karya inovatif, merchandise, dan produk unggulan hasil kreativitas siswa SMKN 4 Bogor.
        </p>
    </div>

    <!-- Grid Layout Katalog -->
    <div class="row g-4">
        @forelse($produks as $item)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3 transition-hover">
                
                <!-- Gambar Produk -->
                <img src="{{ asset('storage/' . $item->gambar) }}" 
                     class="card-img-top p-3 object-fit-contain" 
                     alt="{{ $item->judul }}" 
                     style="height: 250px;">
                
                <div class="card-body p-0 pt-3 d-flex flex-column">
                    <!-- Judul Produk -->
                    <h6 class="fw-bold mb-1" style="font-size: 1.1rem;">{{ $item->judul }}</h6>
                    
                    <!-- Deskripsi Singkat -->
                    <p class="text-muted small mb-3 flex-grow-1">
                        {{ Str::limit($item->deskripsi, 60) }}
                    </p>
                    
                    <!-- Harga & Link Beli -->
                    <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top">
                        <span class="fw-bold text-primary fs-5">
                            Rp{{ number_format($item->harga, 0, ',', '.') }}
                        </span>
                        <a href="{{ route('produk.detail', $item->id) }}" class="text-dark text-decoration-none small fw-medium transition-link">
                            Beli disini &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
        @empty
        <!-- Tampilan jika admin belum input produk sama sekali -->
        <div class="col-12 text-center py-5">
            <div class="p-5 bg-light rounded-4">
                <p class="text-muted fs-5 mb-0">Belum ada produk yang tersedia di katalog saat ini.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>

<!-- Tambahan sedikit CSS biar link Beli disini ada efek pas di hover -->
<style>
    .transition-link {
        transition: color 0.2s ease;
    }
    .transition-link:hover {
        color: #0d6efd !important; /* Warna biru primary Bootstrap */
    }
</style>
@endsection