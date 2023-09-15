<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PhotoGalleryController extends Controller
{
    function updatePhotoGalleryData(Request $request){

        $id = $request->id;
        $imageKey = 'image-'.$id;


        if($request->hasFile($imageKey)){

            $imgExtension = $request->file($imageKey)->getClientOriginalExtension();

            File::deleteDirectory(public_path('images/gallery/photo-'.$id));

            $request->file($imageKey)->move(public_path('images/gallery/photo-'.$id), 'image'.$id.'.'.$imgExtension);

            DB::table('photo_gallery')->where('id', '=', 1)->update([
                'image_'.$id => 'image'.$id.'.'.$imgExtension,
            ]);
        }

        return redirect()->route('gallery-dashboard');

    }

    function getPhotoGalleryData(){
        return DB::table('photo_gallery')->get()->first();
    }
}
