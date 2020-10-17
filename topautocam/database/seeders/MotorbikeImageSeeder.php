<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MotorbikeImage;

class MotorbikeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotorbikeImage::factory(100)->create();
    }
}
