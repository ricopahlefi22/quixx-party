<?php
use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\Master\PerhitunganCepat\MasterPerhitunganDesaController;
use App\Http\Controllers\Master\PerhitunganCepat\MasterPerhitunganKecamatanController;
use App\Http\Controllers\Master\PerhitunganCepat\MasterPerhitunganPartaiController;
use App\Http\Controllers\Master\PerhitunganCepat\MasterPerhitunganKeseluruhanController;
use App\Http\Controllers\Master\PerhitunganCepat\MasterPerhitunganTpsController;
use Illuminate\Support\Facades\Route;

Route::prefix('perhitungan-cepat')->group(function () {

    Route::controller(MasterPerhitunganDesaController::class)->group(function () {
        Route::get('desa', 'index');
    });

    Route::controller(MasterPerhitunganKecamatanController::class)->group(function () {
        Route::get('kecamatan', 'index');
    });
    Route::controller(MasterPerhitunganPartaiController::class)->group(function () {
        Route::get('partai', 'index');
    });

    Route::controller(MasterPerhitunganKeseluruhanController::class)->group(function () {
        Route::get('keseluruhan', 'index');
    });

    Route::controller(MasterPerhitunganTpsController::class)->group(function () {
        Route::get('tps', 'index');
    });


});
