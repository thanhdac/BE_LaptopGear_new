<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipperCreateRequest;
use App\Http\Requests\ShipperDangKyRequest;
use App\Http\Requests\ShipperDeleteRequest;
use App\Http\Requests\ShipperDoiMatKhauRequest;
use App\Http\Requests\ShipperLoginRequest;
use App\Http\Requests\ShipperUpdateRequest;
use App\Models\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipperController extends Controller
{
    public function checkTokenShipper()
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
    public function Login(ShipperLoginRequest $request)
    {
        $check = Shipper::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($check) {
            return response()->json([
                'status' => 1,
                'message' => "Đăng nhập thành công!",
                'token'     => $check->createToken('token_shipper')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }

    public function profile()
    {
        $user_login = Auth::guard('sanctum')->user();
        if($user_login) {
            return response()->json([
                'status'    => 1,
                'data'    => $user_login,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function doiMatKhau(ShipperDoiMatKhauRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if($user_login->password == $request->mat_khau_cu) {
            Shipper::where('id', $user_login->id)->update([
                'password' => $request->mat_khau_moi
            ]);
            return response()->json([
                'status' => 1,
                'message' => 'Đã đổi mật khẩu thành công!'
            ]);

        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Mật khẩu cũ không đúng!'
            ]);
        }
    }
}
