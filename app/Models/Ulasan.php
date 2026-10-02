<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    // Definisikan nama tabelnya biar aman
    protected $table = 'ulasans';

    // Kolom yang boleh diisi
    protected $fillable = ['nama', 'email', 'pesan'];
}
