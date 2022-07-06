<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
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
});

// require __DIR__ . '/auth.php';
