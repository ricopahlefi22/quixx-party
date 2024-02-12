<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\VotingPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class VotingPlaceController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Tempat Pemungutan Suara';
        $data['districts'] = District::all();
        $data['voting_places'] = VotingPlace::all();

        return view('voting-place.index', $data);
    }

    function json(Request $request)
    {
        $votingPlace = VotingPlace::where('village_id', $request->village_id)->get();
        return response()->json($votingPlace);
    }

    function store(Request $request)
    {
        $request->validate([
            'district_id' => 'required',
            'village_id' => 'required',
            'name' => 'required',
            'address' => 'required',
        ], VotingPlace::$validationMessage);

        $data = VotingPlace::updateOrCreate([
            'id' => $request->id,
        ], [
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'name' => $request->name,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
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
        $data = VotingPlace::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = VotingPlace::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
