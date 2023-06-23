<?php

namespace Database\Seeders;

use App\Enums\EmployeeStatus;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->create([
            'name' => 'Rob Clark',
            'image_id' => null,
            'position' => 'Marketing Head',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::UnPublish,
        ]);

        Employee::factory()->create([
            'name' => 'Albert Rodricks',
            'image_id' => null,
            'position' => 'Creative Lead',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::UnPublish,
        ]);

        Employee::factory()->create([
            'name' => 'Jessica Jones',
            'image_id' => null,
            'position' => 'Lead Designer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::UnPublish,
        ]);

        Employee::factory()->create([
            'name' => 'Nicole Cross',
            'image_id' => null,
            'position' => 'Visualizer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::UnPublish,
        ]);
    }
}
