<?php

namespace App\Http\Controllers;

use App\Http\Requests\TinhThanhCreateRequest;
use App\Http\Requests\TinhThanhDeleteRequest;
use App\Http\Requests\TinhThanhUpdateRequest;
use App\Models\QuanHuyen;
use App\Models\TinhThanh;
use Illuminate\Http\Request;

class TinhThanhController extends Controller
{
    public function store(TinhThanhCreateRequest $request)
    {
        TinhThanh::create([
            'ten_tinh_thanh' => $request->ten_tinh_thanh,
            'tinh_trang'     => $request->tinh_trang
        ]);

        return response()->json([
            'status'   => true,
            'message'  => 'Thêm mới thành công'
        ]);
    }
    public function getData()
    {
        $data = TinhThanh::get();
        return response()->json([
            'data'   => $data
        ]);
    }

    public function getDataOpen()
    {
        $data = TinhThanh::where('tinh_trang', 1)->get();
        return response()->json([
            'data'   => $data
        ]);
    }

    public function update(TinhThanhUpdateRequest $request)
    {
        TinhThanh::where('id', $request->id)->update([
            'ten_tinh_thanh' => $request->ten_tinh_thanh,
            'tinh_trang'     => $request->tinh_trang
        ]);

        return response()->json([
            'status'   => true,
            'message'  => 'Cập nhật thành công'
        ]);
    }
    public function destroy(TinhThanhDeleteRequest $request)
    {
        TinhThanh::where('id', $request->id)->delete();
        return response()->json([
            'status'   => true,
            'message'  => 'Xóa thành công'
        ]);
    }

    public function getDataQuanHuyen(Request $request)
    {
        $data = QuanHuyen::where('id_tinh_thanh', $request->id)->get();
        return response()->json([
            'data'   => $data
        ]);
    }

    public function getDataQuanHuyenOpen()
    {
        $data = QuanHuyen::where('trang_thai', 1)->get();
        return response()->json([
            'data'   => $data
        ]);
    }
}
