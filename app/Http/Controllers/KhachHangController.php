<?php

namespace App\Http\Controllers;

use App\Http\Requests\createKhachHangRequest;
use App\Http\Requests\deleteKhachHangRequest;
use App\Http\Requests\registerKhachHangRequest;
use App\Http\Requests\updateKhachHangRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{

    public function register(registerKhachHangRequest $request)
    {
        KhachHang::create([
            'email'             => $request->email,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'ho_va_ten'         => $request->ho_va_ten,
            'password'          => $request->password,
            'ngay_sinh'         => $request->ngay_sinh,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Đăng Kí Tài Khoản Thành Công!"
        ]);
    }

    public function getData()
    {
        $data = KhachHang::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function store(createKhachHangRequest $request)
    {
        KhachHang::create([
            'email'             => $request->email,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'ho_va_ten'         => $request->ho_va_ten,
            'password'          => $request->password,
            'ngay_sinh'         => $request->ngay_sinh,
            'is_active'         => $request->is_active,
            'is_block'          => $request->is_block,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới khách hàng " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function update(updateKhachHangRequest $request)
    {
        KhachHang::find($request->id)->update([
            'email'             => $request->email,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'ho_va_ten'         => $request->ho_va_ten,
            'password'          => $request->password,
            'ngay_sinh'         => $request->ngay_sinh,
            'is_active'         => $request->is_active,
            'is_block'          => $request->is_block,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật khách hàng " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function destroy(deleteKhachHangRequest $request)
    {
        KhachHang::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa khách hàng thành công.",
        ]);
    }
}
