<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use App\Models\VotingResult;
use App\Models\VotingZone;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data['title'] = 'Beranda';

        if (Auth::user()->level == true) {
            $data['voting_result_count'] = VotingResult::count();
            $data['district_count'] = District::count();
            $data['village_count'] = Village::count();
            $data['voting_place_count'] = VotingPlace::count();
        } else {
            $data['voting_result_count'] = VotingZone::where('voting_zone_id', Auth::user()->voting_zone_id)->count();
            $data['district_count'] = District::where('voting_zone_id', Auth::user()->voting_zone_id)->count();
            $data['village_count'] = Village::where('voting_zone_id', Auth::user()->voting_zone_id)->count();
            $data['voting_place_count'] = VotingPlace::where('voting_zone_id', Auth::user()->voting_zone_id)->count();
        }

        return view('dashboard', $data);
    }
}
