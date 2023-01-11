<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $fillable = ['nama_barang', 'merk','foto','deskripsi','stok_barang','harga_barang'];
    public $timestamps = true;

    public function image(){
        if($this->foto && file_exists(public_path('gambar/barangs/'. $this->foto))){
            return asset('gambar/barangs/'. $this->foto);
        }else{
            return asset('gambar/no_image.jpg');
        }
    }
    // menghapus image(foto) di storage(penyimpanan) public
    public function deleteImage(){
        if($this->foto && file_exists(public_path('gambar/barangs/'.$this->foto))){
            return unlink(public_path('gambar/barangs/'. $this->foto));
        }
    }
    public function transaksi()
    {   
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
