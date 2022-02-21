<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogArtikel extends Model
{
    use HasFactory;
    protected $table = 'blog_artikels';
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'judul_artikel', 'content', 'deskripsi', 'gambar', 'penulis'
    ];
}