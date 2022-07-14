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
}
