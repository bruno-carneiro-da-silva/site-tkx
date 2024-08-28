<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/google-maps-key', function () {
    return response()->json(['api_key' => config('services.google_maps.api_key')]);
});
