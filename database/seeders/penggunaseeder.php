<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class penggunaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 5 users
        for ($i = 0; $i < 5; $i++) {
            DB::table('pengguna')->insert([
                'username' => 'user' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'password' => Hash::make('password' . ($i + 1)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
?>