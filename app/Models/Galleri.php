<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleri extends Model
{
    /** @use HasFactory<\Database\Factories\GalleriFactory> */
    use HasFactory;

    protected $table = 'galleri_212396';
    protected $primaryKey = 'id_galleri_212396';

    protected $fillable = [
        'id_paket_212396',
        'path_212396'
    ];

}
