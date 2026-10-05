@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    <h2 class="fw-bold text-dark mb-4">Ubah Kata Sandi</h2>

    <!-- Tampilkan pesan error validasi di atas form -->
    @if($errors->any())
        <div class="alert alert-danger" style="max-width: 600px;">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.akun.password.update') }}" method="POST">
        @csrf

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Kata Sandi Lama</label>
            <input type="password" name="password_lama" class="form-control" placeholder="Masukkan kata sandi saat ini" required>
        </div>

        <div class="mb-3" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Kata Sandi Baru</label>
            <input type="password" name="password_baru" class="form-control" placeholder="Masukkan kata sandi baru (minimal 8 karakter)" required>
        </div>

        <div class="mb-4" style="max-width: 600px;">
            <label class="form-label fw-bold text-dark">Konfirmasi Kata Sandi Baru</label>
            <input type="password" name="password_baru_confirmation" class="form-control" placeholder="Ulangi kata sandi baru" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4 rounded-pill">Simpan</button>
            <a href="{{ route('admin.akun.akun') }}" class="btn btn-danger px-4 rounded-pill">Batal</a>
        </div>
    </form>
</div>
@endsection