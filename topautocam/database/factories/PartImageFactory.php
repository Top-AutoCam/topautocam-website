<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Support\Facades\DB;
use App\Models\PartImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = array();
        foreach (range(1, 6) as $number) {
            $images[] = \sprintf("c%d.jpg", $number);
        }

        //$ids = DB::table('part')->pluck('id');
        $ids = Part::pluck('id');

        return [
            'name' => $this->faker->randomElement($images),
            'part_id' => $this->faker->randomElement($ids)
        ];
    }
}
