<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

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
                'title' => 'Top Auto Cam is one of the best car sellers',
                'image' => 'd1.jpg'
            ],
            [
                'title' => 'Top Auto Cam is awesome',
                'image' => 'd2.jpg'
            ],
            [
                'title' => 'Top Auto Cam is good',
                'image' => 'd3.jpg'
            ],
        ];

        foreach ($list as $data) {
            if (Announcement::where('title', $data['title'])->exists()) return;
            Announcement::create($data);
        }
    }
}
