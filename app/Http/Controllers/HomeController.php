<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritaUtama = Berita::latest()->first();
        $beritaTerbaru = Berita::latest()->take(6)->get();
        $galeris = Galeri::latest()->get();
        $produks = Produk::latest()->take(3)->get();

        return view('home.index', compact('beritaUtama', 'beritaTerbaru', 'galeris', 'produks'));
    }

    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        return view('home.galeri', compact('galeri'));
    }
    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('home.berita', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('home.detail', compact('berita'));
    }

public function produk()
    {
        // Pastikan nama variabelnya pakai huruf 's' di akhir ($produks)
        $produks = Produk::latest()->get(); 
        
        // Terus pastikan di dalam compact juga tertulis 'produks'
        return view('home.produk', compact('produks'));
    }

    // Tambahan method untuk halaman Detail Produk
    public function detailProduk($id)
    {
        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($id); 
        return view('home.detailproduk', compact('produk'));
    }
}
