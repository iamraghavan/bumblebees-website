<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submitForm');


Route::get('/', [PageController::class, 'index']);
Route::get('/who-we-are', [PageController::class, 'about'])->name('about');
Route::get('/website/landing-page', [PageController::class, 'landingPage'])->name('landingPage');
Route::get('/website/dynamic-website', [PageController::class, 'dynamicWebsite'])->name('dynamicWebsite');
Route::get('/website/wordpress-website', [PageController::class, 'wordpressWebsite'])->name('wordpressWebsite');
