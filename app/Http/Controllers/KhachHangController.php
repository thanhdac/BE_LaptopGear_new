<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatKhachHangRequest;
use App\Http\Requests\changeActiveRequest;
use App\Http\Requests\changKhachHangRequest;
use App\Http\Requests\createDiaChiKhachHangRequest;
use App\Http\Requests\createKhachHangRequest;
use App\Http\Requests\deleteDiaChiKhachHangRequest;
use App\Http\Requests\deleteKhachHangRequest;
use App\Http\Requests\DiaChiKhachHangCreateRequest;
use App\Http\Requests\DiaChiKhachHangUpdateRequest;
use App\Http\Requests\KhachHangDoiMatKhauRequest;
use App\Http\Requests\KhachHangLoginRequest;
use App\Http\Requests\KhachHangXoaDiaChiRequest;
use App\Http\Requests\registerKhachHangRequest;
use App\Http\Requests\ThemMoiKhachHangRequest;
use App\Http\Requests\updateDiaChiKhachHangRequest;
use App\Http\Requests\updateKhachHangRequest;
use App\Http\Requests\updatePasswordKhachHangRequest;
use App\Http\Requests\XoaKhachHangRequest;
use App\Models\ChiTietDiaChi;
use App\Models\DiaChi;
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

    public function getDataKhachHang()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $data = KhachHang::where('id', $user->id)->first();
            return response()->json([
                'status' => 1,
                'data' => $data
            ]);
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $data = KhachHang::where('id', $user->id);
            if ($data) {
                $data->update([
                    'ho_va_ten'     => $request->ho_va_ten,
                    'so_dien_thoai' => $request->so_dien_thoai,
                    'email'         => $request->email,
                    "password"     => $request->password,
                    'ngay_sinh'     => $request->ngay_sinh,
                ]);
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Cập nhật thông tin thành công!',
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Thông tin khách hàng không tồn tại!',
                ]);
            }
        }
    }

    public function updatePassword(updatePasswordKhachHangRequest $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $data = KhachHang::where('id', $user->id)
                ->where('password', $request->old_password)
                ->first();
            if ($data) {
                $data->update([
                    'password' => $request->password,
                ]);
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Cập nhật mật khẩu thành công!',
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Mật khẩu cũ không đúng!',
                ]);
            }
        }
    }

    public function getDataDiaChi()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $data = DiaChi::where('id_khach_hang', $user->id)
                ->join('chi_tiet_dia_chis', 'dia_chis.id', 'chi_tiet_dia_chis.id_dia_chi')
                ->join('khach_hangs', 'chi_tiet_dia_chis.id_khach_hang', 'khach_hangs.id')
                ->join('quan_huyens', 'dia_chis.id_quan_huyen', 'quan_huyens.id')
                ->join('tinh_thanhs', 'quan_huyens.id_tinh_thanh', 'tinh_thanhs.id')
                ->select('dia_chis.*', 'chi_tiet_dia_chis.*', 'khach_hangs.ho_va_ten', 'quan_huyens.ten_quan_huyen', 'tinh_thanhs.ten_tinh_thanh')
                ->get();
            return response()->json([
                'status' => 1,
                'data' => $data
            ]);
        }
    }

    public function storeDiaChi(createDiaChiKhachHangRequest $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $diaChi = DiaChi::create([
                'dia_chi'           => $request->dia_chi,
                'id_quan_huyen'     => $request->id_quan_huyen,
                'toa_do_x'          => 0,
                'toa_do_y'          => 0,
            ]);

            $chiTietDiaChi = ChiTietDiaChi::create([
                'id_dia_chi'    => $diaChi->id,
                'id_khach_hang' => $user->id,
            ]);

            return response()->json([
                'status'    => 1,
                'message'   => 'Thêm mới địa chỉ thành công!',
                'data'      => [
                    'dia_chi'        => $diaChi,
                    'chi_tiet_dia_chi' => $chiTietDiaChi
                ]
            ]);
        }
    }

    public function updateDiaChi(updateDiaChiKhachHangRequest $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $chiTietDiaChi = ChiTietDiaChi::where('id_khach_hang', $user->id)
                ->where('id_dia_chi', $request->id)
                ->first();
            $diaChi = DiaChi::where('id', $chiTietDiaChi->id_dia_chi)->update([
                'dia_chi'        => $request->dia_chi,
                'id_quan_huyen'  => $request->id_quan_huyen,
            ]);

            return response()->json([
                'status'    => 1,
                'message'   => 'Cập nhật địa chỉ thành công!',
                'data'      => [
                    'dia_chi'        => $request->dia_chi,
                    'id_quan_huyen'  => $request->id_quan_huyen,
                    'id_khach_hang'  => $user->id
                ]
            ]);
        }
    }

    public function destroyDiaChi(deleteDiaChiKhachHangRequest $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $dia_chi = DiaChi::find($request->id);
            if ($dia_chi) {
                $dia_chi->delete();

                return response()->json([
                    'status'    => 1,
                    'message'   => 'Xóa Địa Chỉ thành công!',
                ]);
            }

            return response()->json([
                'status'    => 0,
                'message'   => 'Xóa Địa Chỉ không tồn tại!',
            ]);
        }
        return response()->json([
            'status'    => 0,
            'message'   => 'Xóa Địa Chỉ không tồn tại!',
        ]);
    }
}
