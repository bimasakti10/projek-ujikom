<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // 1. [FRONTEND] - Simpan data dari form "Kontak & Lokasi"
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Ulasan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Tanggapan berhasil dikirim!');
    }

    // 2. [ADMIN] - Tampilkan data di tabel Ulasan (Read)
    public function index()
    {
        $ulasans = Ulasan::latest()->get(); 
        return view('admin.ulasan.ulasan', compact('ulasans'));
    }

    // 3. [ADMIN] - Hapus data Ulasan (Delete)
    public function destroy($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->delete();

        return back()->with('success', 'Tanggapan berhasil dihapus!');
    }
}