<?php

namespace App\Http\Controllers\Master\MasterData;
use Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class MasterMasterdataKabupatenController extends Controller
{
    function index(){
        $data['list_city'] = City::all();
        return view('master.master-data.kabupaten.index',$data);
    }

    function store(){
        $city = new City;
        $city->name = request('name');
        $city->save();
        return back()->with('success','City successfull added');
    }

    function destroy(City $city){
        $city->delete();
        return back()->with('danger','Data berhasil dihapus');
    }
}
