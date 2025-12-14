<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    Route::middleware(['guest'])->post('/register',[\App\Http\Controllers\Admin\RegisterController::class,'register']);
    Route::middleware(['guest'])->get('/get-username/{username}',[\App\Http\Controllers\UsersController::class,'getUserByUsername']);
    Route::middleware('auth:sanctum')->group(function(){
        Route::prefix('curriculum')->group(function(){
            Route::post('/fill-personal-data',[\App\Http\Controllers\Admin\CurriculumPersonalDataController::class, 'create']);
        });
        Route::post('/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout']);
    });

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/email/verify', function () {
            return view('auth.verify-email');
        })->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();
            return redirect('/home');
        })->name('verification.verify');

        Route::post('/email/resend', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();
            return back()->with('message', 'Verification link sent!');
        })->name('verification.resend');
    });
});
