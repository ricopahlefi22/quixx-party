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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class VotingResultController extends Controller
{
    function index()
    {
        if (Auth::guard('owner')->check()) {
            $data['title'] = 'Hasil Perhitungan Cepat';
            $data['districts'] = District::all();
            $data['villages'] = Village::all();
            $data['time'] = '2024/01/01';

            $partai = $data['parties'] = Party::all();
            foreach ($partai as $item) {
                $total_suara = VotingResult::where('party_id', $item->id)
                    ->sum('number');
                $item->total_suara = $total_suara;
            }

            $kandidat = $data['kandidat'] = Candidate::all();
            foreach ($kandidat as $item) {
                $total_suara_kandidat = VotingResult::where('candidate_id', $item->id)
                    ->sum('number');
                $item->total_suara_kandidat = $total_suara_kandidat;
            }

            return view('owner.voting-result.index', $data);
        }

        return abort(404);
    }

    function district(District $id)
    {
        if (Auth::guard('owner')->check()) {
            $data['title'] = 'Hasil Perhitungan Cepat/Kecamatan';
            $partai = $data['parties'] = Party::all();
            foreach ($partai as $item) {
                $total_suara = VotingResult::where('party_id', $item->id)
                    ->where('district_id', $id->id)
                    ->sum('number');
                $item->total_suara = $total_suara;
            }


            $kandidat = $data['kandidat'] = Candidate::all();
            foreach ($kandidat as $item) {
                $total_suara_kandidat = VotingResult::where('candidate_id', $item->id)
                    ->where('district_id', $id->id)
                    ->sum('number');
                $item->total_suara_kandidat = $total_suara_kandidat;
            }

            return view('owner.voting-result.district', $data);
        }

        return abort(404);
    }

    function inputIndex(Request $request)
    {
        $data['title'] = 'Data Hasil Perolehan Suara (C1)';

        if ($request->ajax()) {
            return DataTables::of(VotingPlace::all())
                ->addIndexColumn()
                ->addColumn('voting_place', function (VotingPlace $votingPlace) {
                    return $votingPlace->village->name . ' <strong>(TPS ' . $votingPlace->name . ')</strong>';
                })
                ->addColumn('district', function (VotingPlace $votingPlace) {
                    return $votingPlace->district->name;
                })
                ->addColumn('file', function (VotingPlace $votingPlace) {
                    return empty($votingPlace->voting_result_file) ? '-' : '<a href="' . $votingPlace->voting_result_file . '" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-file"></i> Lihat C1</a>';
                })
                ->addColumn('action', function (VotingPlace $votingPlace) {
                    if ($votingPlace->votingResult()->exists()) {
                        return '<a href="input-voting-results/' . Crypt::encrypt($votingPlace->id) . '"  class="btn btn-sm btn-dark">Perbarui C1 <i class="fa fa-arrow-alt-circle-right"></i></a> ';
                    } else {
                        return '<a href="input-voting-results/' . Crypt::encrypt($votingPlace->id) . '"  class="btn btn-sm btn-primary">Input C1 <i class="fa fa-arrow-alt-circle-right"></i></a> ';
                    }
                })
                ->rawColumns(['voting_place', 'file', 'action'])
                ->make(true);
        }

        if (Auth::guard('owner')->check()) {
            return view('owner.input-voting-result.index', $data);
        }

        return view('admin.input-voting-result.index', $data);
    }

    function inputVotingPlace(Request $request)
    {
        $data['title'] = 'Data Hasil Perolehan Suara (C1)';
        $data['votingPlace'] = VotingPlace::findOrFail(Crypt::decrypt($request->id));
        $data['own_parties'] = Party::where('id', WebConfig::first()->party_id)->get();
        $data['other_parties'] = Party::whereHas('candidates')->get()->except(WebConfig::first()->party_id);
        $data['parties'] = $data['own_parties']->merge($data['other_parties']);

        if (Auth::guard('owner')->check()) {
            return view('owner.input-voting-result.input-c1', $data);
        }

        return view('admin.input-voting-result.input-c1', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'voting_place_id' => 'required',
        ]);

        $candidates = Candidate::all();

        $file = $request->hidden_file;

        if ($request->file('file')) {
            $path = 'public/voting-result-file/';
            $file = $request->file('file');
            $file_name = $request->voting_place_id . '-[' . time() . '].' . $file->getClientOriginalExtension();

            $file->storeAs($path, $file_name);
            $file = "storage/voting-result-file/" . $file_name;
        }

        $votingPlace = VotingPlace::findOrFail($request->voting_place_id);
        $votingPlace->voting_result_file = $file;
        $votingPlace->save();

        foreach ($candidates as $candidate) {
            $votingResult = VotingResult::where('candidate_id', $candidate->id)->where('voting_place_id', $request->voting_place_id)->first();
            if ($votingResult) {
                $votingResult->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                $votingResult->save();
            } else {
                $data = new VotingResult;
                $data->voting_place_id = $votingPlace->id;
                $data->village_id = $votingPlace->village->id;
                $data->district_id = $votingPlace->district->id;
                $data->party_id = $candidate->party->id;
                $data->candidate_id = $candidate->id;
                $data->number = is_null($request->{"number_voters_candidate_" . $candidate->id}) ? 0 : $request->{"number_voters_candidate_" . $candidate->id};
                $data->save();
            }
        }

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data perolehan suara berhasil disimpan.',
        ]);
    }
}
