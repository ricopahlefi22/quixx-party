<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProcess(Request $request){

  
       $cek1 = Admin::where('email', $request->email)->first();
       // dd($cek1);

       if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password'),'level' => 1])) {
            return redirect('http://master.localhost:8000/beranda')->with('success', 'Selamat datang '.$cek1->nama);


        } elseif(Auth::attempt(['email' => request('email'), 'password' => request('password'),'level' => 0])) {
            return redirect('/beranda')->with('success', 'Selamat datang '.$cek1->nama);
        }

    } else {
        return back()->with('warning', 'Silahkan periksa Email atau Password');
    }
}


function logout(Admin $user){
    Auth::logout();
    return redirect('login')->with('warning','Berhasil keluar');
}
}
