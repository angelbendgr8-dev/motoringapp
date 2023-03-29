<?php

use App\Http\Livewire\AddFeature;
use App\Http\Livewire\Login;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product\Product;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\CarBrand\AddBrand;
use App\Http\Livewire\CarBrand\ViewBrands;
use App\Http\Livewire\Product\EditProduct;
use App\Http\Livewire\Request\EditRequest;
use App\Http\Livewire\Services\AddService;
use App\Http\Livewire\Category\AddCategory;
use App\Http\Livewire\Product\OtherProduct;
use App\Http\Livewire\Request\ViewRequests;
use App\Http\Livewire\Services\EditService;
use App\Http\Livewire\Category\EditCategory;
use App\Http\Livewire\Category\ViewCategory;
use App\Http\Livewire\Features;
use App\Http\Livewire\InspectionDetails;
use App\Http\Livewire\Services\ManageServices;
use App\Http\Livewire\Product\EditOtherProduct;
use App\Http\Livewire\ProductFeatures;
use App\Http\Livewire\ServiceLocation\AddLocation;
use App\Http\Livewire\ServiceLocation\EditLocation;
use App\Http\Livewire\ServiceLocation\ViewLocations;
use App\Http\Livewire\User\AddUser;
use App\Http\Livewire\User\ManageUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/link', function () {
    Artisan::call('storage:link');
});
Route::get('/admin-login', Login::class)->name('admin.login');


Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/admin/home', Dashboard::class)->name('admin.home');

        // Services Routes
        Route::get('/admin/add/service',AddService::class)->name('admin.add.services');
        Route::get('/admin/edit/service/{id}',EditService::class)->name('admin.edit.service');
        Route::get('/admin/manage/services',ManageServices::class)->name('admin.manage.services');
        // Category Routes
        Route::get('/admin/add/category',AddCategory::class)->name('admin.add.category');
        Route::get('/admin/edit/category/{id}',EditCategory::class)->name('admin.edit.category');
        Route::get('/admin/manage/categories',ViewCategory::class)->name('admin.manage.categories');
        // Location Routes
        Route::get('/admin/add/Location',AddLocation::class)->name('admin.add.location');
        Route::get('/admin/edit/location/{id}',EditLocation::class)->name('admin.edit.location');
        Route::get('/admin/manage/locations',ViewLocations::class)->name('admin.manage.locations');
        // Location Routes
        Route::get('/admin/add/brand',AddBrand::class)->name('admin.add.brand');
        Route::get('/admin/view/brands',ViewBrands::class)->name('admin.view.brands');

        //Products Routes
        Route::get('/admin/products', Product::class)->name('admin.manage.product');
        Route::get('/admin/features', Features::class)->name('admin.manage.features');
        Route::get('/admin/product/features/{product}', ProductFeatures::class)->name('admin.product.features');
        Route::get('/admin/add/features', AddFeature::class)->name('admin.add.feature');
        Route::get('/admin/other/products', OtherProduct::class)->name('admin.manage.other_product');
        Route::get('/admin/edit/product/{id}', EditProduct::class)->name('admin.edit.product');
        Route::get('/admin/inspect/product/{id}', InspectionDetails::class)->name('admin.inspect.product');
        Route::get('/admin/edit/other/product/{id}', EditOtherProduct::class)->name('admin.edit.other_product');

        // User Routes

        Route::get('/admin/users', ManageUser::class)->name('admin.manage.users');
        Route::get('/admin/add/user', AddUser::class)->name('admin.add.user');

        //Services Request
        Route::get('/admin/requests', ViewRequests::class)->name('admin.manage.requests');
        Route::get('/admin/edit/request/{id}', EditRequest::class)->name('admin.edit.request');
    });


});

// require __DIR__ . '/auth.php';