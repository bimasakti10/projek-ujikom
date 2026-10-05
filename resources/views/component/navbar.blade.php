<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo SMKN 4 Bogor" height="35">

            @if(request()->routeIs('berita') || request()->routeIs('berita.detail'))
            <span class="text-secondary small ms-2">
                @if(request()->routeIs('berita'))
                <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Beranda</a>
                <span class="mx-1">&gt;</span>
                <span class="text-primary fw-medium">Berita</span>
                @else
                <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Beranda</a>
                <span class="mx-1">&gt;</span>
                <a href="{{ route('berita') }}" class="text-decoration-none text-dark">Berita</a>
                <span class="mx-1">&gt;</span>
                <span class="text-primary fw-medium">Detail</span>
                @endif
            </span>
            @endif
        </a>

            @if(request()->routeIs('galeri'))
            <span class="text-secondary small ms-2">
                @if(request()->routeIs('galeri'))
                <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Beranda</a>
                <span class="mx-1">&gt;</span>
                <span class="text-primary fw-medium">Galeri</span>
                @else
                <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Beranda</a>
                <span class="mx-1">&gt;</span>
                <a href="{{ route('galeri') }}" class="text-decoration-none text-dark">Berita</a>
                <span class="mx-1">&gt;</span>
                <span class="text-primary fw-medium">Detail</span>
                @endif
            </span>
            @endif
        </a>

        @if(request()->routeIs('home'))
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center gap-lg-3 my-2 my-lg-0" id="navbar-example2">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#tentang">Tentang Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#kontak">Kontak</a>
                </li>
            </ul>

            <div class="d-flex justify-content-center">
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 fw-medium">Login</a>
            </div>
        </div>
        @else
        <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 fw-medium">Login</a>
        </div>
        @endif

    </div>
</nav>