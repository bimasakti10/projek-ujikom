<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritaUtama = Berita::latest()->first();
        $beritaTerbaru = Berita::latest()->take(6)->get();
        $galeris = Galeri::latest()->get();

        return view('home.index', compact('beritaUtama', 'beritaTerbaru', 'galeris'));
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
}
