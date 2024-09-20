<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default route for the welcome page
Route::get('/', function () {
    return view('home');
});

// Route for displaying the CSV upload form
Route::get('/upload-csv', function () {
    return view('upload_csv');
});

// Route for home page
Route::get('/home', function () {
    return view('home');
});

// Route for importing CSV data
Route::post('/import-csv', [ProductController::class, 'importCsv'])->name('import.csv');

// Route to display standard business cards
Route::get('/business-cards', [ProductController::class, 'showBusinessCards'])->name('business-cards');

// Route for showing the business card detail page
Route::get('/business-cards/{slug}', [ProductController::class, 'showCardDetails'])->name('business-card.detail');
