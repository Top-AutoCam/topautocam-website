<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Promotion::create([
            'name' => 'Chrismas Promotion',
            'image' => 'promotion_christmas.png',
            'detail' => 'Discount 10%'
        ]);
        Promotion::create([
            'name' => 'New Year Promotion',
            'image' => 'promotion_new_year.png',
            'detail' => 'Discount 10%'
        ]);
    }
}
