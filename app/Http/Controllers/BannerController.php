<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    function getBannerData()
    {
        return DB::table('banner')->get()->first();
    }

    function updateBannerData(Request $request){

        $id = $request->id;
        $imageKey = 'image-'.$id;


        if($request->hasFile($imageKey)){

            $imgExtension = $request->file($imageKey)->getClientOriginalExtension();

            File::deleteDirectory(public_path('images/banner/photo-'.$id));

            $request->file($imageKey)->move(public_path('images/banner/photo-'.$id), 'image'.$id.'.'.$imgExtension);

            DB::table('banner')->where('id', '=', 1)->update([
                'image_'.$id => 'image'.$id.'.'.$imgExtension,
            ]);
        }

        return redirect('/banner-dash');

    }
}
