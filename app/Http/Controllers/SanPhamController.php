<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController
{
    public function getDataClient()
    {
        $data = SanPham::inRandomOrder()->take(4)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getDataTrangChu()
    {
        $data = SanPham::all();


        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getSanPhamById($id_san_pham)
    {
        $data_1 = SanPham::where('san_phams.id', $id_san_pham)
            ->first();

        $data_2 = DanhGia::all();



        if ($data_1) {
            return response()->json([
                'data_1'    => $data_1,
                'data_2'    => $data_2,
                'status'    => true
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "sai"
            ]);
        }
    }
    public function getData()
    {
        $data = SanPham::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        SanPham::create([
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
            'message'   => 'Thêm SanPham ' . $request->ten_sp. ' thành công',
        ]);
    }

    public function update(Request $request)
    {
        SanPham::where('id', $request->id)->update([
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
            'message'   => 'Cập nhật SanPham ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa SanPham thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $SanPham = SanPham::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $SanPham->trang_thai = ($SanPham->trang_thai == SanPham::HOAT_DONG) ? SanPham::TAM_TAT : SanPham::HOAT_DONG;

        $SanPham->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái SanPham thành công',
        ]);
    }


    public function getDataClientSanPham()
    {
        $data = SanPham::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
