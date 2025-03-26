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

    public function getData()
    {
        $data = NhanVien::get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(createNhanVienRequest $request)
    {
        $nhanVien = NhanVien::create([
            'email'         => $request->email,
            'ho_va_ten'     => $request->ho_va_ten,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi'       => $request->dia_chi,
            'ngay_sinh'     => $request->ngay_sinh,
            'tinh_trang'    => $request->tinh_trang,
            'id_chuc_vu'    => $request->id_chuc_vu,
        ]);
        return response()->json([
            'message' => 'Thêm ' . $request->ho_va_ten . ' thành công'
        ]);
    }

    public function update(updateNhanVienRequest $request)
    {
        $nhanVien = NhanVien::where('id', $request->id)->update([
            'email'         => $request->email,
            'ho_va_ten'     => $request->ho_va_ten,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi'       => $request->dia_chi,
            'ngay_sinh'     => $request->ngay_sinh,
            'tinh_trang'    => $request->tinh_trang,
            'id_chuc_vu'    => $request->id_chuc_vu,
        ]);
        return response()->json([
            'message' => 'Cập nhật ' . $request->ho_va_ten . ' thành công'
        ]);
    }

    public function destroy(deleteNhanVienRequest $request)
    {
        $nhanVien = NhanVien::where('id', $request->id)->delete();
        return response()->json([
            'message' => 'Xóa ' . $request->ho_va_ten . ' thành công'
        ]);
    }

    public function changeStatus(deleteNhanVienRequest $request)
    {
        $nhanVien = NhanVien::where('id', $request->id)->first();
        if ($nhanVien->tinh_trang == 1) {
            $nhanVien->tinh_trang = 0;
            $nhanVien->save();
        } else {
            $nhanVien->tinh_trang = 1;
            $nhanVien->save();
        }
        return response()->json([
            'message' => 'Cập nhật trạng thái ' . $request->ho_va_ten . ' thành công'
        ]);
    }
}
