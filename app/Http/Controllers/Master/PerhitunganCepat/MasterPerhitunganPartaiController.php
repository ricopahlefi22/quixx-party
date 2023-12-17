<?php

namespace App\Http\Controllers\Master\Perhitungan-Cepat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterPerhitunganPartaiController extends Controller
{
    function index(){
        return view('master.perhitungan-cepat.partai.index');
    }
}
