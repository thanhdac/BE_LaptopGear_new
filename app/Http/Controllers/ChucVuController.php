<?php

namespace App\Http\Controllers;

use App\Http\Requests\createChucVuRequest;
use App\Http\Requests\deleteChucVuRequest;
use App\Http\Requests\updateChucVuRequest;
use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function getData()
    {
        $data = ChucVu::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(createChucVuRequest $request)
    {
        $data = ChucVu::create([
            'ten_chuc_vu' => $request->ten_chuc_vu,
            'slug_chuc_vu' => $request->slug_chuc_vu,
            'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Thêm chức vụ ' . $data->ten_chuc_vu . ' thành công',
        ]);
    }
    public function update(updateChucVuRequest $request)
    {
        $data = ChucVu::where('id',$request->id)
                     ->update([
                        'ten_chuc_vu' => $request->ten_chuc_vu,
                        'slug_chuc_vu' => $request->slug_chuc_vu,
                        'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Cập nhật chức vụ ' . $request->ten_chuc_vu .' thành công',
        ]);
    }
    public function destroy(deleteChucVuRequest $request)
    {
        $data = ChucVu::where('id',$request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'Xóa chức vụ ' . $request->ten_chuc_vu . ' thành công',
        ]);
    }

}
