<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


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

      include 'extras/master/NaldyRoute.php';
      include 'extras/master/RicoRoute.php';
      include 'extras/master/YusufRoute.php';


});

Route::get('/', function () {
   return view('login');
});