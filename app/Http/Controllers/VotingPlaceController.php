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
        $data['votingPlaces'] = VotingPlace::query();

        if ($request->ajax()) {
            return DataTables::of($data['votingPlaces'])
            // return DataTables::eloquent($data['votingPlaces'])
                ->addIndexColumn()
                ->addColumn('district', function (VotingPlace $votingPlace) {
                    return '<a href="/voters/voting-place/' . Crypt::encrypt($votingPlace->district->id) . '" target="_blank" class="text-secondary">' . $votingPlace->district->name . '</a>';
                })
                ->addColumn('village', function (VotingPlace $votingPlace) {
                    return '<a href="/voters/voting-place/' . Crypt::encrypt($votingPlace->village->id) . '" target="_blank" class="text-secondary">' . $votingPlace->village->name . '</a>';
                })
                ->addColumn('voting_place', function (VotingPlace $votingPlace) {
                    return '<a href="/voters/voting-place/' . Crypt::encrypt($votingPlace->id) . '" target="_blank" class="text-secondary">TPS ' . $votingPlace->name . '</a>';
                })
                ->addColumn('mapping_voters', function (VotingPlace $votingPlace) {
                    return $votingPlace->voters->whereNotNull('coordinator_id')->count() . ' Pendukung';
                })
                ->addColumn('total_voters', function (VotingPlace $votingPlace) {
                    return $votingPlace->voters->count() . ' Pemilih';
                })
                ->addColumn('address', function (VotingPlace $votingPlace) {
                    return empty($votingPlace->address) ? '-' : $votingPlace->address;
                })
                ->addColumn('coordinate', function (VotingPlace $votingPlace) {
                    $latitude = empty($votingPlace->latitude) ? 'Lat: -' : 'Lat: ' . $votingPlace->latitude;
                    $longitude = empty($votingPlace->longitude) ? 'Lng: -' : 'Lng: ' . $votingPlace->longitude;
                    return $latitude . '<br>' . $longitude;
                })
                ->addColumn('action', function (VotingPlace $votingPlace) {
                    $btn = '<a href="/voters/voting-place/' . Crypt::encrypt($votingPlace->id) . '" target="_blank" class="dropdown-item">Data Pemilih</a> ';
                    $btn .= '<button data-id="' . $votingPlace->id . '"  class="dropdown-item text-warning edit">Edit</button> ';
                    $btn .= '<button data-id="' . $votingPlace->id . '"  class="dropdown-item text-danger delete">Hapus</button> ';
                    return '<div class="btn-group dropup"><button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
                        . '<div class="dropdown-menu" role="menu">'
                        . $btn
                        . '</div></div>';
                })
                ->rawColumns(['district', 'village', 'voting_place', 'coordinate',  'action'])
                ->make(true);
        }

        return view('owner.voting-place.index', $data);
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
