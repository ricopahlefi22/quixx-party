<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Village;
use App\Models\WebConfig;
use Illuminate\Support\Facades\Auth;

class VillageController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Kelurahan/Desa';
        $data['web'] = WebConfig::first();

        if (Auth::user()->level == true) {
            $data['villages'] = Village::orderBy('city_id', 'asc')->orderBy('name', 'asc')->get();
        } else {
            $data['villages'] = Village::where('voting_zone_id', Auth::user()->voting_zone_id)->orderBy('name', 'asc')->get();
        }

        return view('village.index', $data);
    }
}
