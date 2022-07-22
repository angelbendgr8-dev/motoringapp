<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{

    public function updateProfilePics(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('image')) {
            $this->deleteOldPicture();
            $path = $request->file('image')->store('users');
            $image = $path;
        }
        // $image->save();
        //  return new ImageResource($image);
    }
    public function changePassword(Request $request){

    }
    public function deleteOldPicture(){
        $user = Auth::user();
        if(Storage::exists('public/'.$user->profile_pics)){
            //   dd($service->picture);
            Storage::delete('public/'.$user->profile_pics);
        }

    }
}
