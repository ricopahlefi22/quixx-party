<?php
use App\Http\Controllers\Master\MasterController;
use Illuminate\Support\Facades\Route;

Route::controller(MasterController::class)->group(function () {
    Route::get('beranda', 'beranda');
});