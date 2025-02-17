<?php

namespace App\Http\Controllers;

use App\Http\Requests\DanhMucCreateRequest;
use App\Http\Requests\DanhMucDeleteRequest;
use App\Http\Requests\DanhMucUpdateRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getData()
    {
        $data = DanhMuc::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(DanhMucCreateRequest $request)
    {
        DanhMuc::create([
            'ten_danh_muc'       => $request->ten_danh_muc,
            'slug_danh_muc'      => $request->slug_danh_muc,
            'hinh_anh'           => $request->hinh_anh,
            'id_danh_muc_cha'    => $request->id_danh_muc_cha,
            'tinh_trang'         => $request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới danh mục ' . $request->ten_danh_muc . ' thành công.',
        ]);
    }
    public function update(DanhMucUpdateRequest $request)
    {
        DanhMuc::find($request->id)->update([
            'ten_danh_muc'       => $request->ten_danh_muc,
            'slug_danh_muc'      => $request->slug_danh_muc,
            'hinh_anh'           => $request->hinh_anh,
            'id_danh_muc_cha'    => $request->id_danh_muc_cha,
            'tinh_trang'         => $request->tinh_trang,
        ]);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật danh mục ' . $request->ten_danh_muc . ' thành công.',
        ]);
    }
    public function destroy(DanhMucDeleteRequest $request)
    {
        DanhMuc::find($request->id)->delete();
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xóa danh mục thành công.',
        ]);
    }
}
