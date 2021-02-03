<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Order;
use App\Util\UTIL;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::pluck('id');

        $faker = \Faker\Factory::create();

        Car::factory(100)->create();

        //featured
        for($i = 0; $i < 5; $i++) {
            Car::create([
            'title' => 'most reliable car ' . $i,
            'detail' => 'This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking',
            'image' => $faker->randomElement($array = array('a6.jpg', 'a7.jpg', 'a8.jpg', 'a9.jpg', 'a10.jpg')),
            'price' => $faker->randomNumber($nbDigits = 6, $strict = false),
            'code' => Str::random(10),
            'vin' => Str::uuid(),
            'make' => $faker->randomElement(UTIL::MAKE),
            'model' => $faker->randomElement(UTIL::MODEL),
            'color' => $faker->randomElement(UTIL::COLOR),
            'drive' => $faker->randomElement(UTIL::DRIVE),
            'fuel' => $faker->randomElement(UTIL::FUEL),
            'grade' => $faker->randomElement(UTIL::GRADE),
            'status' => UTIL::INVENTORY_STATUS['IN_STOCK'],
            'selected' => UTIL::SELECTED['FEATURED'],
            'order_id' => $faker->randomElement($orders)
            ]);
        }
    }
}
