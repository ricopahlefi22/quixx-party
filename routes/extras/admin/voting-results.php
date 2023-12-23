<?php

use App\Http\Controllers\Admin\VotingResultController;
use Illuminate\Support\Facades\Route;

Route::controller(VotingResultController::class)->group(function () {
    Route::prefix('voting-results')->group(function () {
        Route::get('/', 'index');
        Route::get('district/{id}', 'district');
        Route::get('village/{id}', 'village');
    });

    Route::prefix('input-voting-results')->group(function () {
        Route::get('/', 'inputIndex');
        Route::get('{id}', 'inputVotingPlace');
        Route::post('store', 'store');
    });
});
