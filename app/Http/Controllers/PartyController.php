<?php

namespace App\Http\Controllers;

use App\Models\Party;

class PartyController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Partai';
        $data['parties'] = Party::all();

        return view('party.index', $data);
    }
}
