@extends('layouts.app')

@section('title', $produk->judul . ' - SMKN 4 Bogor')

@section('content')
<div class="container py-5">
  
  <!-- Kotak Biru Detail Produk -->
  <div class="bg-primary text-white p-5 rounded-4 mx-auto shadow" style="max-width: 800px;">
    
    <h3 class="fw-bold mb-4 text-center">{{ $produk->judul }}</h3>
    
    <!-- Gambar Produk Dinamis -->
    <div class="bg-white p-4 mx-auto mb-4 rounded-3 d-flex justify-content-center align-items-center" style="max-width: 400px; height: 280px;">
      <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-fluid object-fit-contain h-100" alt="{{ $produk->judul }}">
    </div>

    <!-- Garis Pembatas -->
    <hr class="border-white opacity-50">

    <!-- Harga Dinamis -->
    <h3 class="fw-bold mb-3">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h3>

    <hr class="border-white opacity-50">

    <!-- Deskripsi Dinamis (nl2br biar spasi/enter dari admin tetap rapi) -->
    <div class="mb-4 lh-lg" style="text-align: justify;">
      {!! nl2br(e($produk->deskripsi)) !!}
    </div>
    
    <hr class="border-white opacity-50 mb-4">

    <!-- Info Kontak / Nomor Telepon Dinamis -->
    <div>
      <p class="mb-1 fw-bold">Ingin Membeli?, Hubungi Kami Sekarang</p>
      <p class="fs-5 mb-0 tracking-wide">{{ $produk->nomor_telpon }}</p>
    </div>
    
  </div>

  <!-- Tombol Kembali ke Beranda / Katalog -->
  <div class="text-center mt-4">
    <a href="{{ route('home') }}" class="text-secondary text-decoration-none fs-5 transition-back">
      &lsaquo; kembali beranda
    </a>
  </div>

</div>

<!-- CSS Tambahan -->
<style>
    .transition-back {
        transition: color 0.2s ease;
    }
    .transition-back:hover {
        color: #0d6efd !important;
    }
</style>
@endsection 