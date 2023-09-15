<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    function getAllNotice(){
        return DB::table('notice')->get();
    }
    function newNotice(Request $request){

        DB::table('notice')->insert([
           'title' => $request->input('notice-title'),
            'link' => $request->input('notice-link'),
        ]);

        return redirect('/notice-dashboard');
    }

    function deleteNotice(Request $request){

        DB::table('notice')->delete($request->id);
        return redirect('/notice-dashboard');
    }
}
