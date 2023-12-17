<?php

namespace App\Http\Controllers\Master\Perhitungan-Cepat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterPerhitunganDesaController extends Controller
{
    function index(){
        return view('master.perhitungan-cepat.desa.index');
    }
}
