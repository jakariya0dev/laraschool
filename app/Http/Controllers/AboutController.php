<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    function updateAboutData(Request $request){

        if ($request->hasFile('about-img')){

            File::deleteDirectory(public_path('images/about'));

            $imgExtension =   $request->file('about-img')->getClientOriginalExtension();
            $request->file('about-img')->move(public_path('/images/about/'), 'image1'.'.'.$imgExtension);

            DB::table('about')->where('id', 1)->update([
                'title' => $request->input('about-title'),
                'description' => $request->input('about-description'),
                'image' => 'image1'.'.'.$imgExtension,
                'video_url' => $request->input('video-url')
            ]);
        }
        else{

            DB::table('about')->where('id', 1)->update([
                'title' => $request->input('about-title'),
                'description' => $request->input('about-description'),
                'video_url' => $request->input('video-url')
            ]);

        }

        return redirect()->route('about-dashboard');
    }
}
