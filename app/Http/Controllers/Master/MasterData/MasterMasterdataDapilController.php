<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VotingZone;
use App\Models\City;

class MasterMasterdataDapilController extends Controller
{
    function index(){
        $dapil = VotingZone::count();
        $data['dapilName'] = "Dapil-".$dapil + 1;
        $data['list_city'] = City::all(); 
        $data['list_vote_zones'] = VotingZone::all(); 
        return view('master.master-data.dapil.index',$data);
    }

    function store(){
        $input = new VotingZone;
        $input->name = request('name');
        $input->city_id = request('city_id');
        $input->save();
        return back()->with('success','Successfull added');
    }
}
