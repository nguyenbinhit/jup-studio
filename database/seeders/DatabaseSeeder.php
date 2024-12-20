<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('6%yT2f$E*)Fc+8Kr')
        ]);

        $this->call([
            EmployeeSeeder::class,
            PlanSeeder::class,
            PageSeeder::class,
            ReviewSeeder::class
        ]);
    }
}
