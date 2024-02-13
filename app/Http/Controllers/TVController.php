<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use App\Models\VotingResult;
use App\Models\Party;
use App\Models\Candidate;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class TVController extends Controller
{
    function index()
    {
        $data['title'] = "TV Live";
        $data['web'] = WebConfig::first();

        $parties = $data['list_party'] = Party::all();
        foreach ($parties as $party) {
            $totalVotes = VotingResult::where('party_id', $party->id)->sum('number');
            $party->totalVotes = $totalVotes;
        }

        $candidates = $data['list_candidate'] = Candidate::where('party_id', 1)->get();
        foreach ($candidates as $candidate) {
            $totalVotes = VotingResult::where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotes = $totalVotes;
        }

        $candidatesAll = $data['list_candidate_all'] = Candidate::all();
        foreach ($candidatesAll as $candidate) {
            $totalVotesAll = VotingResult::where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;
        }

        return view('tv-full', $data);
    }



   
    function getSuara1(){


        $parties = $data['list_party'] = Party::all();
        $result = array();

        foreach ($parties as $party) {
            $totalVotesAll = VotingResult::where('party_id', $party->id)->sum('number');;
            $party->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'party_id' => $party->id,
                'party_name' => $party->short_name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }


    function getSuara2()
    {
        $candidates = $data['list_candidate'] = Candidate::all();
        $result = array();

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }

    function getSuara3()
    {
        $candidates = $data['list_candidate'] = Candidate::where('party_id', 1)->get();
        $result = array();

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }
    function tv(Request $request)
    {
        $data['title'] = 'TV Perolehan Suara';
        $data['web'] = WebConfig::first();
        $data['voting_result_count'] = VotingResult::count();
        $data['district_count'] = District::count();
        $data['village_count'] = Village::count();
        $data['voting_place_count'] = VotingPlace::count();

        $parties = $data['list_party'] = Party::all();
        foreach ($parties as $party) {
            $totalVotes = VotingResult::where('party_id', $data['web']->party_id)->sum('number');
            $party->totalVotes = $totalVotes;
        }

        $candidates = $data['list_candidate'] = Candidate::where('party_id', 1)->get();
        foreach ($candidates as $candidate) {
            $totalVotes = VotingResult::where('voting_zone_id', $request->id)->sum('number');
            $candidate->totalVotes = $totalVotes;
        }


        return view('tv', $data);
    }
}
