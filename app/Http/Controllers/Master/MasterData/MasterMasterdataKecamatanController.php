<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\VotingZone;
use App\Models\City;


class MasterMasterdataKecamatanController extends Controller
{
    function index(){
        $data['list_zones'] = VotingZone::all();
        $data['list_city'] = City::all();
        $data['list_district'] = District::all();
        return view('master.master-data.kecamatan.index',$data);
    }
}
