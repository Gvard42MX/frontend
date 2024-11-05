<?php

use Database\seeders\penggunaseeder;
use Database\seeders\projectseeder;
use Illuminate\Database\seeder;

class DatabaseSeeder extends seeder
{
    public function run()
    {
        // Memanggil PenggunaSeeder dan ProjectSeeder
        $this->call([
            penggunaseeder::class,  // Sesuaikan nama class sesuai konvensi
            projectsseeder::class,   // Sesuaikan nama class sesuai konvensi
        ]);
    }
}
