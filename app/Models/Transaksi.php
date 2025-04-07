<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory;

    protected $table = 'transaksi_212396';
    protected $primaryKey = 'id_transaksi_212396';

    protected $fillable = [
        'id_paket_212396',
        'id_user_212396',
        'status_212396',
        'kode_212396',
        'kode_midtrans_212396',
        'jumlah_orang_212396',
        'total_harga_212396'
    ];
}
