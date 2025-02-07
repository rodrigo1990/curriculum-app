<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('site/{username}', [\App\Http\Controllers\SiteController::class, 'getSiteByUser']);
Route::get('page/{username}/{page_slug}', [\App\Http\Controllers\PageController::class, 'get']);
Route::get('/users/get', [\App\Http\Controllers\UsersController::class, 'getAllUsers']);


Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::post('/login',[\App\Http\Controllers\Admin\LoginController::class,'login']);

    Route::get('/isAuthenticated', [\App\Http\Controllers\Admin\LoginController::class, 'isAuthenticated'])
        ->withoutMiddleware(['auth:sanctum']);
;
});
