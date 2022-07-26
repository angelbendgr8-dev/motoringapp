<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingController extends ResponseController
{

    public function updateProfilePics(Request $request)
    {
        // return $this->sendResponse($request->formData->, 'User Profile Pics updated successfully');;
        $user = User::find(Auth::id());
        try {
            if ($request->file('image')) {
                $this->deleteOldPicture();
                $image = $request->file('image');
                $filename = time() . rand() . '.' . $image->getClientOriginalExtension();
                $path = $request->file('image')->store('users', 'public');
                $user->profile_pics = $path;
                $user->save();
                return $this->sendResponse($user, 'User Profile Pics updated successfully');
            } else {
                return $this->sendError('profile Upload failed', []);
            }
        } catch (\Throwable $th) {
            return $this->sendError('Unable to upload image', $th);
        }
    }
    public function changePassword(Request $request)
    {
        $user = User::find(Auth::id());
        // return $this->sendResponse($request->old, 'Password updated successfully');
        if(Hash::check($request->old, $user->password)){
            $user->password = Hash::make($request->confirm);
            return $this->sendResponse($user, 'Password updated successfully');
        }else{
            return $this->sendError('Invalid Old password', []);
        }
        // Hash::check($value, $hashedValue)

    }
    public function updateProfileInfo(Request $request)
    {
        $user = User::find(Auth::id());
        $user->email = $request->email;
        $user->mobile_number = $request->mobile_number;
        $user->date_of_birth = $request->date_of_birth;
        $user->code = $request->code;
        $user->country = $request->country;
        $user->mobile_number = $request->mobile_number;
        $user->name = $request->name;
        $user->save();
        // return response()->json($user);
        return $this->sendResponse($user, 'User info updated successfully');
    }
    public function deleteOldPicture()
    {
        $user = Auth::user();
        if (Storage::exists('public/' . $user->profile_pics)) {
            //   dd($service->picture);
            Storage::delete('public/' . $user->profile_pics);
        }
    }
}
