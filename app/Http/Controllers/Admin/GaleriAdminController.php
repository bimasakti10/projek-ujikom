<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.galeri', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);

        $gambarPath = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('admin.galeri.galeri')->with('success', 'Galeri Berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('galeri', 'public');
            $galeri->gambar = $gambarPath;
        }

        $galeri->judul = $request->judul;
        $galeri->tanggal = $request->tanggal;
        $galeri->save();

        return redirect()->route('admin.galeri.galeri')->with('Success', 'Galeri telah diPerbarui!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('admin.galeri.galeri')->with('Success', 'Galeri telah diHapus!');
    }
}
