<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipperCreateRequest;
use App\Http\Requests\ShipperDangKyRequest;
use App\Http\Requests\ShipperDeleteRequest;
use App\Http\Requests\ShipperUpdateRequest;
use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function dangKyShipper(ShipperDangKyRequest $request)
    {
        Shipper::create([
            'ho_va_ten'             => $request->ho_va_ten,
            'so_dien_thoai'         => $request->so_dien_thoai,
            'password'              => $request->password,
            'email'                 => $request->email,
            'cccd'                  => $request->cccd,
            'dia_chi_thuong_tru'    => $request->dia_chi_thuong_tru,
            'toa_do_x'              => $request->toa_do_x,
            'toa_do_y'              => $request->toa_do_y,
            'id_tinh_thanh'         => $request->id_tinh_thanh,
            'id_quan_huyen'         => $request->id_quan_huyen,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã đăng ký shipper " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function getData()
    {
        $data = Shipper::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(ShipperCreateRequest $request)
    {
        Shipper::create([
            'ho_va_ten'             => $request->ho_va_ten,
            'so_dien_thoai'         => $request->so_dien_thoai,
            'password'              => $request->password,
            'email'                 => $request->email,
            'cccd'                  => $request->cccd,
            'dia_chi_thuong_tru'    => $request->dia_chi_thuong_tru,
            'toa_do_x'              => $request->toa_do_x,
            'toa_do_y'              => $request->toa_do_y,
            'id_tinh_thanh'         => $request->id_tinh_thanh,
            'id_quan_huyen'         => $request->id_quan_huyen,
            'is_active'             => $request->is_active,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã thêm mới shipper " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function update(ShipperUpdateRequest $request)
    {
        Shipper::where('id', $request->id)->update([
            'ho_va_ten'             => $request->ho_va_ten,
            'so_dien_thoai'         => $request->so_dien_thoai,
            'email'                 => $request->email,
            'cccd'                  => $request->cccd,
            'dia_chi_thuong_tru'    => $request->dia_chi_thuong_tru,
            'toa_do_x'              => $request->toa_do_x,
            'toa_do_y'              => $request->toa_do_y,
            'id_tinh_thanh'         => $request->id_tinh_thanh,
            'id_quan_huyen'         => $request->id_quan_huyen,
            'is_active'             => $request->is_active,
            'is_open'               => $request->is_open,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật shipper " . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function destroy(ShipperDeleteRequest $request)
    {
        Shipper::where('id', $request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa shipper " . $request->ho_va_ten . " thành công.",
        ]);
    }
}
