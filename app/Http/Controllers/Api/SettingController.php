<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{

    public function updateProfilePics(Request $request)
    {
        $user = User::find(Auth::id());

        if ($request->hasFile('image')) {
            $this->deleteOldPicture();
            $path = $request->file('image')->store('users');
            $user->profile_pics = $path;
        }
        $user->save();
        return $this->sendResponse($user, 'User Profile Pics updated successfully');
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
