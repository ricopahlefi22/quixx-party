<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Party;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CandidateController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Calon Legislatif';
        $data['candidates'] = Candidate::all();

        return view('candidate.index', $data);
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
