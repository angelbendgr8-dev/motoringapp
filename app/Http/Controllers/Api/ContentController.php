<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Http\Resources\BrandResource;
use App\Models\CarBrand;
use App\Models\Category;
use App\Models\ServiceLocation;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends ResponseController
{
    public function getLocations()
    {
        $locations = ServiceLocation::all();
        return $this->sendResponse($locations, 'locations fetched successfully.');
    }
    public function getServices()
    {
        $services = Services::all();
        return $this->sendResponse($services, 'Services fetched successfully.');
    }
    public function getCategories()
    {
        $categories = Category::all();
        return $this->sendResponse($categories, 'Categories fetched successfully.');
    }
    public function getBrands()
    {
        $brands = BrandResource::collection(CarBrand::all());
        return $this->sendResponse($brands, 'Categories fetched successfully.');
    }
    public function getProduct(Request $request)
    {
        
    }
}
