<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::factory()->create([
            'customer_name' => 'David Walker',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);

        Review::factory()->create([
            'customer_name' => 'Christina Williams',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);

        Review::factory()->create([
            'customer_name' => 'Sarah Jones',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 4
        ]);
        Review::factory()->create([
            'customer_name' => 'Chris Gorgano',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);
        Review::factory()->create([
            'customer_name' => 'Kate Carter',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);
        Review::factory()->create([
            'customer_name' => 'Alex Curtis',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 4
        ]);
        Review::factory()->create([
            'customer_name' => 'Ashley Wilson',
            'comment' => 'Curabitur mollis bibendum luctus. Duis
            suscipit vitae dui sed suscipit.
            Vestibulum auctor nunc vitae diam
            eleifend, in maximus metus sollicitudin.
            Quisque vitae sodales lectus. Nam
            porttitor justo sed mi finibus, vel
            tristique risus faucibus.',
            'stars' => 5
        ]);
        Review::factory()->create([
            'customer_name' => 'Johnny Perkins',
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
