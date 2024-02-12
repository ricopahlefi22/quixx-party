<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Daerah Pemilihan';
        $data['districts'] = District::orderBy('city_id', 'asc')->orderBy('name', 'asc')->get();

        return view('district.index', $data);
    }
}
