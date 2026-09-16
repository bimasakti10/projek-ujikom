@extends('layouts.app')

@section('title', 'Website Resmi SMKN Buman Bogor')

@section('content')

<!-- B. HERO SECTION -->
<section id="beranda"
    class="hero-section position-relative d-flex align-items-center justify-content-center text-center text-white">
    <!-- Overlay Gelap -->
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Konten Teks -->
    <div class="hero-content container position-relative z-2">
        <p class="hero-subtitle fs-5 fw-light mb-2">Selamat Datang di Website Resmi</p>
        <h1 class="hero-title display-4 fw-bold mb-3">SMKN Buman Bogor</h1>
        <p class="hero-description mx-auto mb-4 opacity-90" style="max-width: 650px;">
            Mengenal lebih dekat SMKN Buman Bogor melalui informasi sekolah, jurusan, kegiatan, prestasi, dan berbagai
            berita terbaru.
        </p>
        <a href="#tentang" class="btn btn-primary rounded-pill px-4 py-2 fw-medium">Selengkapnya</a>
    </div>
</section>

<!-- C. STATISTIK SEKOLAH -->
<section class="stat-section bg-primary text-white py-4">
    <div class="container">
        <div class="row text-center g-4 align-items-center justify-content-center">

            <!-- Item 1: Siswa -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="person" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">1200+</h3>
                        <p class="mb-0 small opacity-75">Siswa</p>
                    </div>
                </div>
            </div>

            <!-- Item 2: Jurusan -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="cog" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">4</h3>
                        <p class="mb-0 small opacity-75">Jurusan</p>
                    </div>
                </div>
            </div>

            <!-- Item 3: Prestasi -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="trophy" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">140+</h3>
                        <p class="mb-0 small opacity-75">Prestasi</p>
                    </div>
                </div>
            </div>

            <!-- Item 4: Guru -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="school" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">70+</h3>
                        <p class="mb-0 small opacity-75">Guru</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- D. TENTANG SEKOLAH -->
<section id="tentang" class="about-section container py-5">
    <h2 class="section-title text-center mb-4 fw-bold h2">Tentang Sekolah</h2>

    <div class="row align-items-center g-4">
        <!-- Kolom Teks (Kiri) -->
        <div class="col-12 col-md-6">
            <div class="about-text">
                <p class="text-secondary lh-lg mb-3 text-dark">
                    SMKN Buman Bogor merupakan sekolah menengah kejuruan berkomitmen, mencetak lulusan yang kompeten,
                    berkarakter, dan siap menghadapi tantangan dunia kerja maupun pendidikan ke jenjang yang lebih
                    tinggi. Dengan lingkungan belajar yang nyaman, fasilitas yang memadai, serta tenaga pendidik yang
                    profesional, sekolah menghadirkan proses pembelajaran berkualitas dan berorientasi pada perkembangan
                    teknologi.
                </p>
                <p class="text-secondary lh-lg mb-0 text-dark">
                    Melalui empat program keahlian unggulan, yaitu PPLG, TJKT, TO, dan TPFL, SMKN Buman Bogor terus
                    berupaya mengembangkan potensi peserta didik sesuai dengan minat dan bakatnya. Berbagai kegiatan
                    akademik maupun nonakademik juga diselenggarakan membentuk generasi yang kreatif, disiplin, mandiri,
                    dan siap bersaingan di dunia usaha maupun dunia industri.
                </p>
            </div>
        </div>

        <!-- Kolom Gambar (Kanan) -->
        <div class="col-12 col-md-6">
            <div class="about-image text-center">
                <img src="{{ asset('assets/images/sekolah.jpg') }}" class="img-fluid rounded-4 shadow"
                    alt="Gedung SMKN Buman Bogor">
            </div>
        </div>
    </div>
</section>

<!-- E. JURUSAN / KOMPETENSI KEAHLIAN -->
<section id="jurusan" class="jurusan-section py-5" style="background-color: #EEF3F8">
    <div class="container">
        <h2 class="section-title text-center mb-5 fw-bold h2">Jurusan</h2>

        <div class="row g-4">

            <!-- Jurusan 1: PPLG -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <img src="{{ asset('assets/jurusan/pplg.png')}}" alt="LOGO TPFL"
                                class="img-fluid style-logo" style="max-height: 140px;">
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Pemrograman Perangkat Lunak dan Gim</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalPPLG">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jurusan 2: TJKT -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <img src="{{ asset('assets/jurusan/tjkt.png')}}" alt="LOGO TPFL"
                                class="img-fluid style-logo" style="max-height: 140px;">
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Teknik Jaringan Komputer dan Teknologi</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTJKT">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jurusan 3: TO -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <img src="{{ asset('assets/jurusan/to.png')}}" alt="LOGO TPFL" class="img-fluid style-logo"
                                style="max-height: 140px;">
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Teknik Otomotif</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTO">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jurusan 4: TPFL -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <img src="{{ asset('assets/jurusan/tpfl.png')}}" alt="LOGO TPFL"
                                class="img-fluid style-logo" style="max-height: 140px;">
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Teknik Pengelasan dan Fabrikasi Logam</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTPFL">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- F. BERITA SEKOLAH -->
<section id="berita" class="berita-section container py-5 text-center">
    <!-- Header Section -->
    <h2 class="fw-bold text-dark mb-2">Berita Sekolah</h2>
    <p class="text-secondary mb-4 mx-auto" style="max-width: 600px;">
        Dokumentasi kegiatan, prestasi, fasilitas, dan berbagai aktivitas siswa di SMKN Buman Bogor.
    </p>

    @if($beritaTerbaru->count() > 0)
        <!-- Grid 2 Kolom (Kiri Headline, Kanan Grid Kecil) -->
        <div class="row g-3 text-start mb-5">
            
            <!-- Headline Utama (Kiri) -->
            @if($beritaUtama)
            <div class="col-12 col-lg-6">
                <a href="{{ route('berita.detail', $beritaUtama->id) }}" class="text-decoration-none">
                    <div class="position-relative overflow-hidden rounded-3 h-100" style="min-height: 360px;">
                        <img src="{{ asset('storage/' . $beritaUtama->gambar) }}" class="w-100 h-100 object-fit-cover position-absolute" alt="{{ $beritaUtama->judul }}">
                        <div class="position-absolute bottom-0 w-100 p-3 text-white text-center" style="background: linear-gradient(to top, rgba(13,119,226,0.95), transparent);">
                            <small class="d-block opacity-75 mb-1">{{ ucfirst($beritaUtama->kategori) }}</small>
                            <h5 class="fw-bold mb-0 text-white">{{ $beritaUtama->judul }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            <!-- Grid 6 Card Kecil (Kanan) -->
            <div class="col-12 col-lg-6">
                <div class="row g-2">
                    @foreach($beritaTerbaru as $item)
                    <div class="col-4">
                        <a href="{{ route('berita.detail', $item->id) }}" class="text-decoration-none">
                            <div class="position-relative overflow-hidden rounded-3" style="height: 175px;">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="w-100 h-100 object-fit-cover position-absolute" alt="{{ $item->judul }}">
                                <div class="position-absolute bottom-0 w-100 p-2 text-white text-center" style="background: linear-gradient(to top, rgba(13,119,226,0.95), transparent);">
                                    <h6 class="fw-bold mb-0 text-white text-truncate small">{{ $item->judul }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    @else
        <p class="text-secondary py-4">Belum ada berita yang ditambahkan.</p>
    @endif

    <!-- Tombol Lihat Semua Foto -->
    <a href="{{ route('berita') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" style="background-color: #0d77e2; border: none;">
        Lihat Semua Foto
    </a>
</section>

<!-- SECTION GALERI SEKOLAH -->
<section id="galeri" class="galeri-section py-5">
    <div class="container text-center">
        
        <!-- Judul & Subtitle Galeri -->
        <h2 class="fw-bold text-dark mb-2" style="font-size: 2rem;">Galeri Sekolah</h2>
        <p class="text-secondary mb-5 fs-6" style="max-width: 650px; margin: 0 auto;">
            Dokumentasi kegiatan, prestasi, fasilitas, dan berbagai aktivitas siswa di SMKN Buman Bogor.
        </p>

        <!-- Grid 6 Kartu Galeri (3 Kolom x 2 Baris) -->
        <div class="row g-4 text-start">
            @forelse($galeris->take(6) as $item)
            <div class="col-12 col-md-6 col-lg-4">
                
                <!-- Card Trigger Modal (Klik untuk buka Modal) -->
                <div class="card border-0 rounded-0 overflow-hidden shadow-sm position-relative" 
                     style="height: 280px; cursor: pointer;"
                     data-bs-toggle="modal" 
                     data-bs-target="#modalGaleriHome{{ $item->id }}">
                    
                    <!-- Foto Galeri -->
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" 
                         alt="{{ $item->judul ?? 'Galeri SMKN Buman' }}">
                    
                    <!-- Overlay Gradasi Biru Solid Figma -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center text-white" 
                         style="background: linear-gradient(to top, rgba(13, 119, 226, 0.95) 0%, rgba(13, 119, 226, 0.6) 60%, transparent 100%); min-height: 90px; display: flex; flex-direction: column; justify-content: flex-end;">
                        <h6 class="fw-bold mb-0 text-white" style="font-size: 0.95rem; line-height: 1.3;">
                            {{ $item->judul }}
                        </h6>
                        <small class="opacity-75 text-light" style="font-size: 0.75rem;">SMKN 4 Bogor</small>
                    </div>
                </div>

                <!-- Modal Pop-up Detail Foto -->
                <div class="modal fade" id="modalGaleriHome{{ $item->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="fw-bold text-dark px-2 pt-2 mb-0">{{ $item->judul }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-3 text-center">
                                <img src="{{ asset('storage/' . $item->gambar) }}" 
                                     class="img-fluid rounded-3 mb-3" 
                                     alt="{{ $item->judul }}" 
                                     style="max-height: 70vh; width: 100%; object-fit: contain;">
                                <small class="text-secondary d-block">
                                    Dokumentasi Tanggal: {{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d F Y') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-secondary fs-5">Belum ada foto galeri yang diunggah.</p>
            </div>
            @endforelse
        </div>

        <!-- Tombol "Lihat Semua Foto" -->
        <div class="text-center mt-5">
            <a href="{{ route('galeri') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm" style="background-color: #0d77e2; border: none;">
                Lihat Semua Foto
            </a>
        </div>

    </div>
</section>

<!-- G. KONTAK & LOKASI -->
<section id="kontak" class="kontak-section py-5" style="background-color: #EEF3F8;">
    <div class="container">
        <div class="bg-white rounded-5 p-4 p-md-5 shadow-sm border">
            <h3 class="fw-bold text-center mb-4">Kontak & Lokasi</h3>
            <div class="row align-items-center g-4">

                <!-- Info Kontak Kiri -->
                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 45px; height: 45px;">
                            <ion-icon name="location-sharp" class="fs-4"></ion-icon>
                        </div>
                        <span class="small text-secondary">Jalan Raya Tajur Kp. Muara RR02 RW04 Kel. Pakuan Kec. Bogor
                            Selatan Kota Bogor - Jawa Barat 16134</span>
                    </div>

                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 45px; height: 45px;">
                            <ion-icon name="call-sharp" class="fs-4"></ion-icon>
                        </div>
                        <span class="small text-secondary">(0251) 8242955</span>
                    </div>

                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 45px; height: 45px;">
                            <ion-icon name="mail-sharp" class="fs-4"></ion-icon>
                        </div>
                        <span class="small text-secondary">info@smkn4bogor.sch.id</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 45px; height: 45px;">
                            <ion-icon name="time-sharp" class="fs-4"></ion-icon>
                        </div>
                        <span class="small text-secondary">Senin - Jumat, 07.00 - 16.00</span>
                    </div>
                </div>

                <!-- Peta Lokasi Kanan -->
                <div class="col-12 col-md-6">
                    <div class="rounded-4 overflow-hidden border">
                        <iframe
                            src="https://maps.google.com/maps?q=SMKN%204%20Bogor&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- H. BEKERJASAMA DENGAN -->
<section class="py-5" style="background-color: #EEF3F8;">
    <div class="container text-center">
        <h4 class="fw-bold mb-4">BekerjaSama Dengan</h4>
        <div class="d-flex justify-content-center">
            <div class="bg-white p-3 rounded-4 shadow-sm border d-inline-block">
                <img src="{{ asset('assets/images/bonet.png') }}" alt="Bonet" class="img-fluid"
                    style="height: 100px; object-fit: contain;">
            </div>
        </div>
    </div>
</section>

@endsection