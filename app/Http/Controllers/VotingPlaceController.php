<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\VotingPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingPlaceController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Tempat Pemungutan Suara';

        if (Auth::user()->level == true) {
            $data['voting_places'] = VotingPlace::all();
        } else {
            $data['voting_places'] = VotingPlace::where('voting_zone_id', Auth::user()->voting_zone_id)->get();
        }

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
