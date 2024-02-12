<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    function index()
    {
        $data['title'] = 'Data Administrator';
        $data['administrators'] = Admin::all();

        return view('administrator.index', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'username' => empty($request->id) ? 'required|unique:admins,username' : 'required',
                'phone_number' => 'required',
                'level' => 'required',
            ],
            [
                'name.required' => 'Mohon isi kolom nama',
                'username.required' => 'Mohon isi kolom username',
                'username.unique' => 'Username ini sudah ada',
                'phone_number.required' => 'Mohon isi kolom nomor handphone',
                'level.required' => 'Mohon pilih level admin',
            ]
        );

        $photo = $request->hidden_photo;

        if ($request->file('photo')) {
            $path = 'public/admin-photos/';
            $file = $request->file('photo');
            $file_name = Str::random(2) . time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs($path, $file_name);
            $photo = "storage/admin-photos/" . $file_name;
        }

        $data = Admin::updateOrCreate([
            'id' => $request->id,
        ], [
            'name' => ucwords(strtolower($request->name)),
            'username' => $request->username,
            'photo' => $photo,
            'phone_number' => $request->phone_number,
            'level' => $request->level,
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
        $data = Admin::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = Admin::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
