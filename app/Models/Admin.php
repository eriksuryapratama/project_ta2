<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admin";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'kode_admin',
        'nama_admin',
        'alamat_admin',
        'telepon_admin',
        'email_admin',
        'username_admin',
        'password_admin'
    ];
}
