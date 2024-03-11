<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function landingPage()
    {
        return view('pages.website.landing-page');
    }

    public function dynamicWebsite()
    {
        return view('pages.website.dynamic-website');
    }

    public function wordpressWebsite()
    {
        return view('pages.website.wordpress-website');
    }
}
