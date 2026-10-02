<div class="d-flex flex-column flex-shrink-0 p-4 text-white sticky-top vh-100" 
     style="width: 280px; background-color: #0d77e2; z-index: 1000;">
    
    <!-- Logo / Judul Admin -->
    <h3 class="fw-bold text-white mb-5">Admin<br>Smkn 4 Bogor</h3>

    <!-- Menu Navigation -->
    <ul class="nav nav-pills flex-column mb-auto gap-2">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-white bg-opacity-25 text-primary fw-bold' : '' }} rounded-3 px-3 py-2">
                Dasbor
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.berita.berita') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.berita.*') ? 'active bg-white bg-opacity-25 text-primary fw-bold' : '' }} rounded-3 px-3 py-2">
                Berita
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.galeri.galeri') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.galeri.*') ? 'active bg-white bg-opacity-25 text-primary fw-bold' : '' }} rounded-3 px-3 py-2">
                Galeri
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.ulasan.index') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.ulasan.*') ? 'active bg-white bg-opacity-25 text-primary fw-bold' : '' }} rounded-3 px-3 py-2">
                Ulasan
            </a>
        </li>
    </ul>

    <!-- Tombol Logout -->
    <div class="mt-auto">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-100 rounded-3 py-2 fw-semibold">
                Keluar
            </button>
        </form>
    </div>
</div>