<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SpeechController extends Controller
{
    function updateSpeechData(Request $request){

        $id = $request->id;
        $imageKey = 'image-'.$id;


        if($request->hasFile($imageKey)){

            $imgExtension = $request->file($imageKey)->getClientOriginalExtension();

            File::deleteDirectory(public_path('images/speech/'.$id));
            $request->file($imageKey)->move(public_path('images/speech/'.$id), 'image'.$id.'.'.$imgExtension);

            DB::table('speech')->where('id', $id)->update([
                'title' => $request->input('title-'.$id),
                'message' => $request->input('message-'.$id),
                'image' => 'image'.$id.'.'.$imgExtension
            ]);

        }
        else{
            DB::table('speech')->where('id', $id)->update([
                'title' => $request->input('title-'.$id),
                'message' => $request->input('message-'.$id),
            ]);
        }

        return redirect()->route('speech-dashboard');

    }
}
