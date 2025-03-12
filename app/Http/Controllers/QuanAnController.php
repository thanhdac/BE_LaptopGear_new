<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuanAnCapNhatRequest;
use App\Http\Requests\QuanAnDangKyRequest;
use App\Http\Requests\QuanAnDoiMatKhauRequest;
use App\Http\Requests\QuanAnLoginRequest;
use App\Http\Requests\QuanAnThemMoiRequest;
use App\Http\Requests\QuanAnXoaRequest;
use App\Models\QuanAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanAnController extends Controller
{
    public function checkTokenQuanAn()
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
            return response()->json([
                'status'    => 1,
                'ten_quan_an'    => $user_login->ten_quan_an
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function Login(QuanAnLoginRequest $request)
    {
        $check = QuanAn::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($check) {
            return response()->json([
                'status' => 1,
                'message' => "Đăng nhập thành công!",
                'token'     => $check->createToken('token_quan_an')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
}
