<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use App\Models\VotingPlace;
use App\Models\VotingResult;
use App\Models\Party;
use App\Models\Candidate;
use App\Models\VotingZone;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TVController extends Controller
{
    function city(Request $request)
    {
        $data['title'] = "TV Perolehan Suara";
        $data['web'] = WebConfig::first();
        $data['votingZone'] = VotingZone::findOrFail($request->id);

        $parties = $data['list_party'] = Party::all();
        foreach ($parties as $party) {
            $totalVotes = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('party_id', $party->id)->sum('number');
            $party->totalVotes = $totalVotes;
        }

        $candidates = $data['list_candidate'] = Candidate::where('party_id', $data['web']->party_id)->get();
        foreach ($candidates as $candidate) {
            $totalVotes = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotes = $totalVotes;
        }

        $candidatesAll = $data['list_candidate_all'] = Candidate::all();
        foreach ($candidatesAll as $candidate) {
            $totalVotesAll = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;
        }

        if (Auth::user()->level == true) {
            return view('tv-city', $data);
        } elseif ($request->id == Auth::user()->voting_zone_id) {
            return view('tv-city', $data);
        } else {
            return abort(404);
        }
    }

    function province(Request $request)
    {
        $data['title'] = "TV Perolehan Suara";
        $web = WebConfig::first();
        $candidates = $data['list_candidate'] = Candidate::where('level', 'Provinsi')->where('party_id', $web->party_id)->get();
        $result = array();

        $data['total_province_voter'] = VotingResult::where('level', 'Provinsi')->where('party_id', $web->party_id)->sum('number');
        $data['party_province_voter'] = VotingResult::where('level', 'Provinsi')->where('party_id', $web->party_id)->whereNull('candidate_id')->sum('number');

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('level', 'Provinsi')->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        if (Auth::user()->level == true) {
            return view('tv-province', $data);
        }

        return abort(404);
    }

    function getAllParty(Request $request)
    {
        $parties = $data['list_party'] = Party::all();
        $result = array();

        foreach ($parties as $party) {
            $totalVotesAll = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('party_id', $party->id)->sum('number');;
            $party->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'party_id' => $party->id,
                'party_name' => $party->short_name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }


    function getAllCandidate(Request $request)
    {
        $candidates = $data['list_candidate'] = Candidate::where('voting_zone_id', $request->id)->get();
        $result = array();

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }

    function getPartyCandidate(Request $request)
    {
        $web = WebConfig::first();
        $candidates = $data['list_candidate'] = Candidate::where('voting_zone_id', $request->id)->where('party_id', $web->party_id)->get();
        $result = array();

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('level', 'Kabupaten')->where('voting_zone_id', $request->id)->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }

    function getProvince(Request $request)
    {
        $web = WebConfig::first();
        $candidates = $data['list_candidate'] = Candidate::where('level', 'Provinsi')->where('party_id', $web->party_id)->get();
        $result = array();

        foreach ($candidates as $candidate) {
            $totalVotesAll = VotingResult::where('level', 'Provinsi')->where('candidate_id', $candidate->id)->sum('number');
            $candidate->totalVotesAll = $totalVotesAll;

            $result[] = array(
                'candidate_id' => $candidate->id,
                'candidate_name' => $candidate->name,
                'total_votes' => $totalVotesAll
            );
        }

        return response()->json($result);
    }
}
