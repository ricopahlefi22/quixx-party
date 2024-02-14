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
        $parties = Party::all();

        $file_city = $request->hidden_file;

        if ($request->file('file')) {
            $path = 'public/voting-result-file/';
            $file_city = $request->file('file');
            $file_city_name = $request->voting_place_id . '-[' . time() . '].' . $file_city->getClientOriginalExtension();

            $file_city->storeAs($path, $file_city_name);
            $file_city = "storage/voting-result-file/" . $file_city_name;
        }

        $file_province = $request->hidden_file;

        if ($request->file('file')) {
            $path = 'public/voting-result-file/';
            $file_province = $request->file('file');
            $file_province_name = $request->voting_place_id . '-[' . time() . '].' . $file_province->getClientOriginalExtension();

            $file_province->storeAs($path, $file_province_name);
            $file_province = "storage/voting-result-file/" . $file_province_name;
        }

        $votingPlace = VotingPlace::findOrFail($request->voting_place_id);
        $votingPlace->voting_result_file_city = $file_city;
        $votingPlace->voting_result_file_province = $file_province;
        $votingPlace->save();

        foreach ($parties as $party) {
            $votingResult = VotingResult::where('party_id', $party->id)->where('voting_place_id', $request->voting_place_id)->whereNull('candidate_id')->first();
            if ($votingResult) {
                $votingResult->number = is_null($request->{"number_voters_party_" . $party->id}) ? 0 : $request->{"number_voters_party_" . $party->id};
                $votingResult->save();
            } else {
                if ($request->{"number_voters_party_province_" . $party->id}) {
                    $data = new VotingResult;
                    $data->voting_place_id = $votingPlace->id;
                    $data->village_id = $votingPlace->village_id;
                    $data->district_id = $votingPlace->district_id;
                    $data->voting_zone_id = $votingPlace->voting_zone_id;
                    $data->city_id = $votingPlace->city_id;
                    $data->party_id = $party->id;
                    $data->level = 'Provinsi';
                    $data->number = $request->{"number_voters_party_province_" . $party->id};
                    $data->save();
                } elseif ($request->{"number_voters_party_city_" . $party->id}) {
                    $data = new VotingResult;
                    $data->voting_place_id = $votingPlace->id;
                    $data->village_id = $votingPlace->village_id;
                    $data->district_id = $votingPlace->district_id;
                    $data->voting_zone_id = $votingPlace->voting_zone_id;
                    $data->city_id = $votingPlace->city_id;
                    $data->party_id = $party->id;
                    $data->level = 'Kabupaten';
                    $data->number = $request->{"number_voters_party_city_" . $party->id};
                    $data->save();
                } else {
                }
            }
        }

        foreach ($candidates as $candidate) {
            $votingResult = VotingResult::where('candidate_id', $candidate->id)->where('voting_place_id', $request->voting_place_id)->first();
            if ($votingResult) {
                $votingResult->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                $votingResult->save();
            } else {
                if ($candidate->level == 'Provinsi') {
                    if ($request->{"number_voters_candidate_" . $candidate->id}) {
                        $data = new VotingResult;
                        $data->voting_place_id = $votingPlace->id;
                        $data->village_id = $votingPlace->village_id;
                        $data->district_id = $votingPlace->district_id;
                        $data->city_id = $votingPlace->city_id;
                        $data->party_id = $candidate->party_id;
                        $data->candidate_id = $candidate->id;
                        $data->level = 'Provinsi';
                        $data->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                        $data->save();
                    }
                } else {
                    if ($request->{"number_voters_candidate_" . $candidate->id}) {
                        $data = new VotingResult;
                        $data->voting_place_id = $votingPlace->id;
                        $data->village_id = $votingPlace->village_id;
                        $data->district_id = $votingPlace->district_id;
                        $data->voting_zone_id = $votingPlace->voting_zone_id;
                        $data->city_id = $votingPlace->city_id;
                        $data->party_id = $candidate->party_id;
                        $data->candidate_id = $candidate->id;
                        $data->level = 'Kabupaten';
                        $data->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                        $data->save();
                    }
                }
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
