@extends('layouts.app')

@section('title', ' Berita - SMKN 4 Bogor')

@section('content')
<section class="container py-5 text-center">
    
    <!-- Header Section -->
    <h2 class="fw-bold text-dark mb-2">Berita Sekolah</h2>
    <p class="text-secondary mb-4 mx-auto" style="max-width: 600px;">
        Dokumentasi lengkap kegiatan, prestasi, dan aktivitas SMKN 4 Bogor.
    </p>

    <!-- Tombol Filter JS -->
    <div class="d-flex justify-content-center gap-2 mb-5">
        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold filter-btn active" data-filter="all" style="background-color: #0d77e2; border: none;">
            Semua
        </button>
        <button type="button" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold filter-btn" data-filter="kegiatan">
            Kegiatan
        </button>
        <button type="button" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold filter-btn" data-filter="prestasi">
            Prestasi
        </button>
    </div>

    <!-- Grid Kartu Galeri -->
    <div class="row g-3 text-start" id="galeri-container">
        @forelse($berita as $item)
        <!-- Atribut data-category menggunakan strtolower biar tidak bug huruf kapital -->
        <div class="col-12 col-md-6 col-lg-4 galeri-item" data-category="{{ strtolower($item->kategori) }}">
            <a href="{{ route('berita.detail', $item->id) }}" class="text-decoration-none">
                <div class="position-relative overflow-hidden rounded-3 shadow-sm" style="height: 260px;">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="w-100 h-100 object-fit-cover position-absolute" alt="{{ $item->judul }}">
                    <div class="position-absolute bottom-0 w-100 p-3 text-white text-center" style="background: linear-gradient(to top, rgba(13,119,226,0.95), transparent);">
                        <small class="d-block opacity-75 mb-1">{{ ucfirst($item->kategori) }}</small>
                        <h6 class="fw-bold mb-0 text-white text-truncate">{{ $item->judul }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-secondary fs-5">Belum ada foto berita.</p>
        </div>
        @endforelse
    </div>

</section>

<!-- Script Filter JS Simpel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galeriItems = document.querySelectorAll('.galeri-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Highlighting tombol aktif
            filterButtons.forEach(btn => {
                btn.classList.remove('btn-primary', 'active');
                btn.classList.add('btn-outline-primary');
                btn.style.backgroundColor = '';
                btn.style.border = '';
            });

            this.classList.remove('btn-outline-primary');
            this.classList.add('btn-primary', 'active');
            this.style.backgroundColor = '#0d77e2';
            this.style.border = 'none';

            const filterValue = this.getAttribute('data-filter');

            // Logika Penyaringan Kartu
            galeriItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection