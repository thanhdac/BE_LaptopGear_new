<?php

namespace App\Http\Controllers;

use App\Http\Requests\createQuyenRequest;
use App\Http\Requests\deleteQuyenRequest;
use App\Http\Requests\updateQuyenRequest;
use App\Models\PhanQuyen;
use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
    public function getData()
    {
        $data = PhanQuyen::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function create(createQuyenRequest $request)
    {
        PhanQuyen::create([
            'ten_quyen' => $request->ten_quyen,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới quyền " . $request->ten_quyen . " thành công.",
        ]);
    }

    public function update(updateQuyenRequest $request)
    {
        PhanQuyen::find($request->id)->update([
            'ten_quyen' => $request->ten_quyen,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật quyền " . $request->ten_quyen . " thành công.",
        ]);
    }

    public function destroy(deleteQuyenRequest $request)
    {
        PhanQuyen::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa quyền thành công.",
        ]);
    }
}
