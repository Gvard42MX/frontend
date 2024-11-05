<?php

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class penggunaseeder extends Seeder
/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Run the database seeds.
     * 
     * This seeder will create two default users if they do not already exist.
     * The first user is a regular user with the email address `user1@example.com`.
     * The second user is an admin user with the email address `admin@example.com`.
     * 
     * @return void
     */
/******  dedec67d-38f0-4a6d-ab54-3cd8e35e2e2c  *******/{
    public function run()
    {
        // Cek apakah email sudah ada sebelum memasukkan data baru
        Pengguna::firstOrCreate(
            ['email' => 'user1@example.com'],  // Unik berdasarkan email
            [
                'username' => 'user1',
                'password' => Hash::make('password'),  // Hash password
                'created_at' => now(),  // Perbaiki dari created_ad
                'updated_at' => now(),  // Tambahkan updated_at
            ]
        );

        Pengguna::firstOrCreate(
            ['email' => 'admin@example.com'],  // Unik berdasarkan email
            [
                'username' => 'admin',
                'password' => Hash::make('password'),
                'created_at' => now(),  // Perbaiki dari created_ad
                'updated_at' => now(),  // Tambahkan updated_at
            ]
        );
    }
}

