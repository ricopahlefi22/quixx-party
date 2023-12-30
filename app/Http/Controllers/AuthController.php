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

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('beranda'); 
        }else{
            return back()->with('danger','Email atau Password Anda Salah !!');
        }
    }


    function logout(Admin $user){
        Auth::logout();
        return redirect('login')->with('warning','Berhasil keluar');
    }
}
