<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;
    protected $table = 'solusii';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'ringkas', 'solusi', 'sebab', 'gejala_a', 'gejala_b', 'gejala_c', 'gejala_d', 'gejala_e'
    ];
}
