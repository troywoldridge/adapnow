<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home page route
Route::get('/', function () {
    return view('home');
});

// Business Cards Routes
Route::get('/business-cards', [ProductController::class, 'showBusinessCards'])->name('business-cards');

// Route to display details of specific business cards
Route::get('/business-cards/{slug}', [ProductController::class, 'showCardDetails'])->name('business-card.detail');
