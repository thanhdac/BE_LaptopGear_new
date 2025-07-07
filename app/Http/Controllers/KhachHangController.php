<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KhachHangController
{
    //===Khách Hàng=====
    public function getDataClientKhachHang()
    {
        $data = KhachHang::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }


    //==== Admin =====
    public function getData()
    {
        $data = KhachHang::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        KhachHang::where('id', $request->id)->update([
            'ma_kh'         => $request->ma_kh,
            'mat_khau'     => $request->mat_khau,
            'ho_ten'       => $request->ho_ten,
            'email'      => $request->email,
            'dia_chi'           => $request->dia_chi,
            'sdt'         => $request->sdt,
            'gioi_tinh'    => $request->gioi_tinh,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật KhachHang ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        KhachHang::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa KhachHang thành công',
        ]);
    }

    public function dangNhap(Request $request)
    {
        $check = KhachHang::where('email', $request->email)
            ->where('mat_khau', $request->mat_khau)->first();
        if ($check) {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản sai email hoặc password',
            ]);
        }
    }

    public function dangKy(Request $request)
    {
        // $request->validate([
        //     'ho_ten' => 'required|string|max:255',
        //     'email' => 'required|email|unique:khach_hangs,email',
        //     'sdt' => 'required|digits_between:9,11',
        //     'dia_chi' => 'nullable|string',
        //     'gioi_tinh' => 'required|in:0,1', // 0: Nữ, 1: Nam
        //     'mat_khau' => 'required|min:6',
        // ]);
        $request->validate([
            'sdt' => 'required|string|regex:/^0\d{9,10}$/',
            'email' => 'required|email|unique:khach_hangs,email',
        ], [
            'sdt.required' => 'Vui lòng nhập số điện thoại.',
            'sdt.regex'    => 'Số điện thoại không hợp lệ. Vui lòng nhập đúng định dạng (bắt đầu bằng 0, có 10 hoặc 11 số).',
            'email.required' => 'Vui lòng nhập email.',
            'email.email'    => 'Email không đúng định dạng.',
            'email.unique'   => 'Email đã tồn tại trong hệ thống.',
        ]);

        //  Tạo mã KH tự động tăng: KH01, KH02, ...
        $lastKhachHang = KhachHang::orderBy('id', 'desc')->first();
        $lastId = $lastKhachHang ? intval(substr($lastKhachHang->ma_kh, 2)) : 0;
        $newId = $lastId + 1;
        $maKH = 'KH' . str_pad($newId, 2, '0', STR_PAD_LEFT);

        $khachHang = new KhachHang();
        $khachHang->ma_kh = $maKH;
        $khachHang->ho_ten = $request->ho_ten;
        $khachHang->email = $request->email;
        $khachHang->sdt = $request->sdt;
        $khachHang->dia_chi = $request->dia_chi;
        $khachHang->gioi_tinh = $request->gioi_tinh;
        $khachHang->mat_khau = Hash::make($request->mat_khau);
        $khachHang->save();

        return response()->json([
            'status' => true,
            'message' => 'Đăng ký thành công'
        ]);
    }
}
