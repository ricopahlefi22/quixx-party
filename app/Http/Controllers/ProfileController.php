<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class ProfileController extends Controller
{
    function index(){
        $data['title'] = "Profil Akun";
        return view('profile.index',$data);
    }

    function update(){
       Admin::where('id',Auth::user()->id)->update([
        'name' =>request('name'),
        'username' =>request('username'),
        'phone_number' =>request('phone_number'),
    ]);

       return back()->with('success','Akun berhasil diupdate');
   }

   function updatePassword(){
    $confirm = request('confirm');
    $new = request('new');
    if($confirm == $new){
       Admin::where('id',Auth::user()->id)->update([
        'password' =>bcrypt(request('new')),
    ]);
       return back()->with('success','Akun berhasil diupdate');
   }else{
    return back()->with('danger','Password tidak cocok');
   }



}
}
