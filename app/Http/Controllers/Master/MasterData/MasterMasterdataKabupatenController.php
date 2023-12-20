<?php

namespace App\Http\Controllers\Master\MasterData;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cities;

class MasterMasterdataKabupatenController extends Controller
{
    function index(){
        $data['list_city'] = Cities::all();
        return view('master.master-data.kabupaten.index',$data);
    }

    function store(){
        $city = new Cities;
        $city->name = request('name');
        $city->save();
        return back()->with('success','City successfull added');
    }
}
