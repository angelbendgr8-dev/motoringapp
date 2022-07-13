<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController;
use App\Models\Category;
use App\Models\ServiceLocation;
use App\Models\Services;
use Illuminate\Http\Request;

class ContentController extends ResponseController
{
    public function getLocations()
    {
        $locations = ServiceLocation::all();
        return response()->json($locations,200);
    }
    public function getServices()
    {
        $services = Services::all();
        return response()->json($services,200);
    }
    public function getCategories()
    {
        $category = Category::all();
        return response()->json($category,200);
    }
}
