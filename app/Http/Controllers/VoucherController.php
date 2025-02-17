<?php

namespace App\Http\Controllers;

use App\Http\Requests\createVoucherRequest;
use App\Http\Requests\deleteVoucherRequest;
use App\Http\Requests\updateVoucherRequest;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function getData()
    {
        $data = Voucher::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function store(createVoucherRequest $request)
    {
        Voucher::create([
            'ma_code'               => $request->ma_code,
            'thoi_gian_bat_dau'     => $request->thoi_gian_bat_dau,
            'thoi_gian_ket_thuc'    => $request->thoi_gian_ket_thuc,
            'loai_giam'             => $request->loai_giam,
            'so_giam_gia'           => $request->so_giam_gia,
            'so_tien_toi_da'        => $request->so_tien_toi_da,
            'don_hang_toi_thieu'    => $request->don_hang_toi_thieu,
            'tinh_trang'            => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới mã giảm giá " . $request->ma_code . " thành công.",
        ]);
    }

    public function update(updateVoucherRequest $request)
    {
        Voucher::find($request->id)->update([
            'ma_code'               => $request->ma_code,
            'thoi_gian_bat_dau'     => $request->thoi_gian_bat_dau,
            'thoi_gian_ket_thuc'    => $request->thoi_gian_ket_thuc,
            'loai_giam'             => $request->loai_giam,
            'so_giam_gia'           => $request->so_giam_gia,
            'so_tien_toi_da'        => $request->so_tien_toi_da,
            'don_hang_toi_thieu'    => $request->don_hang_toi_thieu,
            'tinh_trang'            => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã cập nhật mã giảm giá " . $request->ma_code . " thành công.",
        ]);
    }

    public function destroy(deleteVoucherRequest $request)
    {
        Voucher::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa mã giảm giá thành công.",
        ]);
    }
}
