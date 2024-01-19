<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LandingPageController extends Controller
{
    public function index()
    {
        $sliders = Slider::query()->active()->take(6)->get();
        return view(themeLocation(). '.index',compact('sliders'));
    }
    public function blogDetails()
    {
        return view('index');
    }
    public function serviceDetails()
    {
        return view('index');
    }
    public function projectDetails()
    {
        return view('index');
    }
}