<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\ProfileController;

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
        Route::get('get-suara1/{id}', 'getSuara1');
        Route::get('get-suara2/{id}', 'getSuara2');
        Route::get('get-suara3/{id}', 'getSuara3');
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

     Route::prefix('profil')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/update', 'update');
        Route::get('/change-password', 'updatePassword');
    });

    Route::prefix('input-c1')->controller(VotingResultController::class)->group(function () {
        Route::get('{id}', 'index');
        Route::post('store', 'store');
    });
});
