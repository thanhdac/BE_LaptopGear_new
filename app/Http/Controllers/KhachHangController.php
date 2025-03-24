<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatKhachHangRequest;
use App\Http\Requests\changeActiveRequest;
use App\Http\Requests\changKhachHangRequest;
use App\Http\Requests\createKhachHangRequest;
use App\Http\Requests\deleteKhachHangRequest;
use App\Http\Requests\DiaChiKhachHangCreateRequest;
use App\Http\Requests\DiaChiKhachHangUpdateRequest;
use App\Http\Requests\KhachHangDoiMatKhauRequest;
use App\Http\Requests\KhachHangLoginRequest;
use App\Http\Requests\KhachHangXoaDiaChiRequest;
use App\Http\Requests\registerKhachHangRequest;
use App\Http\Requests\ThemMoiKhachHangRequest;
use App\Http\Requests\updateKhachHangRequest;
use App\Http\Requests\XoaKhachHangRequest;
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

    public function getData()
    {
        $check = Auth::guard('sanctum')->user();
        if ($check) {
            $data = KhachHang::all();
            return response()->json([
                'status'    => 1,
                'data'      => $data
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function store(ThemMoiKhachHangRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = KhachHang::create([
                'ho_va_ten'     => $request->ho_va_ten,
                'so_dien_thoai' => $request->so_dien_thoai,
                'email'         => $request->email,
                'password'      => $request->password,
                'ngay_sinh'     => $request->ngay_sinh,
            ]);
            return response()->json([
                'status'    => 1,
                'message'   => 'Thêm Mới khách hàng thành công!',
                'data'      => $data
            ]);
        }
    }
    public function destroy(XoaKhachHangRequest $request)
    {
        $data = KhachHang::find($request->id);
        $data->delete();
        return response()->json([
            'status' => 1,
            'message' => 'Xóa khách hàng thành công'
        ]);
    }
    public function update(CapNhatKhachHangRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = KhachHang::find($request->id);
            if ($data) {
                $data->update([
                    'ho_va_ten'     => $request->ho_va_ten,
                    'so_dien_thoai' => $request->so_dien_thoai,
                    'email'         => $request->email,
                    'ngay_sinh'     => $request->ngay_sinh,
                ]);
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Cập nhật khách hàng thành công!',
                    'data'      => $data
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Khách hàng không tồn tại!',
                ]);
            }
        }
    }
    public function changeStatus(changKhachHangRequest $request)
    {
        $data = KhachHang::find($request->id);
        if ($data->is_block == 1) {
            $data->is_block = 0;
        } else {
            $data->is_block = 1;
        }
        $data->save();
        return response()->json([
            'status' => 1,
            'message' => 'Cập nhật trạng thái khách hàng thành công'
        ]);
    }

    public function changeActive(changeActiveRequest $request)
    {
        $data = KhachHang::find($request->id);
        if ($data->is_active == 1) {
            $data->is_active = 0;
        } else {
            $data->is_active = 1;
        }
        $data->save();
        return response()->json([
            'status' => 1,
            'message' => 'Cập nhật trạng thái khách hàng thành công',
        ]);
    }
}
