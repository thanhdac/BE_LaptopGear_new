<?php

namespace App\Http\Controllers;

use App\Http\Requests\activeShipperRequest;
use App\Http\Requests\CapNhatShipperRequest;
use App\Http\Requests\changeShipperRequest;
use App\Http\Requests\ShipperCreateRequest;
use App\Http\Requests\ShipperDangKyRequest;
use App\Http\Requests\ShipperDeleteRequest;
use App\Http\Requests\ShipperDoiMatKhauRequest;
use App\Http\Requests\ShipperLoginRequest;
use App\Http\Requests\ShipperUpdateRequest;
use App\Http\Requests\ThemMoiShipperRequest;
use App\Http\Requests\XoaShipperRequest;
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
    public function getData(Request $request)
    {
        $shipper = Shipper::all();
        return response()->json([
            'data' => $shipper
        ]);
    }
    public function store(ThemMoiShipperRequest $request)
    {
        Shipper::create([
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'password'  => $request->password,
            'cccd'  => $request->cccd,
            'so_dien_thoai' => $request->so_dien_thoai,
            'tinh_trang'    => $request->tinh_trang,

        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Đã thêm mới shipper  ' . $request->ho_va_ten . ' thành công.'
        ]);
    }

    public function destroy(XoaShipperRequest $request)
    {
        Shipper::where('id', $request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã xóa shipper ' . $request->ho_va_ten . ' thành công'
        ]);
    }

    public function update(CapNhatShipperRequest $request)
    {
        Shipper::where('id', $request->id)->update([
                'ho_va_ten' => $request->ho_va_ten,
                'email' => $request->email,
                'password'  => $request->password,
                'cccd'  => $request->cccd,
                'so_dien_thoai' => $request->so_dien_thoai,

        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Đã cập nhật shipper  ' . $request->ho_va_ten . ' thành công.'
        ]);
    }

    public function changeStatus(changeShipperRequest  $request)
    {
        $shipper = Shipper::where('id', $request->id)->first();

        if ($shipper->is_active == 1) {
            $shipper->is_active = 0;
            $shipper->save();
        } else {
            $shipper->is_active = 1;
            $shipper->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã cập nhật trạng thái' . $request->ho_va_ten . ' thành công'
        ]);
    }

    public function active(activeShipperRequest $request)
    {
        $shipper = Shipper::where('id', $request->id)->first();
        if ($shipper) {
            if ($shipper->is_open) {
                return response()->json([
                    'status'  => 2,
                    'message' => "Tài khoản đã được kích hoạt trước đó",
                ]);
            } else {
                $shipper->is_open = 1;
                $shipper->save();
                return response()->json([
                    'status'  => 1,
                    'message' => "Kích hoạt tài khoản thành công",
                ]);
            }
        } else {
            return response()->json([
                'status'  => 0,
                'message' => "Tài khoản không tồn tại",
            ]);
        }
    }
}
