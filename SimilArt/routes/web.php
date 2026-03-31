<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
})->name('index');


Route::get('/api/deezer/search', function () {
    $query = request('q');
    $response = \Illuminate\Support\Facades\Http::get('https://api.deezer.com/search/artist', [
        'q' => $query,
        'limit' => 1
    ]);
    return response()->json($response->json());
});

Route::get('/api/deezer/artist', function () {
    $id = request('id');
    $response = \Illuminate\Support\Facades\Http::get("https://api.deezer.com/artist/{$id}");
    return response()->json($response->json());
});

Route::get('/api/deezer/top-track', function () {
    $id = request('id');
    $response = \Illuminate\Support\Facades\Http::get("https://api.deezer.com/artist/{$id}/top?limit=5");
    return response()->json($response->json());
});

Route::get('/api/deezer/similar', function () {
    $id = request('id');
    $response = \Illuminate\Support\Facades\Http::get("https://api.deezer.com/artist/{$id}/related?limit=12");
    return response()->json($response->json());
});
