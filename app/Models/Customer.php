<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'kode_customer',
        'nama_customer',
        'alamat_customer',
        'telepon_customer',
        'email_customer',
        'username_customer',
        'password_customer'
    ];
}
