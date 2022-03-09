<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    //MODEL DIAMBIL DARI TABEL USERS
    protected $table = "users";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'kode_users',
        'nama_users',
        'alamat_users',
        'telepon_users',
        'email_users',
        'status_users',
        'username_users',
        'password_users'
    ];
}
