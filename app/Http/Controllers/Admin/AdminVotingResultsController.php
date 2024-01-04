<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Candidate;
use App\Models\District;
use App\Models\Party;
use App\Models\VotingPlace;
use App\Models\VotingResult;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Village;

class AdminVotingResultsController extends Controller
{
   function index(){

    return view('admin.voting-results.index');
   }



   function city(){

    return view('admin.voting-results.city');
   }


    function village(){

    return view('admin.voting-results.village');
   }
}
