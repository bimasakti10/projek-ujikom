<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukAdminController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        return view('admin.produk.produk', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'nomor_telpon' => 'required',
        ]);

        $gambarPath = $request->file('gambar')->store('produk', 'public');

        Produk::create([
            'judul' => $request->judul,
            'gambar' => $gambarPath,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'nomor_telpon' => $request->nomor_telpon,
        ]);

        return redirect()->route('admin.produk.produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'nomor_telpon' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($produk->gambar);
            $gambarPath = $request->file('gambar')->store('produk', 'public');
            $produk->gambar = $gambarPath;
        }

        $produk->judul = $request->judul;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->nomor_telpon = $request->nomor_telpon;
        $produk->save();

        return redirect()->route('admin.produk.produk')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::disk('public')->delete($produk->gambar);
        $produk->delete();

        return redirect()->route('admin.produk.produk')->with('success', 'Produk berhasil dihapus');
    }
}