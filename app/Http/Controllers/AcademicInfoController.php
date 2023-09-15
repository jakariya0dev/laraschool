<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicInfoController extends Controller
{
    function updateAcademicInfo(Request $request){

        DB::table('academic_info')->where('id', 1)->update([
            'info_1' => $request->input('info-1'),
            'info_2' => $request->input('info-2'),
            'info_3' => $request->input('info-3'),
            'info_4' => $request->input('info-4'),
            'info_5' => $request->input('info-5'),
            'info_6' => $request->input('info-6'),
            'info_7' => $request->input('info-7'),
            'info_8' => $request->input('info-8'),
            'info_9' => $request->input('info-9'),
            'info_10' => $request->input('info-10'),
            'info_11' => $request->input('info-11'),
            'info_12' => $request->input('info-12'),
        ]);

        return redirect('/academic-dashboard');
    }

    function getAcademicData(){
        return DB::table('academic_info')->get()->first();
    }
}
