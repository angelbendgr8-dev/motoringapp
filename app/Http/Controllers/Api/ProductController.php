<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;

class ProductController extends ResponseController
{
    public function addProduct(Request $request)
    {
        // return $this->sendError('Unable to upload image', []);
        // return $this->sendResponse($request->images, 'Entered here');

        try {
            $images = [];
            if ($request->file('images')) {

                foreach ($request->file('images') as  $image) {
                    // return $this->sendResponse($image, 'Entered here');
                    $filename = time() . rand() . '.' . $image->getClientOriginalExtension();
                    $path = $image->store('products', 'public');
                    array_push($images, $path);
                }
            }
            $input = $request->except(['images', 'date']);
            $input['date'] = new Carbon($request->date);
            $input['images'] = json_encode($images);

            Product::create($input);
            return $this->sendResponse($input, 'User Profile Pics updated successfully');
        } catch (\Throwable $th) {
            return $this->sendError('Unable to upload image', $th);
        }
    }
}
