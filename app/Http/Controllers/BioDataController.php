<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BioDataController extends Controller
{

    function addNewBio(Request $request){

        $image = '';

        if($request->hasFile('teacher-pro-pic')){
            $image = time().'.'.$request->file('teacher-pro-pic')->getClientOriginalExtension();
            $request->file('teacher-pro-pic')->move(public_path('images/teacher/pro_pic'), $image);
        }

        $arow = DB::table('biodata')->insert([
            'name' => $request['teacher-name'],
            'designation' => $request['teacher-designation'],
            'blood_group' => $request['teacher-blood-group'],
            'subject' => $request['teacher-subject'],
            'qualification' => $request['teacher-qualification'],
            'dob' => $request['teacher-dob'],
            'doa' => $request['teacher-doa'],
            'doj' => $request['teacher-doj'],
            'phone' => $request['teacher-phone'],
            'email' => $request['teacher-email'],
            'index' => $request['teacher-index'],
            'ac_no' => $request['teacher-ac-no'],
            'id_no' => $request['teacher-id-no'],
            'tin_no' => $request['teacher-tin-no'],
            'pro_pic' => $image,
        ]);

        return redirect()->route('teacher.all');

    }

    function getAllTeacherData(){
        return DB::table('biodata')->get();
    }

    function getSingleTeacherProfile($id){
        $profile = DB::table('biodata')->find($id);
        return view('frontend.pages.teacher', ['profile' => $profile]);

    }
    function getTeacherProfile($id){
        $profile = DB::table('biodata')->find($id);
        return view('dashboard.teacher-profile', ['profile' => $profile]);

    }

    function deleteTeacher($id){

        // deleting pro pic
        $pro_pic = DB::table('biodata')->where('id', $id)->value('pro_pic');
        $imagePath = public_path('images/teacher/pro_pic/'.$pro_pic);

        if ($pro_pic != null && File::exists($imagePath)){
            unlink($imagePath);
        }

        $status = DB::table('biodata')->where('id', $id)->delete();
        return redirect()->route('teacher.all');

    }

    function editTeacherProfile($id){
        $profile = DB::table('biodata')->find($id);
        return view('dashboard.teacher-update', ['profile' => $profile]);
    }

    function updateTeacherProfile(Request $request){

        $image = $request->old_pro_pic;

        if($request->hasFile('teacher-pro-pic')){

            $image = time().'.'.$request->file('teacher-pro-pic')->getClientOriginalExtension();
            $request->file('teacher-pro-pic')->move(public_path('images/teacher/pro_pic'), $image);

            // deleting old pro pic
            $imagePath = public_path('storage/images/pro_pic/'.$request->old_pro_pic);
            if(File::exists($imagePath)){

                unlink($imagePath);
            }

        }

        $arow = DB::table('biodata')->where('id', $request['id'])->update([
            'name' => $request['teacher-name'],
            'designation' => $request['teacher-designation'],
            'blood_group' => $request['teacher-blood-group'],
            'subject' => $request['teacher-subject'],
            'qualification' => $request['teacher-qualification'],
            'dob' => $request['teacher-dob'],
            'doa' => $request['teacher-doa'],
            'doj' => $request['teacher-doj'],
            'phone' => $request['teacher-phone'],
            'email' => $request['teacher-email'],
            'index' => $request['teacher-index'],
            'ac_no' => $request['teacher-ac-no'],
            'id_no' => $request['teacher-id-no'],
            'tin_no' => $request['teacher-tin-no'],
            'pro_pic' => $image
        ]);

        return redirect()->route('teacher.all');

    }

}
