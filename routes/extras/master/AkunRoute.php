<?php
use App\Http\Controllers\Master\MasterAkunController;
use Illuminate\Support\Facades\Route;

    Route::controller(MasterAkunController::class)->group(function () {
        Route::get('akun-admin', 'index');
        Route::post('akun-admin/create', 'store');
    });

