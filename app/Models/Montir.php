<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    use HasFactory;
    public $fillable = ['nama_montir','alamat_montir','tlp_montir'];
    public $timestamps = true;

    public function transaksi()
    {   
        return $this->hasMany(Transaksi::class, 'id_montir');
    }
}
