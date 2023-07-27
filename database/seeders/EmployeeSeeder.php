<?php

namespace Database\Seeders;

use App\Enums\EmployeeStatus;
use App\Models\Employee;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathEm1 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/team/team1.jpg')), 'team1.jpg');
        $imageEm1 = Image::factory()->create([
            'name' => 'team1.jpg',
            'url' => $pathEm1,
            'size' => Storage::size('imagedefault/team/team1.jpg'),
        ]);

        Employee::factory()->create([
            'name' => 'Rob Clark',
            'image_id' => $imageEm1->id,
            'position' => 'Marketing Head',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::Publish,
        ]);


        $pathEm2 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/team/team2.jpg')), 'team2.jpg');
        $imageEm2 = Image::factory()->create([
            'name' => 'team2.jpg',
            'url' => $pathEm2,
            'size' => Storage::size('imagedefault/team/team2.jpg'),
        ]);

        Employee::factory()->create([
            'name' => 'Albert Rodricks',
            'image_id' => $imageEm2->id,
            'position' => 'Creative Lead',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::Publish,
        ]);


        $pathEm3 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/team/team3.jpg')), 'team3.jpg');
        $imageEm3 = Image::factory()->create([
            'name' => 'team3.jpg',
            'url' => $pathEm3,
            'size' => Storage::size('imagedefault/team/team3.jpg'),
        ]);

        Employee::factory()->create([
            'name' => 'Jessica Jones',
            'image_id' => $imageEm3->id,
            'position' => 'Lead Designer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::Publish,
        ]);


        $pathEm4 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/team/team4.jpg')), 'team4.jpg');
        $imageEm4 = Image::factory()->create([
            'name' => 'team4.jpg',
            'url' => $pathEm4,
            'size' => Storage::size('imagedefault/team/team4.jpg'),
        ]);

        Employee::factory()->create([
            'name' => 'Nicole Cross',
            'image_id' => $imageEm4->id,
            'position' => 'Visualizer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit augue.',
            'socials' => ['google' => 'http://www.google.com', 'twitter' => 'http://twitter.com'],
            'status' => EmployeeStatus::Publish,
        ]);
    }
}
