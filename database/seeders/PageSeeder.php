<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::factory()->create([
            'name' => 'Logo',
            'slug' => 'logo',
            'title' => 'Logo',
            'description' => 'Logo'
        ]);

        Page::factory()->create([
            'name' => 'Trang chủ',
            'slug' => 'trang-chu',
            'title' => 'Trang chủ',
            'description' => 'trang chủ'
        ]);

        Page::factory()->create([
            'name' => 'Trang giới thiệu',
            'slug' => 'gioi-thieu',
            'title' => 'Chúng tôi luôn mang đến những điều tốt nhất dành cho bạn',
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
    }
}
