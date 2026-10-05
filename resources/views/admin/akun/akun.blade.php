@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    <h3 class="fw-bold text-dark mb-4">Akun</h3>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" style="max-width: 600px;" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border border-primary border-2 rounded-4 shadow-sm" style="max-width: 600px;">
        <div class="card-body p-4 d-flex align-items-center">
            
            <div class="text-center text-primary pe-4 border-end border-2" style="width: 150px;">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo SMKN 4 Bogor" height="35">
                <p class="fw-bold mb-0 fs-5">Admin R4</p>
            </div>

            <div class="ms-4 w-100 d-flex flex-column gap-3">
                <!-- Tombol diarahkan ke halaman form edit -->
                <a href="{{ route('admin.akun.password.edit') }}" class="btn border border-primary text-primary fw-medium text-start px-3 py-2 bg-white text-decoration-none">
                    Ubah Kata Sandi
                </a>
                
                <form action="{{ route('logout') }}" method="POST" class="w-100 m-0">
                    @csrf
                    <button type="submit" class="btn btn-danger fw-medium text-start px-3 py-2 w-100">
                        Keluar
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection