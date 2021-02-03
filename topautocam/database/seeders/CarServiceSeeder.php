<?php

namespace Database\Seeders;

use App\Models\CarService;
use Illuminate\Database\Seeder;

class CarServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CarService::create([
            'name' => 'Car Dealership',
            'image' => 'service_dealership.png',
            'detail' => 'cars are imported from Japan'
        ]);
        CarService::create([
            'name' => 'Sell Car',
            'image' => 'service_car_sale.png',
            'detail' => 'cars on sale here'
        ]);
        CarService::create([
            'name' => 'Sell Part',
            'image' => 'service_part.png',
            'detail' => 'parts on sale here'
        ]);
    }
}
