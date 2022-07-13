<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends ResponseController
{
    public function login(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $credentials = $validator->validated();
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('motoringapp')->plainTextToken;
            $success['name'] =  $user->name;
            $success['email'] = $user->email;
            return $this->sendResponse($success, 'User login successfully.');
        }else{
           $response = ['message'=>'invalid email or password'];
           return response()->json($response,400);
        }
        return response()->json($validator->validated());
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('motoringapp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['email'] = $user->email;
        return $this->sendResponse($success, 'User register successfully.');
    }
}
