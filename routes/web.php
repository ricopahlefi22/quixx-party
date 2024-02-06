<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TVController;
use App\Http\Controllers\VotingResultController;

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginProcess');
    Route::get('forgot-password', 'forgotPassword');
    Route::post('forgot-password', 'forgotPasswordProcess');
    Route::get('reset-password', 'resetPassword');
    Route::post('reset-password', 'resetPasswordProcess');
    Route::post('otp', 'otp');
    Route::get('logout', 'logout');
});
Route::middleware('auth:web')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard']);
    Route::get('beranda', [DashboardController::class, 'dashboard']);

    Route::prefix('voting-results')->controller(VotingResultController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('{id}', 'votingResult');
        Route::post('store', 'store');
    });

    Route::prefix('tv')->controller(TVController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('{id}', 'tv');
        Route::post('store', 'store');
    });
});
