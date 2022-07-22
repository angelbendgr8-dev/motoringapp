<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContentController;
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
    Route::get('content/car/brands', 'getBrands');
});
