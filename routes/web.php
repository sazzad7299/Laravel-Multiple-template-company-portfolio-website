<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TestiominalController;

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
Route::get('/gallery/{details}', [LandingPageController::class,'galleryDetails'])->name('galleryDetails');

Auth::routes();
Route::group(['prefix' => '/admin', 'as' => 'admin.',  'middleware' => ['auth']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('blog', PostController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('team', TeamController::class);
    Route::resource('testiominal', TestiominalController::class);
    Route::resource('settings', SettingsController::class);
});
