<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\TripController;

// Home page
Route::get('/', function () {
    return view('home');
});

// Recommendation routes
Route::get('/recommend', [RecommendationController::class, 'showForm'])->name('recommend.form');
Route::post('/recommend', [RecommendationController::class, 'calculate'])->name('recommend.calculate');

// Trip routes
Route::get('/trips/{id}', [TripController::class, 'show']);

// Static pages
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog.index');
});
