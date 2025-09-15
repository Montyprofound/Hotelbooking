<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    public function run(): void
    {
        Hotel::create([
            'name' => 'Sheraton',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'location' => 'Cairo',
            'image' => 'services-1.jpg',
            'rating' => 4.5
        ]);

        Hotel::create([
            'name' => 'The Plaza Hotel',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'location' => 'New York',
            'image' => 'image_4.jpg',
            'rating' => 4.8
        ]);

        Hotel::create([
            'name' => 'The Ritz',
            'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
            'location' => 'Paris',
            'image' => 'image_4.jpg',
            'rating' => 4.7
        ]);
    }
}
