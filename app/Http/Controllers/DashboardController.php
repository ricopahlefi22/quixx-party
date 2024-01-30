<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function master()
    {
        return view('dashboard');
    }
}
