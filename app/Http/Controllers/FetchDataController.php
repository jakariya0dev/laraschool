<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FetchDataController extends Controller
{
    function getAboutData()
    {
        return DB::table('about')->get()->first();
    }

    function getSpeechData()
    {
        return DB::table('speech')->get();
    }

    function getTeacherData()
    {
        return DB::table('teacher')->get();
    }

}
