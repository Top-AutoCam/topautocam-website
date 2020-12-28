<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Order;
use App\Util\UTIL;

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
            'title' => 'best car ever',
            'detail' => 'this is detail ......' . Str::random(10),
            'image' => 'storage/' . $this->faker->randomElement($array = array('a1.jpg', 'a2.jpg', 'a3.jpg', 'a4.jpg', 'a5.jpg')),
            'price' => $this->faker->randomNumber($nbDigits = 6, $strict = false),
            'code' => Str::random(10),
            'vin' => Str::uuid(),
            'make' => $this->faker->randomElement(UTIL::MAKE),
            'model' => $this->faker->randomElement(UTIL::MODEL),
            'color' => $this->faker->randomElement(UTIL::COLOR),
            'drive' => $this->faker->randomElement(UTIL::DRIVE),
            'fuel' => $this->faker->randomElement(UTIL::FUEL),
            'grade' => $this->faker->randomElement(UTIL::GRADE),
            'status' => $this->faker->randomElement(UTIL::INVENTORY_STATUS),
            'selected' => $this->faker->randomElement(UTIL::SELECTED),
            'order_id' => $this->faker->randomElement($orders)
        ];
    }
}
