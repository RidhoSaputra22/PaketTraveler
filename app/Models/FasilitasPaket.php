<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasPaket extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasPaketFactory> */
    use HasFactory;

    protected $table = 'fasilitas_paket_212396';
    protected $primaryKey = 'id_fasilitas_212396';

    protected $fillable = [
        'id_paket_212396',
        'fasilitas_212396'
    ];


}
