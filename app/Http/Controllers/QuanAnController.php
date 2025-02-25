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
        if($user_login) {
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
    public function getData()
    {
        $data = QuanAn::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(QuanAnThemMoiRequest $request)
    {
        QuanAn::create([
            'email'             => $request->email,
            'password'          => $request->password,
            'ma_so_thue'        => $request->ma_so_thue,
            'ten_quan_an'       => $request->ten_quan_an,
            'dia_chi'           => $request->dia_chi,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'toa_do_x'          => $request->toa_do_x,
            'toa_do_y'          => $request->toa_do_y,
            'tinh_trang'        => $request->tinh_trang,
            'is_active'         => $request->is_active,
            'id_tinh_thanh'     => $request->id_tinh_thanh,
            'id_quan_huyen'     => $request->id_quan_huyen,
            'gio_mo_cua'        => $request->gio_mo_cua,
            'gio_dong_cua'      => $request->gio_dong_cua,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
    }
    public function destroy(QuanAnXoaRequest $request)
    {
        QuanAn::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
    }
    public function update(QuanAnCapNhatRequest $request)
    {
        QuanAn::find($request->id)->update([
            'email'             => $request->email,
            'ma_so_thue'        => $request->ma_so_thue,
            'ten_quan_an'       => $request->ten_quan_an,
            'dia_chi'           => $request->dia_chi,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'toa_do_x'          => $request->toa_do_x,
            'toa_do_y'          => $request->toa_do_y,
            'tinh_trang'        => $request->tinh_trang,
            'is_active'         => $request->is_active,
            'id_tinh_thanh'         => $request->id_tinh_thanh,
            'id_quan_huyen'         => $request->id_quan_huyen,
            'gio_mo_cua'        => $request->gio_mo_cua,
            'gio_dong_cua'      => $request->gio_dong_cua,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
    }
    public function dangKyQuanAn(QuanAnDangKyRequest $request)
    {
        QuanAn::create([
            'email'             => $request->email,
            'password'          => $request->password,
            'ma_so_thue'        => $request->ma_so_thue,
            'ten_quan_an'       => $request->ten_quan_an,
            'dia_chi'           => $request->dia_chi,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'id_tinh_thanh'     => $request->id_tinh_thanh,
            'id_quan_huyen'     => $request->id_quan_huyen,
            'gio_mo_cua'        => $request->gio_mo_cua,
            'gio_dong_cua'      => $request->gio_dong_cua,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã đăng ký quán ăn " . $request->ten_quan_an . " thành công.",
        ]);
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
    public function doiMatKhau(QuanAnDoiMatKhauRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if($user_login->password == $request->mat_khau_cu) {
            QuanAn::where('id', $user_login->id)->update([
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
