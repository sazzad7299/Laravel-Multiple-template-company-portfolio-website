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
        $sliders = Slider::query()->active()->take(6)->with('category:id,title')->get();
        $blogs = Post::query()
                        ->active()
                        ->blog()
                        ->with('category:id,post_id,meta_value')
                        ->take(6)
                        ->get();
        $gallerys = Post::query()
                        ->active()
                        ->gallery()
                        ->with('category:id,post_id,meta_value')
                        ->take(6)
                        ->get();
        $projects = Post::query()
                        ->active()
                        ->project()
                        ->with('category:id,post_id,meta_value')
                        ->take(6)
                        ->get();
        $services = Post::query()
                        ->active()
                        ->service()
                        ->with('category:id,post_id,meta_value')
                        ->take(6)
                        ->get();
        $portfolios = Post::query()
                        ->active()
                        ->portfolio()
                        ->with('category:id,post_id,meta_value')
                        ->latest()
                        ->get();
        $featureds = Post::query()
                        ->active()
                        ->featured()
                        ->with('category:id,post_id,meta_value')
                        ->latest()
                        ->get();
        $teams = Post::query()
                        ->active()
                        ->team()
                        ->with('postmeta:id,post_id,meta_key,meta_value')
                        ->with('category:id,post_id,meta_value')
                        ->latest()
                        ->get();
        $testiominals = Post::query()
                        ->active()
                        ->testiominal()
                        ->with('postmeta:id,post_id,meta_key,meta_value')
                        ->with('category:id,post_id,meta_value')
                        ->latest()
                        ->get();
        return view($this->activeTemplate. '.index',compact('sliders','blogs','projects','services','portfolios','featureds','teams','testiominals','gallerys'));
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
        return view($this->activeTemplate.'.blog-details',compact('blog'));
    }
    public function galleryDetails($slug)
    {
        $gallery = Post::where('slug', $slug)->firstOrFail();
        $blogmeta = $gallery->postmeta;
        foreach($blogmeta as $item){
            if($item->meta_key =='gallery')
                $gallery[$item->meta_key] = json_decode($item->meta_value);
            else
                $gallery[$item->meta_key] = $item->meta_value;
        }
        return view($this->activeTemplate.'.gallery-details',compact('gallery'));
    }
    public function serviceDetails($slug)
    {
        $service = Post::where('slug', $slug)->firstOrFail();
        $blogmeta = $service->postmeta;
        foreach($blogmeta as $item){
            if($item->meta_key =='gallery')
            $service[$item->meta_key] = json_decode($item->meta_value);
            else
            $service[$item->meta_key] = $item->meta_value;
        }
        return view($this->activeTemplate.'.service-details',compact('service'));
    }
    public function projectDetails($slug)
    {
        $project = Post::where('slug', $slug)->firstOrFail();
        $blogmeta = $project->postmeta;
        foreach($blogmeta as $item){
            if($item->meta_key =='gallery')
            $project[$item->meta_key] = json_decode($item->meta_value);
            else
            $project[$item->meta_key] = $item->meta_value;
        }
        return view($this->activeTemplate.'.project-details',compact('project'));
    }
}
