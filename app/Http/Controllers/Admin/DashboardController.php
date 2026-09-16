<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count();
        $totalKegiatan = Berita::where('Kategori', 'Kegiatan')->count();
        $totalPrestasi = Berita::where('Kategori', 'Prestasi')->count();
        $totalGaleri = Galeri::count();

        return view('admin.dashboard', compact('totalBerita', 'totalKegiatan', 'totalPrestasi', 'totalGaleri'));
    }
}
