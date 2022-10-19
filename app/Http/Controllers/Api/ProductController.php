<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\OtherProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;
use App\Models\CarInspection;
use App\Models\Order;

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
            $input['images'] = $images;

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
            $input['images'] = $images;

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
        $cars = OtherProduct::all();

        return $this->sendResponse($cars, 'Products fetched successfully.');



    }
    public function orderPart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'mobile_number' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        Order::create($input);
        return $this->sendResponse($input, 'Order made successfully');
    }
    public function inspectCar(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'user_id' => 'required',
            'car_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        CarInspection::create($input);
        return $this->sendResponse($input, 'Car Inspection submitted successfully');
    }
}
