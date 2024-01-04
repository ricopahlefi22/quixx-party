<?php

namespace App\Http\Controllers\Master;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\VotingZone;
use Auth;

class MasterAkunController extends Controller
{
    function index(){
        $data['list_akun'] = Admin::all();
        $data['list_dapil'] = VotingZone::where('city_id', Auth::user()->city_id)->get();
        return view('master.akun.index',$data);
    }

    function store(){
        $akun = new Admin;
        $akun->name = request('name');
        $akun->email = request('email');
        $akun->level = request('level');
        $akun->voting_zone_id = request('voting_zone_id');
        $akun->city_id = Auth::user()->city_id;
        $akun->admin_log = Auth::user()->admin_id;
        $akun->password = bcrypt(12345678);
        $akun->save();
        return back()->with('success','Akun berhasil ditambahkan');
    }
}
