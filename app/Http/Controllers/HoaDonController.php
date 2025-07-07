<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController
{
 public function getData()
    {
        $data = HoaDon::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        HoaDon::create([
            'trang_thai'     => $request->trang_thai,
            'trang_thai'     => $request->trang_thai,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm HoaDon ' . $request->ten_sp. ' thành công',
        ]);
    }

    public function update(Request $request)
    {
        HoaDon::where('id', $request->id)->update([
            'ma_sp'       => $request->ma_sp,
            'ten_sp'      => $request->ten_sp,
            'don_gia'     => $request->don_gia,
            'trang_thai'  => $request->trang_thai,
            'gia_cu'      => $request->gia_cu,
            'so_luong'    => $request->so_luong,
            'hinh'        => $request->hinh,
            'ma_dm'       => $request->ma_dm,
            'mo_ta'       => $request->mo_ta,
            'trailer'     => $request->trailer,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật HoaDon ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        HoaDon::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa HoaDon thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $HoaDon = HoaDon::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $HoaDon->trang_thai = ($HoaDon->trang_thai == HoaDon::HOAT_DONG) ? HoaDon::TAM_TAT : HoaDon::HOAT_DONG;

        $HoaDon->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái HoaDon thành công',
        ]);
    }


    public function getDataClientHoaDon()
    {
        $data = HoaDon::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
