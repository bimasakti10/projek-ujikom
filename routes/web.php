<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaAdminController;
use App\Http\Controllers\Admin\GaleriAdminController;
use App\Http\Controllers\Admin\UlasanController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/berita/{id}', [HomeController::class, 'detail'])->name('berita.detail');

Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');

Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/berita', [BeritaAdminController::class, 'index'])->name('berita.berita');
    Route::get('/berita/create', [BeritaAdminController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaAdminController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaAdminController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaAdminController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaAdminController::class, 'destroy'])->name('berita.destroy');

    Route::get('/galeri', [GaleriAdminController::class, 'index'])->name('galeri.galeri');
    Route::get('/galeri/create', [GaleriAdminController::class, 'create'])->name('galeri.create');
    Route::post('/galeri', [GaleriAdminController::class, 'store'])->name('galeri.store');
    Route::get('/galeri/{id}/edit', [GaleriAdminController::class, 'edit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GaleriAdminController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GaleriAdminController::class, 'destroy'])->name('galeri.destroy');
});
 
Route::post('/tanggapan/kirim', [UlasanController::class, 'store'])->name('ulasan.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
    Route::delete('/ulasan/{id}', [UlasanController::class, 'destroy'])->name('ulasan.destroy');
});