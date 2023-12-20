<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;

Route::group(['domain' => 'master.localhost'], function () {
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
    include 'extras/master/BerandaRoute.php';
    include 'extras/master/MasterDataRoute.php';
    include 'extras/master/PerhitunganCepatRoute.php';




});

// Component example
Route::prefix('component')->group(function () {
    Route::controller(ComponentController::class)->group(function () {
        Route::get('card', 'card');
    });
});

Route::get('/', function () {
 return view("admin.beranda");
});

