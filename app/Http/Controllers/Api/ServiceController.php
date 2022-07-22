<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\ServiceRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends ResponseController
{
    public function createService(Request $request)
    {
        // return $request->email;
        try {
            $user = User::whereEmail($request->email)->first();
            // return $user;
            if($user){
                $request['user_id'] = $user->id;
                // return $request->all();
                ServiceRequest::create($request->all());
                return $this->sendResponse([], 'Service created successfully.');
            }else{
                ServiceRequest::create($request->all());
                return $this->sendResponse([], 'Service created successfully.');
            }
        } catch (\Throwable $th) {
            return $this->sendError('Unable to create Service', [],503);
        }

    }
}
