<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name' => 'Mr. X',
            'image' => 'mr.x.jpg',
            'detail' => 'I bought a car from TOP AUTO; I am happy until now.',
        ]);

        Testimonial::create([
            'name' => 'Mr. Y',
            'image' => 'mr.y.jpg',
            'detail' => 'I bought a car from TOP AUTO; I am happy until now.',
        ]);

        Testimonial::create([
            'name' => 'Mr. Z',
            'image' => 'mr.z.jpg',
            'detail' => 'I bought a car from TOP AUTO; I am happy until now.',
        ]);
    }
}
