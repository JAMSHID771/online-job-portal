<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/job-details', [PageController::class, 'jobDetails'])->name('job.details');
Route::get('/job-listings', [PageController::class, 'jobListings'])->name('job.listings');