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
        foreach($blogmeta as $item){
            if($item->meta_key =='gallery')
            $blog[$item->meta_key] = json_decode($item->meta_value);
            else
            $blog[$item->meta_key] = $item->meta_value;
        }
        return view(themeLocation().'.blog-details',compact('blog'));
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