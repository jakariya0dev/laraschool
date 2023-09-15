<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class banner_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banner')->insert([
            'image_1' => 'image1.jpeg',
            'image_2' => 'image2.jpeg',
            'image_3' => 'image3.jpeg',
            'image_4' => 'image4.jpeg',
            'image_5' => 'image5.jpeg',
        ]);
    }
}
