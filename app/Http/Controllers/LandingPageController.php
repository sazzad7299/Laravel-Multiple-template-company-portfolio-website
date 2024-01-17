<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index');
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