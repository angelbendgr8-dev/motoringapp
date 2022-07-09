<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
use App\Http\Livewire\Services\AddService;
use App\Http\Livewire\Category\AddCategory;
use App\Http\Livewire\Category\EditCategory;
use App\Http\Livewire\Category\ViewCategory;
use App\Http\Livewire\Services\EditService;
use App\Http\Livewire\Services\ManageServices;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-login', Login::class)->name('admin.login');


Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // Route::get('/dashboard',  () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');


    Route::get('/admin/home', Dashboard::class)->name('admin.home');

    // Services Routes
    Route::get('/admin/add/service',AddService::class)->name('admin.add.services');
    Route::get('/admin/edit/service/{id}',EditService::class)->name('admin.edit.service');
    Route::get('/admin/manage/services',ManageServices::class)->name('admin.manage.services');
    // Category Routes
    Route::get('/admin/add/category',AddCategory::class)->name('admin.add.category');
    Route::get('/admin/edit/category/{id}',EditCategory::class)->name('admin.edit.category');
    Route::get('/admin/manage/categories',ViewCategory::class)->name('admin.manage.categories');
});

// require __DIR__ . '/auth.php';
