<?php

namespace App\Http\Controllers;

use Helori\LaravelSeo\Facades\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{


    public function index()
    {

        Seo::set('title', 'Sample Title Bumble Bees');
        Seo::set('description', 'Sample Description Bumble Bees');
        Seo::set('keyword', 'Sample Keywords, Bumble Bees');
        Seo::set('canonical', url('/'));
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

    public function cms()
    {
        return view('pages.website.cms');
    }


    public function socialmedia_manager()
    {
        return view('pages.marketing.social-media-manager');
    }

    public function socialmedia_marketing()
    {
        return view('pages.marketing.social-media-marketing');
    }

    public function seo()
    {
        return view('pages.marketing.search-engine-optimization');
    }


    public function socialmedia_ads_design()
    {
        return view('pages.production.social-media-ads-design');
    }


    public function contact_us()
    {
        return view('pages.contact');
    }

    public function __construct()
    {
        Seo::set('global-title', 'Bumble Bees IT Solution');
        Seo::set('global-description', 'Website description');

        Seo::set('logo-url', url('/images/bumble-bees-logo.svg'));
        Seo::set('latitude', 48.8256);
        Seo::set('longitude', 2.3258);

        Seo::set('email', 'itzbumblebees@gmail.com');
        Seo::set('phone', '+919942502245');
        Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr,Sa 09:00-20:00');
        Seo::set('street-address', '183/2, Dhermer Street, Collector Office Post');
        Seo::set('address-locality', 'Nagapattinam');
        Seo::set('address-region', 'Tamil Nadu');
        Seo::set('address-country', 'IN');
        Seo::set('postal-code', '611003');
        Seo::set('area-served', 'TN');

        Seo::setSimilarTo('https://www.facebook.com/bumblebeesindia');
        Seo::setSimilarTo('https://twitter.com/raghavanjeeva');
        Seo::setSimilarTo('https://www.linkedin.com/company/itzbumblebees/');
        Seo::setSimilarTo('https://instagram.com/bumblebees_india');

        Seo::setContactPoint([
            'type' => 'customer-service',
            'phone' => '+919942502245',
            'area-served' => 'IN',
            'opening-hours' => 'Mo,Tu,We,Th,Fr,Sa 09:00-20:00',
            'available-languages' => ['English', 'Tamil']
        ]);

        Seo::set('og-locale', 'fr_FR');
        Seo::set('og-image-url', 'facebook_image_url');
        Seo::set('og-image-type', 'image/jpeg');
        Seo::set('og-image-width', 1200);
        Seo::set('og-image-height', 630);

        Seo::set('fb-app-id', '717000599791753');
        Seo::set('twitter-sign', '@raghavanjeeva');
    }
}