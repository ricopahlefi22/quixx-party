<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VotingPlace;

class MasterMasterdataTpsController extends Controller
{
    function index(){
        $data['list_voting_place'] = VotingPlace::all();
        return view('master.master-data.tps.index',$data);
    }
    function card(){
        return view('master.master-data.tps.card');
    }
}
