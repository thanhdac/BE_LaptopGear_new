<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatMonAnRequest;
use App\Http\Requests\ThemMoiMonAnRequest;
use App\Http\Requests\XoaMonAnRequest;
use App\Models\MonAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonAnController extends Controller
{
    public function getData()
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = MonAn::get();
            return response()->json([
                'data' => $data
            ]);
        }
    }

    public function store(ThemMoiMonAnRequest $request)
    {
        $check = Auth::guard('sanctum')->user();

        if (!$check) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = MonAn::create([
                'ten_mon_an'        => $request->ten_mon_an,
                'slug_mon_an'       => $request->slug_mon_an,
                'gia_ban'           => $request->gia_ban,
                'gia_khuyen_mai'    => $request->gia_khuyen_mai,
                'id_quan_an'        => $request->id_quan_an,
                'tinh_trang'        => $request->tinh_trang,
                'hinh_anh'          => $request->hinh_anh,
                'is_combo'          => 0,
                'id_danh_muc'       => $request->id_danh_muc,
            ]);

            return response()->json([
                'status' => 1,
                'message' => 'Thêm món ăn thành công!',
            ]);
        }
    }

    public function destroy(XoaMonAnRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = MonAn::where('id', $request->id)->delete();
            return response()->json([
                'status' => 1,
                'message' => 'Xóa món ăn thành công!'
            ]);
        }
    }

    public function update(CapNhatMonAnRequest $request)
    {
        $check = Auth::guard('sanctum')->user();
        if (!$check) {
            return response()->json([
                'status'    =>  1,
                'message'   =>  'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = MonAn::where('id', $request->id)->update([
                'ten_mon_an'        => $request->ten_mon_an,
                'slug_mon_an'       => $request->slug_mon_an,
                'gia_ban'           => $request->gia_ban,
                'gia_khuyen_mai'    => $request->gia_khuyen_mai,
                'id_quan_an'        => $request->id_quan_an,
                'tinh_trang'        => $request->tinh_trang,
                'hinh_anh'          => $request->hinh_anh,
                'is_combo'          => 0,
                'id_danh_muc'       => $request->id_danh_muc,
            ]);
            return response()->json([
                'status' => 1,
                'message' => 'Cập nhật món ăn thành công!'
            ]);
        }
    }

    public function changeStatus(XoaMonAnRequest $request)
    {
        $check = Auth::guard('sanctum')->user();

        if (!$check) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn cần đăng nhập hệ thống!'
            ]);
        } else {
            $data = MonAn::where('id', $request->id)->first();

            if ($data->tinh_trang == 1) {
                $data->tinh_trang = 0;
                $data->save();
            } else {
                $data->tinh_trang = 1;
                $data->save();
            }

            return response()->json([
                'status' => 1,
                'message' => 'Thay đổi trạng thái thành công!'
            ]);
        }
    }
}
