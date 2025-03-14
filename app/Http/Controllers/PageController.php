<?php

// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index'); // yoki o'z sahifangiz
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function jobDetails()
    {
        return view('job-details');
    }

    public function jobListings()
    {
        return view('job-listings');
    }
}
