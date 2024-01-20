<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LandingPageController extends Controller
{
    public function index()
    {
        $sliders = Slider::query()->active()->take(6)->get();
        $blogs = Post::query()->active()->blog()->with('postmeta:meta_key,meta_value')->take(6)->get();
        return view(themeLocation(). '.index',compact('sliders','blogs'));
    }
    public function blogDetails($slug)
    {
        $blog = Post::where('slug', $slug)->firstOrFail();
        $blogmeta = $blog->postmeta;
        return view(themeLocation().'.blog-details',compact('blog','blogmeta'));
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