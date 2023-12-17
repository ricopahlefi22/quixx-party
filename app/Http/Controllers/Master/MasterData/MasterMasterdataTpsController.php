<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterMasterdataTpsController extends Controller
{
    function index(){
        return view('master.master-data.tps.index');
    }
}
