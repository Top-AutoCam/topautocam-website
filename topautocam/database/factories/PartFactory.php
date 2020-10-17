<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Part;
use App\Models\Order;

class PartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orders = Order::pluck('id');

        return [
            'name' => $this->faker->randomElement(config('enums.PART')),
            'image' => $this->faker->randomElement(array('c1.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg', 'c5.jpg', 'c6.jpg')),
            'price' => $this->faker->randomNumber($nbDigits = 6, $strict = false),
            'code' => Str::random(10),
            'make' => $this->faker->randomElement(config('enums.MAKE')),
            'model' => $this->faker->randomElement(config('enums.MODEL')),
            'color' => $this->faker->randomElement(config('enums.COLOR')),
            'status' => $this->faker->randomElement(config('enums.INVENTORY_STATUS')),
            'selected' => $this->faker->randomElement(config('enums.SELECTED')),
            'order_id' => $this->faker->randomElement($orders)
        ];
    }
}
