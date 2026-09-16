<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaAdminController extends Controller
{
    // 1. TAMPILKAN DAFTAR BERITA
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.berita', compact('beritas')); 
    }

    // 2. FORM TAMBAH BERITA
    public function create()
    {
        return view('admin.berita.create'); 
    }

    // 3. SIMPAN BERITA BARU
    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'kategori'  => 'required',
            'tanggal'   => 'required|date',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'deskripsi' => 'required',
        ]);

        $gambarPath = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul'     => $request->judul,
            'kategori'  => $request->kategori,
            'tanggal'   => $request->tanggal,
            'gambar'    => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.berita.berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    // 4. FORM EDIT BERITA
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita')); 
    }

    // 5. UPDATE BERITA
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul'     => 'required|string|max:255',
            'kategori'  => 'required',
            'tanggal'   => 'required|date',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
            $berita->gambar = $gambarPath;
        }

        $berita->judul = $request->judul;
        $berita->kategori = $request->kategori;
        $berita->tanggal = $request->tanggal;
        $berita->deskripsi = $request->deskripsi;   
        $berita->save();

        return redirect()->route('admin.berita.berita')->with('success', 'Berita berhasil diperbarui!');
    }

    // 6. HAPUS BERITA
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('admin.berita.berita')->with('success', 'Berita berhasil dihapus!');
    }
}   