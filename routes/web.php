<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default route for welcome page
Route::get('/', function () {
    return view('home');
});

// Route for displaying the CSV upload form
Route::get('/upload-csv', function () {
    return view('upload_csv');  // Blade file for the form
});

// Route for home page
Route::get('/home', function () {
    return view('home');
});

// Route for importing CSV data
Route::post('/import-csv', [ProductController::class, 'importCsv'])->name('import.csv');
