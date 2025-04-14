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
        'tanggal_berangkat_212396',
        'tanggal_pulang_212396',
        'lokasi_212396',
        'rating_212396',
        'durasi_212396'
    ];

    public function getId(){
        return $this->id_paket_212396;
    }

    public function getDurasi(){
        return $this->durasi_212396;
    }

    public function getNama(){
        return $this->nama_212396;
    }

    public function getHarga(){
        return $this->harga_212396;
    }

    public function getThumbnail(){
        return $this->thumbnail_212396;
    }

    public function getLokasi(){
        return $this->lokasi_212396;
    }

    public function getTanggalBerangkat(){
        return $this->tanggal_berangkat_212396;
    }

    public function getTanggalPulang(){
        return $this->tanggal_pulang_212396;
    }

    public function getDeskripsi(){
        return $this->deskripsi_212396;
    }

    public function getRating(){
        return $this->rating_212396;
    }



    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori_212396');
    }

    public function fasilitas(){
        return $this->hasMany(FasilitasPaket::class, 'id_paket_212396');
    }

    public function galleri(){
        return $this->hasMany(Galleri::class, 'id_paket_212396');
    }
}
