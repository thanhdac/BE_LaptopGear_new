<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController
{
    public function getData()
    {
        $data = NhanVien::get();

        return response()->json([
            'data' => $data
        ]);
    }

public function addData(Request $request)
{
    // Tạo mã nhân viên tự động
    $lastNhanVien = NhanVien::orderBy('id', 'desc')->first();
    $lastId = $lastNhanVien ? intval(substr($lastNhanVien->ma_nv, 2)) : 0;
    $newId = $lastId + 1;
    $maNV = 'NV' . str_pad($newId, 2, '0', STR_PAD_LEFT); // VD: NV01, NV02,...

    // Tạo mới nhân viên
    NhanVien::create([
        'ma_nv'         => $maNV,
        'ho_ten'        => $request->ho_ten,
        'ngay_sinh'     => $request->ngay_sinh,
        'dia_chi'       => $request->dia_chi,
        'luong_cb'      => $request->luong_cb,
        'sdt'           => $request->sdt,
        'email'         => $request->email,
        'mat_khau'      => $request->mat_khau,
        'trang_thai'    => $request->trang_thai,
        'ghi_chu'       => $request->ghi_chu,
      'ngay_vao_lam' => $request->ngay_vao_lam,
        'vai_tro'       => $request->vai_tro,
    ]);

    return response()->json([
        'status'    => true,
        'message'   => 'Thêm nhân viên ' . $request->ho_ten . ' thành công',
    ]);
}


    public function update(Request $request)
    {
        NhanVien::where('id', $request->id)->update([
             'ma_nv'         => $request->ma_nv,
            'ho_ten'        => $request->ho_ten,
            'ngay_sinh'     => $request->ngay_sinh,
            'dia_chi'       => $request->dia_chi,
            'luong_cb'      => $request->luong_cb,
            'sdt'           => $request->sdt,
            'email'         => $request->email,
            'mat_khau'         => $request->mat_khau,
            'trang_thai'    => $request->trang_thai,
            'ghi_chu'       => $request->ghi_chu,
            'ngay_vao_lam'  => $request->ngay_vao_lam,
            'vai_tro'       => $request->vai_tro,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật NhanVien ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        NhanVien::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa NhanVien thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $NhanVien = NhanVien::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $NhanVien->trang_thai = ($NhanVien->trang_thai == NhanVien::HOAT_DONG) ? NhanVien::TAM_TAT : NhanVien::HOAT_DONG;

        $NhanVien->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái NhanVien thành công',
        ]);
    }


    public function getDataClientNhanVien()
    {
        $data = NhanVien::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }


        public function dangNhap(Request $request)
    {
        $check = NhanVien::where('email', $request->email)
            ->where('mat_khau', $request->mat_khau)->first();
        if ($check) {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                // 'token' => $check->createToken('key_admin')->plainTextToken
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản sai email hoặc password',
            ]);
        }
    }
}
