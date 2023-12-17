<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterMasterdataDapilController extends Controller
{
    function index(){
        return view('master.master-data.dapil.index');
    }
}
