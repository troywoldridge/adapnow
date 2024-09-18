<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route to display the CSV upload form
Route::get('/upload-csv', function () {
    return view('upload_csv');  // This should be the Blade file with your form
});

// Route for importing CSV data
Route::post('/import-csv', [ProductController::class, 'importCsv'])->name('import.csv');
