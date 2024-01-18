<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LandingPageController extends Controller
{
    public function index()
    {
        return view(themeLocation(). '.index');
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