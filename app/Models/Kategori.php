<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    // Sesuaikan field yang ada di tabel
    protected $fillable = ['nama', 'deskripsi'];

    // Relasi ke buku (1 kategori memiliki banyak buku)
    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_kategori', 'id');
    }
}
