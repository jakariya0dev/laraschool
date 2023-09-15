<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('academic_info')->insert([
            'info_1' => 'ইআইআই নম্বরঃ ১২৩৪৫৬',
            'info_2' => 'কলেজ কোডঃ ১২৩৪৫৬',
            'info_3' => 'মোট শিক্ষার্থীঃ ১০০ জন',
            'info_4' => 'নারী শিক্ষার্থীঃ ৫০ জন',
            'info_5' => 'পুরুষ শিক্ষার্থীঃ ৬০ জন',
            'info_6' => 'মোট শিক্ষকঃ ১০ জন',
            'info_7' => 'আবাসিক হলঃ ২টি',
            'info_8' => 'শাখাঃ ৩টি',
            'info_9' => 'পাঠদানের অনুমতিঃ ২০২০সাল',
            'info_10' => 'এমপিওঃ ২০২২সাল',
            'info_11' => 'একাডেমিক বিল্ডিংঃ ৩টি',
            'info_12' => 'ল্যাবঃ ২টি'
        ]);
    }
}
