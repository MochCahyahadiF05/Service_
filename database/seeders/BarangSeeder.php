<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = Barang::create([
            'nama_barang'=>'oli',
            'merk'=>'dunhilil',
            'deskripsi'=>'deskripsi barang',
            'stok_barang'=>200,
            'harga_barang'=>35000,
        ]);

        $barang = Barang::create([
            'nama_barang'=>'oli',
            'merk'=>'merk oli 2',
            'deskripsi'=>'deskripsi barang',
            'stok_barang'=>100,
            'harga_barang'=>40000,
        ]);
    }
}
