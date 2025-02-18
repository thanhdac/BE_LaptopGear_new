<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\createNhanVienRequest;
use App\Http\Requests\deleteNhanVienRequest;
use App\Http\Requests\updateNhanVienRequest;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function getData()
    {
        $data = NhanVien::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function store(createNhanVienRequest $request)
    {
        NhanVien::create([
            'ho_va_ten'     => $request->ho_va_ten,
            'email'         => $request->email,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi'       => $request->dia_chi,
            'ngay_sinh'       => $request->ngay_sinh,
            'tinh_trang'    => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới nhân viên " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function update(updateNhanVienRequest $request)
    {
        NhanVien::find($request->id)->update([
            'ho_va_ten'     => $request->ho_va_ten,
            'email'         => $request->email,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi'       => $request->dia_chi,
            'ngay_sinh'       => $request->ngay_sinh,
            'tinh_trang'    => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật nhân viên " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function destroy(deleteNhanVienRequest $request)
    {
        NhanVien::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa nhân viên thành công.",
        ]);
    }
    public function Login(AdminLoginRequest $request)
    {
        $check = NhanVien::where('email', $request->email)
                         ->where('password', $request->password)
                         ->first();
        if ($check) {
            return response()->json([
                'status' => 1,
                'message' => "Bạn đã đăng nhập thành công.",
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
}
