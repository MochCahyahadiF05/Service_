<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = Service::create([
            'nama_service'=>'Service Ringan',
            'harga_service'=>'75000',
        ]);

        $service = Service::create([
            'nama_service'=>' Ganti oli',
            'harga_service'=>'20000',
        ]);
    }
}
