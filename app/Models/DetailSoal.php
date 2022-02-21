<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSoal extends Model
{
    use HasFactory;

    protected $table = 'soal';
    // protected $primaryKey = 'id';
    protected $fillable = [
        'id_kategori', 'soal', 'opsi_a', 'opsi_b', 'opsi_c', 'opsi_d', 'opsi_e'
    ];
}
