<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\OtherProduct;

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
            return $this->sendResponse($input, 'Product Uploaded successfully');
        } catch (\Throwable $th) {
            return $this->sendError('Unable to upload product', $th);
        }
    }
    public function addOtherProduct(Request $request)
    {
        // return $this->sendError('Unable to upload image', []);
        // return $this->sendResponse($request->images, 'Entered here');

        try {
            $images = [];
            if ($request->file('images')) {
                //  return $this->sendResponse($request->images, 'Entered here');
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

            OtherProduct::create($input);
            return $this->sendResponse($input, 'Product uploaded successfully');
        } catch (\Throwable $th) {
            return $this->sendError('Unable to upload Product', $th);
        }
    }

    public function getCars()
    {
        $cars = Product::all();

        return $this->sendResponse($cars, 'Products fetched successfully.');



    }
    public function getParts()
    {
        $cars = Product::all();

        return $this->sendResponse($cars, 'Products fetched successfully.');



    }
}
