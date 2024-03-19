<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Contactpage;


Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submitForm');
Route::post('/contact', [Contactpage::class, 'submit'])->name('contact.submit');

Route::get('/', [PageController::class, 'index']);
Route::get('/who-we-are', [PageController::class, 'about'])->name('about');
Route::get('/website/landing-page', [PageController::class, 'landingPage'])->name('landingPage');
Route::get('/website/dynamic-website', [PageController::class, 'dynamicWebsite'])->name('dynamicWebsite');
Route::get('/website/wordpress-website', [PageController::class, 'wordpressWebsite'])->name('wordpressWebsite');
Route::get('/website/cms', [PageController::class, 'cms'])->name('cms');
Route::get('/marketing/social-media-manager', [PageController::class, 'socialmedia_manager'])->name('socialmedia_manager');
Route::get('/marketing/social-media-marketing', [PageController::class, 'socialmedia_marketing'])->name('socialmedia_marketing');
Route::get('/marketing/search-engine-optimization', [PageController::class, 'seo'])->name('seo');
Route::get('/production/social-media-ads-design', [PageController::class, 'socialmedia_ads_design'])->name('socialmedia_ads_design');
Route::get('/contact', [PageController::class, 'contact_us'])->name('contact');