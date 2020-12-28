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
            'detail' => 'Discount 10%'
        ]);
        Promotion::create([
            'name' => 'New Year Promotion',
            'detail' => 'Discount 10%'
        ]);
    }
}
