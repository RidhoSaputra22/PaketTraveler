<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriFactory> */
    use HasFactory;

    protected $table = 'kategori_212396';
    protected $primaryKey = 'id_kategori_212396';

    protected $fillable = [
        'kategori_212396'
    ];
}
