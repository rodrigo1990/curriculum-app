<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/site/{username}', [\App\Http\Controllers\SiteController::class, 'getSiteByUser']);

Route::get('/site/{username}/{page_id}', [\App\Http\Controllers\PageController::class, 'get']);