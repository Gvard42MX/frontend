<?php
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data project baru dan pastikan relasi dengan user_id yang valid
        Project::firstOrCreate(
            ['project_name' => 'New Website Launch'],  // Cek apakah project sudah ada
            [
                'describe' => 'Launching a new website for the company',
                'start_date' => '2024-10-01',
                'end_date' => '2024-12-31',
                'created_ad' => now(),
                'updated_ad' => now(),
                'status' => 'ongoing',
                'user_id' => 1,  // Pastikan user_id ini valid dan ada di tabel pengguna
            ]
        );

        // Anda bisa menambahkan project lain dengan cara yang sama
        Project::firstOrCreate(
            ['project_name' => 'Mobile App Development'],  // Cek apakah project sudah ada
            [
                'describe' => 'Developing a mobile app for the company',
                'start_date' => '2024-11-01',
                'end_date' => '2025-01-31',
                'created_ad' => now(),
                'updated_ad' => now(),
                'status' => 'upcoming',
                'user_id' => 2,  // Pastikan user_id ini valid dan ada di tabel pengguna
            ]
        );
    }
}
?>