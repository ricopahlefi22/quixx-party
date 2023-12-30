<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    function beranda(){
        // dd(Auth::user());
        return view('admin.beranda');
    }
}
