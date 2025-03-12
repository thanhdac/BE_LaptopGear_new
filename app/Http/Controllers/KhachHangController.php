<?php

namespace App\Http\Controllers;

use App\Http\Requests\createKhachHangRequest;
use App\Http\Requests\deleteKhachHangRequest;
use App\Http\Requests\DiaChiKhachHangCreateRequest;
use App\Http\Requests\DiaChiKhachHangUpdateRequest;
use App\Http\Requests\KhachHangDoiMatKhauRequest;
use App\Http\Requests\KhachHangLoginRequest;
use App\Http\Requests\KhachHangXoaDiaChiRequest;
use App\Http\Requests\registerKhachHangRequest;
use App\Http\Requests\updateKhachHangRequest;
use App\Models\DiaChiKhachHang;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhachHangController extends Controller
{
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
    public function Login(KhachHangLoginRequest $request)
    {
        $check = KhachHang::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($check) {
            return response()->json([
                'status' => 1,
                'message' => "Đăng nhập thành công!",
                'token'     => $check->createToken('token_khach_hang')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
}
