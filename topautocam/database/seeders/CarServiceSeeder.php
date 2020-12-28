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
            'detail' => 'cars are imported from Japan'
        ]);
        CarService::create([
            'name' => 'Sell Car',
            'detail' => 'cars on sale here'
        ]);
        CarService::create([
            'name' => 'Sell Part',
            'detail' => 'parts on sale here'
        ]);
    }
}
