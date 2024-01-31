<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Administrator';

        if ($request->ajax()) {
            return DataTables::of(Admin::all())
                ->addIndexColumn()
                ->addColumn('name', function (Admin $admin) {
                    if (empty($admin->photo)) {
                        return '<strong>' . $admin->name . '</strong>';
                    } else {
                        return '<a class="image-popup-no-margins" href="' . $admin->photo . '">
                            <img src="' . $admin->photo . '" class="avatar-sm img-thumbnail rounded-circle">
                            </a> <strong>' . $admin->name . '</strong>';
                    }
                })
                ->addColumn('level', function (Admin $admin) {
                    return $admin->level == true ? 'Super Admin' : 'Administrator';
                })
                ->addColumn('action', function (Admin $admin) {
                    $btn = '<button data-id="' . $admin->id . '"  class="btn btn-sm btn-warning edit" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button> ';
                    $btn .= '<button data-id="' . $admin->id . '"  class="btn btn-sm btn-danger delete" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></button> ';
                    return '<div class="btn-group">' . $btn . '</div>';
                })
                ->rawColumns(['name', 'level', 'action'])
                ->make(true);
        }

        return view('owner.administrator.index', $data);
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
