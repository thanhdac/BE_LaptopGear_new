<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemGioHangRequest;
use App\Models\ChiTietDonHang;
use App\Models\MonAn;
use App\Models\QuanAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChiTietDonHangController extends Controller
{
    public function getDonDatHang($id_quan_an)
    {
        $khachHang = Auth::guard('sanctum')->user();
        $data_1     =   QuanAn::where('quan_ans.id', $id_quan_an)
                              ->where('quan_ans.tinh_trang', 1)  // Quấn đang bán
                              ->where('quan_ans.is_active', 1)   // Quán đã được kích hoạt
                              ->first();

        $data_2     =   MonAn::where('mon_ans.id_quan_an', $id_quan_an)
                              ->where('mon_ans.tinh_trang', 1)  // Món ăn đang bán
                              ->get();

        $data_3     =   ChiTietDonHang::where('id_don_hang', 0)
                                      ->where('id_khach_hang', $khachHang->id)
                                      ->join('mon_ans', 'mon_ans.id', '=', 'chi_tiet_don_hangs.id_mon_an')
                                      ->select('chi_tiet_don_hangs.*', 'mon_ans.ten_mon_an')
                                      ->get();
        if($data_1) {
            return response()->json([
                'data_1'    =>  $data_1,
                'data_2'    =>  $data_2,
                'data_3'    =>  $data_3,
                'tong_tien' =>  $data_3->sum('thanh_tien'),
                'status'    =>  true
            ]);
        } else {
            return response()->json([
                'status'    =>  false
            ]);
        }

    }

    public function themGioHang(ThemGioHangRequest $request)
    {
        $khachHang = Auth::guard('sanctum')->user();
        $monAn     = MonAn::where('id', $request->id)->first();
        $check     = ChiTietDonHang::where('id_khach_hang', $khachHang->id)
                                   ->where('id_mon_an', $request->id)
                                   ->where('id_don_hang', 0) // Chưa có đơn hàng
                                   ->first();
        if($check) {
            $check->so_luong += 1;
            $check->thanh_tien = $check->don_gia * $check->so_luong;
            $check->save();

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Cập nhật số lượng món ăn thành công'
            ]);
        } else {
            ChiTietDonHang::create([
                'id_mon_an'     =>  $request->id,
                'don_gia'       =>  $monAn->gia_khuyen_mai,
                'so_luong'      =>  1,
                'thanh_tien'    =>  $monAn->gia_khuyen_mai,
                'id_khach_hang' =>  $khachHang->id,
            ]);

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Thêm món ăn vào giỏ hàng thành công'
            ]);
        }
    }
}
