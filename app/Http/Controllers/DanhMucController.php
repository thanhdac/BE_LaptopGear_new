<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatDanhMucRequest;
use App\Http\Requests\ThemMoiDanhMucRequest;
use App\Http\Requests\XoaDanhMucRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getData()
    {
        $data = DanhMuc::all();
        return response()->json([
            'status' => 1,
            'data' => $data
        ]);
    }
    public function store(ThemMoiDanhMucRequest $request)
    {
        $data = DanhMuc::create($request->all());
        return response()->json([
            'status' => 1,
            'message' => 'Thêm danh mục thành công'
        ]);
    }
    public function destroy(XoaDanhMucRequest $request)
    {
        $data = DanhMuc::find($request->id);
        $data->delete();
        return response()->json([
            'status' => 1,
            'message' => 'Xóa danh mục thành công'
        ]);
    }
    public function update(CapNhatDanhMucRequest $request)
    {
        $data = DanhMuc::find($request->id);
        $data->update($request->all());
        return response()->json([
            'status' => 1,
            'message' => 'Cập nhật danh mục thành công'
        ]);
    }
    public function changeStatus(XoaDanhMucRequest $request)
    {
        $data = DanhMuc::find($request->id);
        if ($data->tinh_trang == 1) {
            $data->tinh_trang = 0;
        } else {
            $data->tinh_trang = 1;
        }
        $data->save();
        return response()->json([
            'status' => 1,
            'message' => 'Cập nhật trạng thái danh mục thành công'
        ]);
    }
}
