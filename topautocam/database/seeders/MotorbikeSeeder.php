<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motorbike;

class MotorbikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motorbike::factory(100)->create();
    }
}
