<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VotingPlaceController;
use App\Http\Controllers\VotingResultController;

// START CONTROLLER MASTER
Route::group(['domain' => 'master.' . env('DOMAIN')], function () {
    Route::middleware('auth:web')->group(function () {
        Route::get('login', function () {
            return abort(404);
        });

        Route::get('/', [DashboardController::class, 'master']);
        Route::get('beranda', [DashboardController::class, 'master']);
    });
    // END CONTROLLER MASTER

    // // START CONTROLLER ADMIN
    Route::get('/', [DashboardController::class, 'admin']);
    Route::get('beranda', [DashboardController::class, 'admin']);

    // Route::controller(AdminController::class)->group(function () {
    //     Route::get('beranda', 'beranda');
    // });

    Route::prefix('voting-results')->group(function () {
        Route::controller(VotingResultController::class)->group(function () {
            Route::get('voting-results', 'index');
            Route::get('city', 'city');
            Route::get('district', 'district');
            Route::get('village', 'village');
            Route::get('hasil-c1', 'hasilC1');
        });
    });

    Route::prefix('voting-place')->group(function () {
        Route::controller(VotingPlaceController::class)->group(function () {
            Route::get('voting-results', 'index');
            Route::get('city', 'city');
            Route::get('district', 'district');
            Route::get('village', 'village');
        });
    });
});

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
