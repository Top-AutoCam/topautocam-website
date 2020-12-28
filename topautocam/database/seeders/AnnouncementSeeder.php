<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Util\UTIL;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'top_title' => 'quality first',
                'title' => UTIL::PROJECT_NAME . ' is one of the best car sellers',
                'bottom_title' => 'quality forever',
                'image' => 'd1.jpg'
            ],
            [
                'top_title' => 'acceptable price',
                'title' => UTIL::PROJECT_NAME . ' is awesome',
                'bottom_title' => 'price for everyone',
                'image' => 'd2.jpg'
            ],
            [
                'top_title' => 'trustability',
                'title' => 'customers are being taken care of',
                'bottom_title' => 'trustability',
                'image' => 'd3.jpg'
            ],
        ];

        foreach ($list as $data) {
            if (Announcement::where('title', $data['title'])->exists()) return;
            Announcement::create($data);
        }
    }
}
