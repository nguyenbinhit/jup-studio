<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathRe1 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/post7.jpg')), 'post7.jpg');
        $imageRe1 = Image::factory()->create([
            'name' => 'post7.jpg',
            'url' => $pathRe1,
            'size' => Storage::size('imagedefault/review/post7.jpg'),
        ]);

        Review::factory()->create([
            'customer_name' => 'David Walker',
            'image_id' => $imageRe1->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);


        $pathRe2 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/team2.jpg')), 'team2.jpg');
        $imageRe2 = Image::factory()->create([
            'name' => 'team2.jpg',
            'url' => $pathRe2,
            'size' => Storage::size('imagedefault/review/team2.jpg'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Christina Williams',
            'image_id' => $imageRe2->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);


        $pathRe3 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial2.png')), 'testimonial2.png');
        $imageRe3 = Image::factory()->create([
            'name' => 'testimonial2.png',
            'url' => $pathRe3,
            'size' => Storage::size('imagedefault/review/testimonial2.png'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Sarah Jones',
            'image_id' => $imageRe3->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 4
        ]);


        $pathRe4 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial8.jpg')), 'testimonial8.jpg');
        $imageRe4 = Image::factory()->create([
            'name' => 'testimonial8.jpg',
            'url' => $pathRe4,
            'size' => Storage::size('imagedefault/review/testimonial8.jpg'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Chris Gorgano',
            'image_id' => $imageRe4->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);


        $pathRe5 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial3.png')), 'testimonial3.png');
        $imageRe5 = Image::factory()->create([
            'name' => 'testimonial3.png',
            'url' => $pathRe5,
            'size' => Storage::size('imagedefault/review/testimonial3.png'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Kate Carter',
            'image_id' => $imageRe5->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);


        $pathRe6 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial4.png')), 'testimonial4.png');
        $imageRe6 = Image::factory()->create([
            'name' => 'testimonial4.png',
            'url' => $pathRe6,
            'size' => Storage::size('imagedefault/review/testimonial4.png'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Alex Curtis',
            'image_id' => $imageRe6->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 4
        ]);


        $pathRe7 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial5.png')), 'testimonial5.png');
        $imageRe7 = Image::factory()->create([
            'name' => 'testimonial5.png',
            'url' => $pathRe7,
            'size' => Storage::size('imagedefault/review/testimonial5.png'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Ashley Wilson',
            'image_id' => $imageRe7->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);


        $pathRe8 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/review/testimonial6.png')), 'testimonial6.png');
        $imageRe8 = Image::factory()->create([
            'name' => 'testimonial6.png',
            'url' => $pathRe8,
            'size' => Storage::size('imagedefault/review/testimonial6.png'),
        ]);

        Review::factory()->create([
            'customer_name' => 'Johnny Perkins',
            'image_id' => $imageRe8->id,
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 4
        ]);
    }
}
