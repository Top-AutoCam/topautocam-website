<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Motorbike;
use App\Models\Order;


class MotorbikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Motorbike::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orders = Order::pluck('id');

        return [
            'image' => $this->faker->randomElement(array('b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg')),
            'price' => $this->faker->randomNumber($nbDigits = 6, $strict = false),
            'code' => Str::random(10),
            'make' => $this->faker->randomElement(config('enums.MAKE_BIKE')),
            'model' => $this->faker->randomElement(config('enums.MODEL_BIKE')),
            'color' => $this->faker->randomElement(config('enums.COLOR')),
            'status' => $this->faker->randomElement(config('enums.INVENTORY_STATUS')),
            'selected' => $this->faker->randomElement(config('enums.SELECTED')),
            'order_id' => $this->faker->randomElement($orders)
        ];
    }
}
