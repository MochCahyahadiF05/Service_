<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('admin123'),
            'role'=>'admin',
            'alamat'=>'Alamat admin sagat privasi',
            'no_telepon'=>'081914189102',
        ]);

        $admin = User::create([
            'name'=>'User',
            'email'=>'user@user.com',
            'password'=>Hash::make('user1234'),
            'role'=>'user',
            'alamat'=>'Alamat user sagat privasi',
            'no_telepon'=>'081914189102',
        ]);
    }
}
