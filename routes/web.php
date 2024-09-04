<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/google-maps-key', function () {
    return response()->json(['api_key' => config('services.google_maps.api_key')]);
});

Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/politicas', function() {
    return view('privacy-terms');
});
Route::get('/termos', function() {
    return view('use-terms');
});

Route::get('/aplicativos', function() {
    return view('download-app');
});

Route::get('/lista-de-fretes', function() {
    return view('freight-list');
});

Route::get('/lista-de-cidades', function() {
    return view('city-list');
});

Route::post('/api/save-choices', [ChatbotController::class, 'saveChoices']);
