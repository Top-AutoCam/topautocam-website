<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // car
        $car = config('enums.CATEGORY.CAR');

        Category::create([
            'name' => $car,
            'slug' => strtolower($car),
            'logo' => strtolower($car) . ".jpg"
        ]);

        // motorbike
        $motorbike = config('enums.CATEGORY.MOTORBIKE');

        Category::create([
            'name' => $motorbike,
            'slug' => strtolower($motorbike),
            'logo' => strtolower($motorbike) . ".jpg"
        ]);

        // part
        $part = config('enums.CATEGORY.PART');

        Category::create([
            'name' => $part,
            'slug' => strtolower($part),
            'logo' => strtolower($part) . ".jpg"
        ]);
    }
}
