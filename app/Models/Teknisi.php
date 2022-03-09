<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;
    protected $table = "teknisi";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'kode_teknisi',
        'nama_teknisi',
        'alamat_teknisi',
        'telepon_teknisi',
        'email_teknisi',
        'username_teknisi',
        'password_teknisi'
    ];
}
