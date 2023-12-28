<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
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


// START CONTROLLER ADMIN
Route::middleware('auth')->group(function () {
    include 'extras/master/BerandaRoute.php';
    include 'extras/master/MasterDataRoute.php';
    include 'extras/master/PerhitunganCepatRoute.php';

});




// START CONTROLLER MASTER
Route::group(['domain' => 'master.localhost'], function () {

    include 'extras/master/BerandaRoute.php';
    include 'extras/master/MasterDataRoute.php';
    include 'extras/master/PerhitunganCepatRoute.php';

});
// END CONTROLLER MASTER-------------------------------------



// START CONTROLLER ADMIN
Route::controller(AdminController::class)->group(function () {
    Route::get('beranda', 'beranda');

});

 include 'extras/admin/voting-results.php';



// Component example
Route::prefix('component')->group(function () {
    Route::controller(ComponentController::class)->group(function () {
        Route::get('card', 'card');
    });
});

Route::get('/', function () {
   return view("admin.beranda");
});

