<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class photo_gallery_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photo_gallery')->insert([
            'image_1' => 'image1.jpeg',
            'image_2' => 'image2.jpeg',
            'image_3' => 'image3.jpeg',
            'image_4' => 'image4.jpeg',
            'image_5' => 'image5.jpeg',
            'image_6' => 'image6.jpeg',
            'image_7' => 'image7.jpeg',
            'image_8' => 'image8.jpeg',
        ]);
    }
}
