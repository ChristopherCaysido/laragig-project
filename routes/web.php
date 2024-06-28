<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listing

Route::get('/', function() {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function (Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});
