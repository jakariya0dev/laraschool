<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class notice_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notice')->insert([
            [
                'title' => 'বার্ষিক পরিক্ষা-২০২৩ এর প্রশ্নপত্র প্রনয়ন প্রসঙ্গে। ০৯/০৭/২০২৩',
                'link' => 'https://drive.google.com/file/d/1hn6_3vkHUUsHtQsJbP_9QIcsVOGI-6rI/view?usp=sharing',
            ],
            [
                'title' => '২৫ জুন থেকে ৬ জুলাই পর্যন্ত পবিত্র্ ঈদ-উল-আযহা ও গ্রীষ্মকালীন অবকাশ উপলক্ষে মাদরাসা বন্ধ প্রসঙ্গে। ২৪/০৬/২০২৩',
                'link' => 'https://drive.google.com/file/d/1hNo5WqtX84dhTQulEACe_CNapc1aqn1m/view?usp=sharing',
            ],
        ]);
    }
}
