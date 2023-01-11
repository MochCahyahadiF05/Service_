<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $timestamps = true;

    public $fillable = ['id_user','nama','no_polisi', 'tgl_boking', 'id_service','alamat','no_hp','id_barang','jumlah','id_mekanik'];

    public function user(){
        
        return $this->belongsTo(User::class, 'id_user');
    }
    public function service(){
        
        return $this->belongsTo(Service::class, 'id_service');
    }
    public function montir(){
        
        return $this->belongsTo(Montir::class, 'id_montir');
    }
}

