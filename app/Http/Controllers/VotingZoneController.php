<?php

namespace App\Http\Controllers;

use App\Models\VotingZone;
use Illuminate\Http\Request;

class VotingZoneController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Daerah Pemilihan';
        $data['parties'] = VotingZone::orderBy('city_id', 'asc')->orderBy('name', 'asc')->get();

        return view('voting-zone.index', $data);
    }
}
