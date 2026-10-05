@extends('layouts.admin') <!-- Sesuaikan layout admin lu -->

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark mb-0">Kelola Produk Sekolah</h3>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary rounded-pill px-4">Tambah +</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">
        @forelse($produk as $item)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 position-relative">
                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top p-2 object-fit-contain" alt="{{ $item->judul }}" style="height: 200px;">
                <div class="card-body p-0 pt-3">
                    <h5 class="fw-bold mb-1">{{ $item->judul }}</h5>
                    <p class="text-muted small mb-2">{{ Str::limit($item->deskripsi, 40) }}</p>
                    <p class="text-muted small mb-2"><strong>Telp:</strong> {{ $item->nomor_telpon }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-bold text-primary">Rp{{ number_format($item->harga, 0, ',', '.') }}</span>
                        <div>
                            <a href="{{ route('admin.produk.edit', $item->id) }}" class="btn btn-sm btn-warning text-white rounded-pill px-3">Edit</a>
                            <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger rounded-pill px-3">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted fs-5">Belum ada produk yang ditambahkan.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection