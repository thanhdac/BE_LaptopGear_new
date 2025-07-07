<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    // Lấy danh sách mã đang dùng, ép kiểu số nguyên
    $usedCodes = DanhMuc::pluck('ma_dm')->map(function ($ma) {
        return (int)$ma;
    })->toArray();

    sort($usedCodes); // sắp xếp tăng dần

    // Bắt đầu từ 2, tăng mỗi lần 2, tìm mã đầu tiên chưa dùng
    $newCode = 2;
    while (in_array($newCode, $usedCodes)) {
        $newCode += 2;
    }

    // Format lại thành chuỗi dạng "0002", "0004", ...
    $newMaDm = str_pad($newCode, 4, '0', STR_PAD_LEFT);

    // Insert danh mục
    DanhMuc::create([
        'ma_dm'         => $newMaDm,
        'ten_danh_muc'  => $request->ten_danh_muc,
        'trang_thai'    => $request->trang_thai,
    ]);

    return response()->json([
        'status'  => true,
        'message' => 'Thêm danh mục "' . $request->ten_danh_muc . '" thành công với mã: ' . $newMaDm,
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
