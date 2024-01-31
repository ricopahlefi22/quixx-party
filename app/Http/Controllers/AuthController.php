<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\PasswordReset;
use App\Models\WebConfig;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', $data);
    }

    function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'username tidak boleh kosong',
            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min' => 'panjang kata sandi minimal 8 karakter',
        ]);


        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $admin = Admin::where('username', $request->username)->firstOrFail();
            if ($admin->level == true) {
                return response()->json([
                    'code' => 200,
                    'status' => 'Berhasil!',
                    'message' => 'Halo Admin! kami akan mengantarmu ke dalam sistem.',
                    'redirect_url' => 'http://master.'.env('DOMAIN').':8000'
                ]);
            } else {
                return response()->json([
                    'code' => 200,
                    'status' => 'Berhasil!',
                    'message' => 'Halo Admin! kami akan mengantarmu ke dalam sistem.',
                    'redirect_url' => '/'
                ]);
            }
        } else {
            return response()->json([
                'code' => 300,
                'status' => 'Gagal!',
                'message' => 'Maaf, kami tidak mengenali anda.',
            ]);
        }
    }

    function forgotPassword()
    {
        $data['title'] = 'Lupa Kata Sandi';
        return view('auth.forgot-password', $data);
    }

    function forgotPasswordProcess(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
        ], [
            'phone_number.required' => 'nomor handphone tidak boleh kosong',
        ]);

        $check = Admin::where('phone_number', $request->phone_number)->first();

        if (!empty($check)) {
            $checkOTP = PasswordReset::where('phone_number', $request->phone_number)->first();
            if (empty($checkOTP)) {
                $otp = rand(123456, 999999);
                $token = Str::random(60);

                $response = Http::asForm()->post('https://app.ruangwa.id/api/send_message', [
                    'token' => WebConfig::first()->token,
                    'number' => $request->phone_number,
                    'message' => $otp . " adalah kode OTP anda untuk mengatur ulang kata sandi. Jangan berikan kode ini kepada siapapun. \n\n*Quixx - Rekan Pemenangan 2024*",
                ]);

                if ($response["result"] == 'true' && $response["status"] == 'sent') {
                    PasswordReset::insert([
                        'phone_number' => $request->phone_number,
                        'otp' => $otp,
                        'token' => $token,
                        'expired_at' => Carbon::now()->addMinutes(10)
                    ]);

                    return response()->json([
                        'code' => 200,
                        'status' => 'OTP Terkirim!',
                        'message' => 'Mengarahkanmu ke halaman pemeriksaan OTP.',
                        'token' => $token,
                    ]);
                } else {
                    return response()->json([
                        'code' => 500,
                        'status' => 'Gagal Mengirim OTP!',
                        'message' => 'Terjadi kesalahan saat mengirim OTP, cobalah beberapa saat lagi atau hubungi developer.',
                    ]);
                }
            }

            return response()->json([
                'code' => 200,
                'status' => 'OTP Sudah Terkirim Sebelumnya!',
                'message' => 'Mengarahkanmu ke halaman pemeriksaan OTP.',
                'token' => $checkOTP->token,
            ]);
        }

        return response()->json([
            'code' => 500,
            'status' => 'Nomor Tidak Ditemukan!',
            'message' => 'Tidak ada admin yang menggunakan nomor ini.',
        ]);
    }

    function otp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ], [
            'otp.required' => 'OTP tidak boleh kosong',
        ]);

        $checkOTP = PasswordReset::where('token', $request->token)->first();

        if ($checkOTP->otp == $request->otp) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Ayo buat kata sandi baru!',
                'route' => '/reset-password?token=' . $checkOTP->token,
            ]);
        }

        return response()->json([
            'code' => 300,
            'status' => 'Gagal!',
            'message' => 'Kode OTP yang anda masukkan salah.',
        ]);
    }

    function resetPassword(Request $request)
    {
        $check = PasswordReset::where('token', $request->token)->exists();

        if ($check) {
            $data['token'] = $request->token;
            $data['title'] = 'Atur Ulang Kata Sandi';
            return view('auth.reset-password', $data);
        }

        return abort(404);
    }

    function resetpasswordProcess(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ], [
            'password.required' => 'Kata sandi tidak boleh kosong',
            'password.min' => 'Panjang kata sandi minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi tidak boleh kosong',
            'confirm_password.same' => 'Konfirmasi kata sandi tidak sesuai',
        ]);

        $check = PasswordReset::where('token', $request->token)->first();
        if ($check) {
            $admin = Admin::where('phone_number', $check->phone_number)->first();
            $admin->password = bcrypt($request->password);
            $admin->save();
            $check->delete();

            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Kata sandi berhasil diperbaharui!',
            ]);
        }

        return response()->json([
            'code' => 300,
            'status' => 'Gagal!',
            'message' => 'Sesi Berakhir',
        ]);
    }

    function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
