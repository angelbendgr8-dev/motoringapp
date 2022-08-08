<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\CarBrand;
use App\Models\Category;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\ServiceLocation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Controllers\ResponseController;

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
    public function getBrandById($name)
    {
        $maker = Category::whereName($name)->first();
        $brands = CarBrand::whereCategoryId($maker->id)->get();
        return $this->sendResponse($brands, 'brands fetched successfully.');
    }
   
}
