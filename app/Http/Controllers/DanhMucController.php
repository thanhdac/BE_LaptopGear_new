<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController
{
    public function getData()
    {
        $data = DanhMuc::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        DanhMuc::create([
            'ma_dm'   => $request->ma_dm,
            'ten_danh_muc'          => $request->ten_danh_muc,
            'trang_thai'        => $request->trang_thai,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm DanhMuc ' . $request->ten_danh_muc . ' thành công',
        ]);
    }

    public function update(Request $request)
    {
        DanhMuc::where('id', $request->id)->update([
            'ma_dm'  => $request->ma_dm,
            'ten_danh_muc'          => $request->ten_danh_muc,
            'trang_thai'        => $request->trang_thai,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật DanhMuc ' . $request->ten_danh_muc . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        DanhMuc::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa DanhMuc thành công',
        ]);
    }

public function changeStatus(Request $request)
{
    $DanhMuc = DanhMuc::where('id', $request->id)->first();
    // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
    $DanhMuc->trang_thai = ($DanhMuc->trang_thai == DanhMuc::HOAT_DONG) ? DanhMuc::TAM_TAT : DanhMuc::HOAT_DONG;

    $DanhMuc->save();

    return response()->json([
        'status'  => true,
        'message' => 'Thay đổi trạng thái DanhMuc thành công',
    ]);
}


    public function getDataClientDanhMuc()
    {
        $data = DanhMuc::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
