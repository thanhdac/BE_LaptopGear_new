<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class GioHangController
{
     public function getData()
    {
        $data = GioHang::all();

        return response()->json([
            'data' => $data
        ]);
    }
        public function addData(Request $request)
    {
        GioHang::create([
            'ma_sp'       => $request->ma_sp,
            'ten_sp'      => $request->ten_sp,
            'don_gia'     => $request->don_gia,
            'trang_thai'  => $request->trang_thai,
            'gia_cu'      => $request->gia_cu,
            'so_luong'    => $request->so_luong,
            'hinh'        => $request->hinh,
            'ma_dm'       => $request->ma_dm,
            'mo_ta'       => $request->mo_ta,

        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm GioHang ' . $request->ten_sp. ' thành công',
        ]);
    }
}
