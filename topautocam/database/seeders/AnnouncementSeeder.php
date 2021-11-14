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
                'top_title_en' => 'quality first',
                'top_title_kh' => 'គុណភាពជាចំបង',
                'title_en' => UTIL::PROJECT_NAME . ' is one of the best car sellers',
                'title_kh' => UTIL::PROJECT_NAME . ' ជាហ្គារាស់លក់ឡានល្អបំផុត',
                'bottom_title_en' => 'quality forever',
                'bottom_title_kh' => 'គុណភាពជានិរន្ត',
                'image' => 'd1.jpg'
            ],
            [
                'top_title_en' => 'acceptable price',
                'top_title_kh' => 'តម្លៃសមរម្យ',
                'title_en' => UTIL::PROJECT_NAME . ' is awesome',
                'title_kh' => UTIL::PROJECT_NAME . ' ជាផ្ដល់ជូនតម្លៃទាបជាងក្រុមហ៊ុនផ្សេងៗ',
                'bottom_title_en' => 'price for everyone',
                'bottom_title_kh' => 'តម្លៃសម្រាប់គ្រប់គ្នា',
                'image' => 'd2.jpg'
            ],
            [
                'top_title_en' => 'trustability',
                'top_title_kh' => 'កសាងទំនុកចិត្ត',
                'title_en' => 'customers are being taken care of',
                'title_kh' => 'បំរើអតិថិជនដោយភាពស្មោះត្រង់',
                'bottom_title_en' => 'trustability',
                'bottom_title_kh' => 'មានទំនុកចិត្ត',
                'image' => 'd3.jpg'
            ],
        ];

        foreach ($list as $data) {
            if (Announcement::where('title_en', $data['title_en'])->exists()) return;
            Announcement::create($data);
        }
    }
}
