<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'admin@admin.com',
             'password' => bcrypt('1234567'),
             'identity' => '1234567',
             'type' => 'super_admin',
             'gender' => 'male',
         ]);
    }
}
