<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends ResponseController
{
    public function addProduct(Request $request)
    {
        // return $this->sendError('Unable to upload image', []);
        return $this->sendResponse($request->images['_parts'], 'Entered here');

        // try {
        //     $images = [];
        //     if ($request->file('images')) {
        //         $temp = $request->file('images');

        //         foreach ($request->images as  $image) {
        //             // return $this->sendResponse($image, 'Entered here');
        //             $filename = time() . rand() . '.' . $image->getClientOriginalExtension();
        //             $path = $image->store('products', 'public' . $filename);
        //             array_push($images, $path);
        //         }

        //     }
        //     $input = $request->except(['images']);
        //     $input['images'] = Product::create($input);
        //     return $this->sendResponse([], 'User Profile Pics updated successfully');
        // } catch (\Throwable $th) {
        //     return $this->sendError('Unable to upload image', $th);
        // }
    }
}
