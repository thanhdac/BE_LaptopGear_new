<?php

namespace App\Http\Controllers;

use App\Http\Requests\changeActiveQuanAnrequest;
use App\Http\Requests\ChangeStatusQuanAnrequest;
use App\Http\Requests\QuanAnCapNhatRequest;
use App\Http\Requests\QuanAnDangKyRequest;
use App\Http\Requests\QuanAnDeleteRequest;
use App\Http\Requests\QuanAnDoiMatKhauRequest;
use App\Http\Requests\QuanAnLoginRequest;
use App\Http\Requests\QuanAnThemMoiRequest;
use App\Http\Requests\QuanAnUpdateRequest;
use App\Http\Requests\QuanAnXoaRequest;
use App\Models\QuanAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanAnController extends Controller
{
    public function checkTokenQuanAn()
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
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

    public function getData()
    {
        $data = QuanAn::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(QuanAnThemMoiRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = QuanAn::create($request->all());
            return response()->json([
                'status'    => 1,
                'message'   => 'Thêm quán ăn thành công!',
                'data'      => $data
            ]);
        }
    }

    public function update(QuanAnUpdateRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = QuanAn::find($request->id);
            if ($data) {
                $data->update([
                    'email'                 => $request->email,
                    'ma_so_thue'            => $request->ma_so_thue,
                    'ten_quan_an'           => $request->ten_quan_an,
                    'gio_mo_cua'            => $request->gio_mo_cua,
                    'gio_dong_cua'          => $request->gio_dong_cua,
                    'id_dia_chi'            => $request->id_dia_chi,
                    'so_dien_thoai'         => $request->so_dien_thoai,
                    'hinh_anh'              => $request->hinh_anh,
                    'tong_tien'             => $request->tong_tien,
                ]);
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Cập nhật quán ăn thành công!',
                    'data'      => $data
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Quán ăn không tồn tại!',
                ]);
            }
        }
    }
    public function destroy(QuanAnDeleteRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = QuanAn::find($request->id);
            if ($data) {
                $data->delete();
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Xóa quán ăn thành công!',
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Quán ăn không tồn tại!',
                ]);
            }
        }
    }
    public function changeStatus(ChangeStatusQuanAnrequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = QuanAn::find($request->id);
            if ($data) {
                $data->update([
                    'tinh_trang'    => !$data->tinh_trang,
                ]);
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Thay đổi trạng thái thành công!',
                    'data'      => $data
                ]);
            } else {
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Quán ăn không tồn tại!',
                ]);
            }
        }
    }
    public function changeActive(changeActiveQuanAnrequest $request)
    {
        $quan_an = QuanAn::find($request->id);

        if ($quan_an->is_active == 0) {
            $quan_an->is_active = 1;
            $quan_an->save();

            return response()->json([
                'status' => true,
                'message' => 'Đã kích hoạt quán ăn thành công!'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Quán ăn này đã được kích hoạt trước đó!'
            ]);
        }
    }
}
