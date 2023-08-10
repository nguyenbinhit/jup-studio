<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathPage1 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/page/logo.png')), 'logo.png');
        $imagePage1 = Image::factory()->create([
            'name' => 'logo.png',
            'url' => $pathPage1,
            'size' => Storage::size('imagedefault/page/logo.png'),
        ]);

        Page::factory()->create([
            'name' => 'Logo',
            'slug' => 'logo',
            'title' => 'Logo',
            'image_id' => $imagePage1->id,
            'description' => 'Logo'
        ]);


        Page::factory()->create([
            'name' => 'Trang chủ',
            'slug' => 'trang-chu',
            'title' => 'Trang chủ',
            'image_id' => null,
            'description' => 'trang chủ',
            'metadata' => [
                'first' => 'JUP',
                'second' => 'Studio Sáng Tạo',
                'third' => 'Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry`s standard dummy. Lorem Ipsum has been the industry`s standard dummy.'
            ]
        ]);


        $pathPage2 = Storage::putFileAs('public/uploads/page_images', new File(Storage::path('imagedefault/page/about.jpg')), 'about.jpg');
        $imagePage2 = Image::factory()->create([
            'name' => 'about.jpg',
            'url' => $pathPage2,
            'size' => Storage::size('imagedefault/page/about.jpg'),
        ]);

        Page::factory()->create([
            'name' => 'Trang giới thiệu',
            'slug' => 'gioi-thieu',
            'title' => 'Chúng tôi luôn mang đến những điều tốt nhất dành cho bạn',
            'image_id' => $imagePage2->id,
            'description' => '<p class="pb-4 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">Lorem
                ipsum dolor sit amet, consectetur adipiscing
                elit. Sed augue diam, accumsan vitae justo non,
                euismod aliquam lectus. Etiam elementum tortor
                quis risus posuere, in cursus arcu lobortis.</p> <ul class="pb-5 text-left wow fadeInUp" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                <li>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit.</li>
                <li>Morbi ornare nibh id cursus vestibulum.</li>
                <li>Duis vitae lectus facilisis, tristique lorem
                    sit amet, malesuada diam.</li>
                </ul>
            '
        ]);


        Page::factory()->create([
            'name' => 'Trang mạng xã hội',
            'slug' => 'social',
            'title' => 'Trang mạng xã hội',
            'image_id' => null,
            'description' => 'Trang mạng xã hội',
            'metadata' => [
                'facebook' => 'https://www.facebook.com',
                'youtube' => 'https://www.youtube.com',
                'twitter' => 'https://twitter.com',
                'google' => 'https://google.com',
                'instagram' => 'https://www.instagram.com',
            ]
        ]);
    }
}
