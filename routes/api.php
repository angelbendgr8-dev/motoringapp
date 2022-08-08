<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    // Route::post('users/update/profile', [SettingController::class,'updateProfilePics']);
    Route::post('users/update/picture', [SettingController::class,'updateProfilePics']);
    Route::post('users/change/password', [SettingController::class,'changePassword']);
    Route::post('users/update/info', [SettingController::class,'updateProfileInfo']);

    Route::controller(ProductController::class)->group(function () {
        Route::post('users/add/product', 'addProduct');
        Route::post('users/add/other/product', 'addOtherProduct');

    });
});


Route::controller(AuthController::class)->group(function () {
    Route::post('auth/login', 'login');
    Route::post('auth/register', 'register');
    Route::post('auth/forgot-password', 'forgotPassword');
});

Route::controller(ServiceController::class)->group(function(){
    Route::post('service/create','createService');
});
Route::controller(ContentController::class)->group(function () {
    Route::get('content/locations', 'getLocations');
    Route::get('content/services', 'getServices');
    Route::get('content/categories', 'getCategories');
    Route::get('content/brands/{id}', 'getBrandById');
    Route::get('content/car/brands', 'getBrands');
    Route::get('/products/cars','getCars');
});
Route::controller(ProductController::class)->group(function () {
   
    Route::get('/products/cars','getCars');
});
