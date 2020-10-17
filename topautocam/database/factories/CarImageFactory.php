<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CarImage;
use App\Models\Car;

class CarImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = array();
        foreach (range(40, 45) as $number) {
            $images[] = \sprintf("a%d.jpg", $number);
        }

        //$ids = DB::table('car')->pluck('id');
        $ids = Car::pluck('id');

        return [
            'name' => $this->faker->randomElement($images),
            'car_id' => $this->faker->randomElement($ids)
        ];
    }
}
