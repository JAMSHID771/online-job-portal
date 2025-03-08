<?php
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/job-details', [PageController::class, 'jobDetails']);
Route::get('/job-listings', [PageController::class, 'jobListings']);
