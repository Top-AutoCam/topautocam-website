<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = Category::where('name', config('enums.CATEGORY.CAR'))->first();

        Product::create([
            'name' => 'Alphard',
            'slug' => 'alphard',
            'logo' => 'alphard.jpg',
            'detail' => 'alphard is a wagon',
            'category_id' => $car != null ? $car->id : null
        ]);

        Product::create([
            'name' => 'Q7',
            'slug' => 'q7',
            'logo' => 'q7.jpg',
            'detail' => 'audi is a handsome',
            'category_id' => $car != null ? $car->id : null
        ]);

        Product::create([
            'name' => 'E90',
            'slug' => 'e90',
            'logo' => 'e90.jpg',
            'detail' => 'e90 is a fast',
            'category_id' => $car != null ? $car->id : null
        ]);

        $motorbike = Category::where('name', config('enums.CATEGORY.MOTORBIKE'))->first();

        Product::create([
            'name' => 'SL',
            'slug' => 'sl',
            'logo' => 'sl.jpg',
            'detail' => 'big bike handsome',
            'category_id' => $motorbike != null ? $motorbike->id : null
        ]);

        Product::create([
            'name' => 'Night Hawk',
            'slug' => 'night_hawk',
            'logo' => 'night_hawk.jpg',
            'detail' => 'night hawk is great',
            'category_id' => $motorbike != null ? $motorbike->id : null
        ]);

        $part = Category::where('name', config('enums.CATEGORY.PART'))->first();

        Product::create([
            'name' => 'Compressor',
            'slug' => 'compressor',
            'logo' => 'compressor.jpg',
            'detail' => 'something',
            'category_id' => $part != null ? $part->id : null
        ]);
    }
}
