<?php

namespace Database\Factories;

use App\Models\Motorbike;
use Illuminate\Support\Facades\DB;
use App\Models\MotorbikeImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorbikeImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MotorbikeImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = array();
        foreach (range(1, 6) as $number) {
            $images[] = \sprintf("b%d.jpg", $number);
        }

        //$ids = DB::table('motorbike')->pluck('id');
        $ids = Motorbike::pluck('id');

        return [
            'name' => $this->faker->randomElement($images),
            'motorbike_id' => $this->faker->randomElement($ids)
        ];
    }
}
