<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Order;


class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orders = Order::pluck('id');

        return [
            'image' => $this->faker->randomElement($array = array('a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg')),
            'price' => $this->faker->randomNumber($nbDigits = 6, $strict = false),
            'code' => Str::random(10),
            'vin' => Str::uuid(),
            'make' => $this->faker->randomElement(config('enums.MAKE')),
            'model' => $this->faker->randomElement(config('enums.MODEL')),
            'color' => $this->faker->randomElement(config('enums.COLOR')),
            'drive' => $this->faker->randomElement(config('enums.DRIVE')),
            'fuel' => $this->faker->randomElement(config('enums.FUEL')),
            'grade' => $this->faker->randomElement(config('enums.GRADE')),
            'status' => $this->faker->randomElement(config('enums.INVENTORY_STATUS')),
            'selected' => $this->faker->randomElement(config('enums.SELECTED')),
            'order_id' => $this->faker->randomElement($orders)
        ];
    }
}
