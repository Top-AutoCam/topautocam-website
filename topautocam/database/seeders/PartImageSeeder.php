<?php

namespace Database\Seeders;

use App\Models\PartImage;
use Illuminate\Database\Seeder;

class PartImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartImage::factory(100)->create();
    }
}
