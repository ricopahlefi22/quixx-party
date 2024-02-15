<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\VotingZone;
use App\Models\WebConfig;

class PartyController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Partai';
        $data['web'] = WebConfig::first();
        $data['parties'] = Party::all();
        $data['votingZones'] = VotingZone::where('city_id', 1)->get();

        return view('party.index', $data);
    }
}
