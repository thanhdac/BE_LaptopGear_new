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
        if($user_login) {
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
    public function getDataDiaChi()
    {
        $user_login = Auth::guard('sanctum')->user();
        $data = DiaChiKhachHang::where('id_khach_hang', $user_login->id)->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function storeDiaChi(DiaChiKhachHangCreateRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        DiaChiKhachHang::create([
            'ho_ten_nguoi_nhan'     => $request->ho_ten_nguoi_nhan,
            'so_dien_thoai_nhan'    => $request->so_dien_thoai_nhan,
            'dia_chi_nhan_hang'     => $request->dia_chi_nhan_hang,
            'id_khach_hang'         => $user_login->id,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới địa chỉ khách hàng thành công! ",
        ]);
    }
    public function updateDiaChi(DiaChiKhachHangUpdateRequest $request)
    {
        DiaChiKhachHang::find($request->id)->update([
            'ho_ten_nguoi_nhan'     => $request->ho_ten_nguoi_nhan,
            'so_dien_thoai_nhan'    => $request->so_dien_thoai_nhan,
            'dia_chi_nhan_hang'     => $request->dia_chi_nhan_hang,
            'id_khach_hang'         => 1,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập địa chỉ khách hàng thành công!" ,
        ]);
    }

    public function destroyDiaChi(KhachHangXoaDiaChiRequest $request)
    {
        DiaChiKhachHang::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa địa chỉ khách hàng thành công.",
        ]);
    }
    public function doiMatKhau(KhachHangDoiMatKhauRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login->password == $request->mat_khau_cu) {
            KhachHang::find($user_login->id)->update([
                'password' => $request->mat_khau_moi,
            ]);
            return response()->json([
                'status' => 1,
                'message' => "Đổi mật khẩu thành công!",
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Mật khẩu cũ không đúng!",
            ]);
        }
    }
}
