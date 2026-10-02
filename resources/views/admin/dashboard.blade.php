@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="px-md-2">
    <!-- Judul Dashboard -->
    <h2 class="fw-bold text-dark mb-5" style="font-size: 2.2rem;">Dashboard Admin</h2>

    <!-- Container Card Grid (3 Kolom Per Baris, Hapus max-width biar full nyesuaiin layar) -->
    <div class="row g-4">
        
        <!-- 1. Total Berita (Baris 1, Kolom 1) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-folder-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Total Berita</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalBerita }}</h2>
            </div>
        </div>

        <!-- 2. Kegiatan (Baris 1, Kolom 2) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-calendar-event-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Kegiatan</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalKegiatan }}</h2>
            </div>
        </div>

        <!-- 3. Prestasi (Baris 1, Kolom 3) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-trophy-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Prestasi</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalPrestasi }}</h2>
            </div>
        </div>

        <!-- 4. Galeri (Baris 2, Kolom 2 - Tepat di bawah Kegiatan) -->
        <!-- offset-md-4 akan otomatis menempatkan card ini di tengah (kolom kedua) -->
        <div class="col-12 col-md-4 offset-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-image-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Galeri</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalGaleri }}</h2>
            </div>
        </div>

    </div>
</div>
@endsection