<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::factory()->create([
            'name' => 'Basic',
            'price' => 19,
            'benefits' => [
                'first' => 'Full Access',
                'second' => 'Unlimited Bandwidth',
                'third' => 'Email Accounts',
                'fourth' => '8 Free Forks Every Months'
            ],
        ]);

        Plan::factory()->create([
            'name' => 'Standard',
            'price' => 29,
            'benefits' => [
                'first' => 'Full Access',
                'second' => 'Unlimited Bandwidth',
                'third' => 'Email Accounts',
                'fourth' => '8 Free Forks Every Months'
            ],
        ]);

        Plan::factory()->create([
            'name' => 'Premium',
            'price' => 39,
            'benefits' => [
                'first' => 'Full Access',
                'second' => 'Unlimited Bandwidth',
                'third' => 'Email Accounts',
                'fourth' => '8 Free Forks Every Months'
            ],
        ]);

        Plan::factory()->create([
            'name' => 'Advance',
            'price' => 49,
            'benefits' => [
                'first' => 'Full Access',
                'second' => 'Unlimited Bandwidth',
                'third' => 'Email Accounts',
                'fourth' => '8 Free Forks Every Months'
            ],
        ]);
    }
}
