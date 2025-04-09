<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'users_212396';
    protected $primaryKey = 'id_user_212396';

    protected $fillable = [
        'nama_212396',
        'email_212396',
        'alamat_212396',
        'password_212396',
        'hp_212396',
        'role_212396',
    ];

}
