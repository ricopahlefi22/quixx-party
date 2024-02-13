<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Daerah Pemilihan';

        if (Auth::user()->level == true) {
            $data['districts'] = District::orderBy('city_id', 'asc')->orderBy('name', 'asc')->get();
        } else {
            $data['districts'] = District::where('voting_zone_id', Auth::user()->voting_zone_id)->orderBy('name', 'asc')->get();
        }

        return view('district.index', $data);
    }
}
