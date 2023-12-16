<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProses(Request $request){

       $request->validate([
        'username' => 'required',
        'password' => 'required|min:8',
    ], [
        'username.required' => 'Email tidak boleh kosong',
        'password.required' => 'Kata sandi tidak boleh kosong',
        'password.min' => 'Panjang kata sandi minimal 8 karakter',
    ]);
       $cek1 = User::where('email', $request->email)->first();

       if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password'),'level' => 1])) {
            return redirect('/master/beranda')->with('success', 'Selamat datang '.$cek1->nama);


        } elseif(Auth::attempt(['email' => request('email'), 'password' => request('password'),'level' => 2])) {
            return redirect('/admin/beranda')->with('success', 'Selamat datang '.$cek1->nama);
        }

    } else {
        return back()->with('warning', 'Silahkan periksa Email atau Password');
    }
}


function logout(User $user){
    Auth::logout();
    return redirect('login')->with('warning','Berhasil keluar');
}
}
