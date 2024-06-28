<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'penulis', 'id_kategori', 'sinopsis', 'tahun_terbit', 'foto'];

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
