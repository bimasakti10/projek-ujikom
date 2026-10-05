<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function index()
    {
        return view('admin.akun.akun');
    }

    // Tambahkan method ini untuk nampilin halaman form
    public function editPassword()
    {
        return view('admin.akun.edit');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8|confirmed', 
        ]);

        if (!Hash::check($request->password_lama, Auth::user()->password)) {
            return back()->withErrors(['password_lama' => 'Kata sandi lama tidak sesuai']);
        }

        Auth::user()->update([
            'password' => Hash::make($request->password_baru)
        ]);

        // Ubah redirect-nya ke halaman index akun
        return redirect()->route('admin.akun.akun')->with('success', 'Kata sandi berhasil diperbarui!');
    }
}