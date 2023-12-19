<?php
use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataDapilController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataDesaController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataKabupatenController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataKandidatController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataKecamatanController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataPartaiController;
use App\Http\Controllers\Master\MasterData\MasterMasterdataTpsController;
use Illuminate\Support\Facades\Route;

Route::prefix('master-data')->group(function () {

    Route::controller(MasterMasterdataDapilController::class)->group(function () {
        Route::get('dapil', 'index');
    });

    Route::controller(MasterMasterdataDesaController::class)->group(function () {
        Route::get('desa', 'index');
    });
    Route::controller(MasterMasterdataKabupatenController::class)->group(function () {
        Route::get('kabupaten', 'index');
    });

    Route::controller(MasterMasterdataKandidatController::class)->group(function () {
        Route::get('kandidat', 'index');
    });

    Route::controller(MasterMasterdataKecamatanController::class)->group(function () {
        Route::get('kecamatan', 'index');
    });

    Route::controller(MasterMasterdataPartaiController::class)->group(function () {
        Route::get('partai', 'index');
    });

     Route::controller(MasterMasterdataTpsController::class)->group(function () {
        Route::get('tps', 'index');
        Route::get('card', 'card');
    });

});
