<?php

namespace App\Http\Controllers\Master\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Village;

class MasterMasterdataDesaController extends Controller
{
    function index(){
        $data['list_village'] = Village::all();
        return view('master.master-data.desa.index',$data);
    }
}
