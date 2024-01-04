<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthMasterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminVotingResultsController;
use App\Http\Controllers\Admin\AdminVotingPlaceController;
use App\Http\Controllers\ComponentController;

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



// START CONTROLLER MASTER
Route::group(['domain' => 'master.localhost'], function () {
    Route::middleware('web')->group(function () {
     include 'extras/master/BerandaRoute.php';
     include 'extras/master/MasterDataRoute.php';
     include 'extras/master/PerhitunganCepatRoute.php';
     include 'extras/master/AkunRoute.php';


 });



});

// END CONTROLLER MASTER-------------------------------------


Route::middleware('web')->group(function () {
// // START CONTROLLER ADMIN
    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');

    });
    Route::prefix('voting-results')->group(function(){
     Route::controller(AdminVotingResultsController::class)->group(function () {
        Route::get('voting-results', 'index');
        Route::get('city', 'city');
        Route::get('district', 'district');
        Route::get('village', 'village');
        Route::get('hasil-c1', 'hasilC1');

    });

 });

  Route::prefix('voting-place')->group(function(){
     Route::controller(AdminVotingPlaceController::class)->group(function () {
        Route::get('voting-results', 'index');
        Route::get('city', 'city');
        Route::get('district', 'district');
        Route::get('village', 'village');

    });

 });
    

});


