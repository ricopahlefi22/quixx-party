<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use App\Models\VotingResult;

class TVController extends Controller
{
    function tv()
    {
        $data['title'] = 'TV Perolehan Suara';
        $data['voting_result_count'] = VotingResult::count();
        $data['district_count'] = District::count();
        $data['village_count'] = Village::count();
        $data['voting_place_count'] = VotingPlace::count();
        return view('tv', $data);
    }
}
