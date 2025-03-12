<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminDoiMatKhauRequest;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\createNhanVienRequest;
use App\Http\Requests\deleteNhanVienRequest;
use App\Http\Requests\updateNhanVienRequest;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhanVienController extends Controller
{
    public function Login(AdminLoginRequest $request)
    {
        $check = NhanVien::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();
        if ($check) {
            return response()->json([
                'status'    => 1,
                'message'   => "Bạn đã đăng nhập thành công.",
                'token'     => $check->createToken('token_nhan_vien')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }

    public function checkToken()
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
            return response()->json([
                'status'    => 1,
                'ho_ten'    => $user_login->ho_va_ten
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }

}
