<?php

namespace App\Http\Controllers\Master\Perhitungan-Cepat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterPerhitunganKecamatanController extends Controller
{
    function index(){
        return view('master.perhitungan-cepat.kecamatan.index');
    }
}
