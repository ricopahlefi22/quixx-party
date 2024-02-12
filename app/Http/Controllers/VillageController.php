<?php

namespace App\Http\Controllers;

use App\Models\Village;

class VillageController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Kelurahan/Desa';
        $data['villages'] = Village::orderBy('city_id', 'asc')->orderBy('name', 'asc')->get();

        return view('village.index', $data);
    }
}
