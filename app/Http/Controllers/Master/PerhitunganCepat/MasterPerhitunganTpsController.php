<?php

namespace App\Http\Controllers\Master\MasterData;
namespace App\Http\Controllers\Master\PerhitunganCepat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterPerhitunganTpsController extends Controller
{
    function index(){
        return view('master.perhitungan-cepat.tps.index');
    }
}
