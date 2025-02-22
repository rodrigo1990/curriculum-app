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


Route::prefix('admin')->group(function () {
    Route::middleware(['guest'])->post('/login',[\App\Http\Controllers\Admin\LoginController::class,'login']);
    Route::middleware('auth:sanctum')->group(function(){
        Route::prefix('curriculum')->group(function(){
            Route::post('/fill-personal-data',[\App\Http\Controllers\Admin\CurriculumPersonalDataController::class, 'create']);
        });
        Route::post('/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout']);
    });
});
