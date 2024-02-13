<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\TVController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\VotingPlaceController;
use App\Http\Controllers\VotingResultController;
use App\Http\Controllers\VotingZoneController;

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

    Route::prefix('tv')->controller(TVController::class)->group(function () {
        Route::get('get-suara1', 'getSuara1');
        Route::get('get-suara2', 'getSuara2');
        Route::get('get-suara3', 'getSuara3');
        Route::get('{id}', 'index');
    });

    Route::prefix('administrators')->controller(AdminController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('parties')->controller(PartyController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('candidates')->controller(CandidateController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('voting-zones')->controller(VotingZoneController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('districts')->controller(DistrictController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('villages')->controller(VillageController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('voting-places')->controller(VotingPlaceController::class)->group(function () {
        Route::get('/', 'index');
    });
});
