<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/{username}', [\App\Http\Controllers\SiteController::class, 'getSiteByUser']);

Route::get('/{username}/{page_slug}', [\App\Http\Controllers\PageController::class, 'get']);