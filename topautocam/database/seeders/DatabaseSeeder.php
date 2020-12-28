<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarServiceSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(CarImageSeeder::class);
        $this->call(MotorbikeSeeder::class);
        $this->call(PartSeeder::class);
        $this->call(PartImageSeeder::class);
        $this->call(AnnouncementSeeder::class);

        // update 
    }
}
