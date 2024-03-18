<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $activeTemplate;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->activeTemplate = themeLocation();
            return $next($request);
        });
    }
}
