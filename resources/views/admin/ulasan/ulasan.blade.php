@extends('layouts.admin')

@section('title', 'Kelola Ulasan/Tanggapan')

@section('content')
<div class="px-md-2">
    <!-- Judul -->
    <h3 class="fw-bold text-dark mb-4">Tanggapan</h3>

    <!-- Alert Notifikasi Sukses Hapus -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Container Tabel biar melengkung -->
    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                
                <!-- Header Tabel Biru -->
                <thead style="background-color: #0d77e2;">
                    <tr>
                        <th scope="col" class="text-black fw-semibold py-3 px-4 border-0 text-uppercase" style="font-size: 0.85rem;">Nama Lengkap</th>
                        <th scope="col" class="text-black fw-semibold py-3 px-4 border-0 text-uppercase" style="font-size: 0.85rem;">Email</th>
                        <th scope="col" class="text-black fw-semibold py-3 px-4 border-0 text-uppercase" style="font-size: 0.85rem;">Isi Tanggapan</th>
                        <th scope="col" class="text-black fw-semibold py-3 px-4 border-0 text-center text-uppercase" style="font-size: 0.85rem; width: 100px;">Aksi</th>
                    </tr>
                </thead>

                <!-- Isi Data -->
                <tbody class="border-top-0">
                    
                    <!-- Loop Data Ulasan dari Database -->
                    @forelse ($ulasans as $ulasan)
                    <tr>
                        <td class="px-4 py-3 border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <!-- Avatar dinamis pakai nama pengirim -->
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($ulasan->nama) }}&background=f0f2f5&color=333" 
                                     alt="Avatar" class="rounded-circle" width="40" height="40">
                                <span class="fw-semibold text-dark">{{ $ulasan->nama }}</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 border-bottom text-muted">{{ $ulasan->email }}</td>
                        <td class="px-4 py-3 border-bottom text-muted" style="max-width: 300px;">
                            <!-- title attr buat nampilin teks full pas dihover -->
                            <span class="d-inline-block text-truncate" style="max-width: 100%;" title="{{ $ulasan->pesan }}">
                                "{{ $ulasan->pesan }}"
                            </span>
                        </td>
                        <td class="px-4 py-3 border-bottom text-center">
                            <!-- Form Delete Terhubung ke Database -->
                            <form action="{{ route('admin.ulasan.destroy', $ulasan->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus tanggapan dari {{ $ulasan->nama }}?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger text-decoration-none d-flex align-items-center gap-1 justify-content-center p-0 m-auto" style="font-size: 0.9rem;">
                                    <i class="bi bi-trash3"></i> <span class="fw-semibold">Hapus</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                    <!-- Tampilan kalau database masih kosong -->
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-2 d-block mb-2 text-secondary"></i>
                            Belum ada tanggapan yang masuk.
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection