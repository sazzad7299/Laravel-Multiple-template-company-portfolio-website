<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class,'index'])->name('landing');
Route::get('/project/{details}', [LandingPageController::class,'projectDetails'])->name('projectDetails');
Route::get('/services/{details}', [LandingPageController::class,'serviceDetails'])->name('serviceDetails');
Route::get('/blog/{details}', [LandingPageController::class,'blogDetails'])->name('blogDetails');

Auth::routes();
Route::group(['prefix' => '/admin', 'as' => 'admin.',  'middleware' => ['auth']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('blog', PostController::class);
    

});