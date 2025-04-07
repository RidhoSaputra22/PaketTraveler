<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTravel extends Model
{
    /** @use HasFactory<\Database\Factories\PaketTravelFactory> */
    use HasFactory;


    protected $table = 'paket_travel_212396';
    protected $primaryKey = 'id_paket_212396';

    protected $fillable = [
        'id_kategori_212396',
        'nama_212396',
        'deskripsi_212396',
        'thumbnail_212396',
        'harga_212396',
        'durasi_212396',
        'tanggal_berangkat_212396',
        'tanggal_pulang_212396',
        'lokasi_212396'
    ];

}
