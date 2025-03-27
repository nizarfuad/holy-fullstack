<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        RankSeeder::class;

        // $moonshine = [
        //     "id" => 1,
        //     "moonshine_user_role_id" => 1,
        //     "email" => "admin@admin.com",
        //     "password" => bcrypt('admin'),
        //     "name" => "admin",
        // ];

        // $moonshine()->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
