<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $fillable = ['nama_service','harga_service','deskripsi'];
    public $timestamps = true;

    public function transaksi()
    {   
        return $this->hasMany(Transaksi::class, 'id_service');
    }
}
