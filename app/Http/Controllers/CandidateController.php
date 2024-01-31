<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Party;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CandidateController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Calon Legislatif';
        $data['parties'] = Party::all();

        if ($request->ajax()) {
            return DataTables::of(Candidate::all())
                ->addIndexColumn()
                ->addColumn('name', function (Candidate $candidate) {
                    if (empty($candidate->photo)) {
                        return '<span>' . $candidate->name . '</span>';
                    } else {
                        return '<a class="image-popup-no-margins" href="' . asset($candidate->photo) . '">
                        <img src="' . asset($candidate->photo) . '" class="avatar-sm img-thumbnail rounded-circle">
                        </a> <span>' . $candidate->name . '</span>';
                    }
                })
                ->addColumn('party', function (Candidate $candidate) {
                    return '<a class="image-popup-no-margins" href="' . asset($candidate->party->logo) . '">
                    <img src="' . asset($candidate->party->logo) . '" class="avatar-sm img-thumbnail rounded-circle">
                    </a> <span>' . $candidate->party->name . '</span>';
                })
                ->addColumn('voting_result', function (Candidate $candidate) {
                    $totalVotingResult = 0;
                    foreach ($candidate->votingResult as $votingResult) {
                        $totalVotingResult += $votingResult->number;
                    }
                    return $totalVotingResult . ' Suara';
                })
                ->addColumn('action', function (Candidate $candidate) {
                    $btn = '<button data-id="' . $candidate->id . '"  class="btn btn-sm btn-warning edit" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button> ';
                    // $btn .= '<button data-id="' . $candidate->id . '"  class="btn btn-sm btn-danger delete" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></button> ';
                    return '<div class="btn-group">' . $btn . '</div>';
                })
                ->rawColumns(['name', 'party', 'action'])
                ->make(true);
        }

        return view('owner.candidate.index', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'party_id' => 'required',
        ], Candidate::$validationMessage);

        $photo = $request->hidden_photo;

        if ($request->file('photo')) {
            $path = 'public/candidate-photos/';
            $file = $request->file('photo');
            $file_name = $request->id_number . '-[' . time() . '].' . $file->getClientOriginalExtension();

            $file->storeAs($path, $file_name);
            $photo = "storage/candidate-photos/" . $file_name;
        }

        $data = Candidate::updateOrCreate([
            'id' => $request->id,
        ], [
            'photo' => $photo,
            'number' => $request->number,
            'name' => $request->name,
            'gender' => $request->gender,
            'city' => $request->city,
            'party_id' => $request->party_id,
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah ditambahkan',
            ]);
        } else {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah diperbaharui.',
            ]);
        }
    }

    function check(Request $request)
    {
        $data = Candidate::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = Candidate::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
