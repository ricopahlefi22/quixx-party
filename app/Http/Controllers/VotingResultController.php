<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\District;
use App\Models\Party;
use App\Models\Village;
use App\Models\VotingPlace;
use App\Models\VotingResult;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class VotingResultController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Hasil Perolehan Suara (C1)';
        $data['web'] = WebConfig::first();
        $data['votingPlace'] = VotingPlace::findOrFail($request->id);
        $data['own_parties'] = Party::where('id', $data['web']->party_id)->get();
        $data['other_parties'] = Party::whereHas('candidates')->get()->except(WebConfig::first()->party_id);
        $data['parties'] = $data['own_parties']->merge($data['other_parties']);

        return view('voting-result.index', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'voting_place_id' => 'required',
        ]);

        $candidates = Candidate::all();

        // $file = $request->hidden_file;

        // if ($request->file('file')) {
        //     $path = 'public/voting-result-file/';
        //     $file = $request->file('file');
        //     $file_name = $request->voting_place_id . '-[' . time() . '].' . $file->getClientOriginalExtension();

        //     $file->storeAs($path, $file_name);
        //     $file = "storage/voting-result-file/" . $file_name;
        // }

        $votingPlace = VotingPlace::findOrFail($request->voting_place_id);
        // $votingPlace->voting_result_file = $file;
        $votingPlace->save();

        foreach ($candidates as $candidate) {
            $votingResult = VotingResult::where('candidate_id', $candidate->id)->where('voting_place_id', $request->voting_place_id)->first();
            if ($votingResult) {
                $votingResult->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                $votingResult->save();
            } else {
                $data = new VotingResult;
                $data->voting_place_id = $votingPlace->id;
                $data->village_id = $votingPlace->village_id;
                $data->district_id = $votingPlace->district_id;
                $data->voting_zone_id = $votingPlace->voting_zone_id;
                $data->city_id = $votingPlace->city_id;
                $data->party_id = $candidate->party_id;
                $data->candidate_id = $candidate->id;
                $data->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                $data->save();
            }
        }

        // return response()->json([
        //     'code' => 200,
        //     'status' => 'Berhasil!',
        //     'message' => 'Data perolehan suara berhasil disimpan.',
        // ]);

        return redirect('voting-places');
    }
}
