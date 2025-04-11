<?php

use App\Http\Controllers\ChiTietDonHangController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\ChucNangController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\QuanHuyenController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\TinhThanhController;
use App\Http\Controllers\VoucherController;
use App\Models\ChiTietDonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Admin
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'Login']);
Route::get('/admin/profile', [NhanVienController::class, 'profile'])->middleware('nhanVienMiddle');
Route::post('/admin/doi-mat-khau', [NhanVienController::class, 'doiMatKhau'])->middleware('nhanVienMiddle');
Route::post('/admin/update-profile', [NhanVienController::class, 'updateProfile'])->middleware('nhanVienMiddle');

// Admin - CHỨC VỤ
Route::get('/admin/chuc-vu/data', [ChucVuController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/create', [ChucVuController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/update', [ChucVuController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/delete', [ChucVuController::class, 'destroy'])->middleware('nhanVienMiddle');

// Admin - CHỨC NĂNG
Route::get('/admin/chuc-nang/data', [ChucNangController::class, 'getData'])->middleware('nhanVienMiddle');

// PHÂN QUYỀN
Route::get('/admin/phan-quyen/data/{id_chuc_vu}', [PhanQuyenController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/phan-quyen-chuc-vu/create', [PhanQuyenController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/phan-quyen-chuc-vu/delete', [PhanQuyenController::class, 'destroy'])->middleware('nhanVienMiddle');

// Admin - Voucher
Route::get('/admin/voucher/data', [VoucherController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/create', [VoucherController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/delete', [VoucherController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/update', [VoucherController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/change-status', [VoucherController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Admin - Danh Mục
Route::get('/admin/danh-muc/data', [DanhMucController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/create', [DanhMucController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Admin - Khách Hàng
Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/create', [KhachHangController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/change-status', [KhachHangController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/change-active', [KhachHangController::class, 'changeActive'])->middleware('nhanVienMiddle');

// Admin - Quán Ăn
Route::get('/admin/quan-an/data', [QuanAnController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/create', [QuanAnController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/delete', [QuanAnController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/update', [QuanAnController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/change-status', [QuanAnController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/change-active', [QuanAnController::class, 'changeActive'])->middleware('nhanVienMiddle');

// Admin - Shipper
Route::get('/admin/shipper/data', [ShipperController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/create', [ShipperController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/update', [ShipperController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/delete', [ShipperController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/change-status', [ShipperController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/active', [ShipperController::class, 'active'])->middleware('nhanVienMiddle');

// Admin - Tỉnh Thành
Route::get('/admin/tinh-thanh/data', [TinhThanhController::class, 'getData'])->middleware('nhanVienMiddle');
Route::get('/admin/tinh-thanh/data-open', [TinhThanhController::class, 'getDataOpen']);
Route::post('/admin/tinh-thanh/create', [TinhThanhController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/delete', [TinhThanhController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/update', [TinhThanhController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/change-status', [TinhThanhController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Admin - Quận Huyện
Route::post('/admin/quan-huyen/data', [QuanHuyenController::class, 'getData'])->middleware('nhanVienMiddle');
Route::get('/admin/quan-huyen/data-open', [QuanHuyenController::class, 'getDataOpen']);
Route::post('/admin/quan-huyen/create', [QuanHuyenController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/delete', [QuanHuyenController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/update', [QuanHuyenController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/change-status', [QuanHuyenController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Admin - Món Ăn
Route::get('/admin/mon-an/data', [MonAnController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/create', [MonAnController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/delete', [MonAnController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/update', [MonAnController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/change-status', [MonAnController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Admin - Nhân Viên
Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/nhan-vien/change-status', [NhanVienController::class, 'changeStatus'])->middleware('nhanVienMiddle');


// QUÁN ĂN
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);
Route::post('/quan-an/dang-ky', [QuanAnController::class, 'dangKy']);

Route::get('/quan-an/data-login', [QuanAnController::class, 'getDataQuanAn'])->middleware('quanAnMiddle');
Route::post('/quan-an/update-profile', [QuanAnController::class, 'updateProfile'])->middleware('quanAnMiddle');
Route::post('/quan-an/update-password', [QuanAnController::class, 'updatePassword'])->middleware('quanAnMiddle');

// Quán ăn - danh mục
Route::get('/quan-an/danh-muc/data', [QuanAnController::class, 'getDataDanhMuc'])->middleware('quanAnMiddle');
Route::get('/quan-an/danh-muc/data-danh-muc-cha', [QuanAnController::class, 'getDataDanhMucCha'])->middleware('quanAnMiddle');
Route::post('/quan-an/danh-muc/create', [QuanAnController::class, 'createDanhMuc'])->middleware('quanAnMiddle');
Route::post('/quan-an/danh-muc/update', [QuanAnController::class, 'updateDanhMuc'])->middleware('quanAnMiddle');
Route::post('/quan-an/danh-muc/delete', [QuanAnController::class, 'deleteDanhMuc'])->middleware('quanAnMiddle');
Route::post('/quan-an/danh-muc/change', [QuanAnController::class, 'doiTrangThaiDanhMuc'])->middleware('quanAnMiddle');

// quán ăn - món ăn
Route::get('/quan-an/mon-an/data', [QuanAnController::class, 'getDataMonAn'])->middleware('quanAnMiddle');
Route::post('/quan-an/mon-an/create', [QuanAnController::class, 'createMonAn'])->middleware('quanAnMiddle');
Route::post('/quan-an/mon-an/update', [QuanAnController::class, 'updateMonAn'])->middleware('quanAnMiddle');
Route::post('/quan-an/mon-an/delete', [QuanAnController::class, 'deleteMonAn'])->middleware('quanAnMiddle');
Route::post('/quan-an/mon-an/change', [QuanAnController::class, 'doiTrangThaiMonAn'])->middleware('quanAnMiddle');

// Quán ăn - Voucher
Route::get('/quan-an/voucher/data', [VoucherController::class, 'getDataQuanAnVoucher'])->middleware('quanAnMiddle');
Route::post('/quan-an/voucher/create', [VoucherController::class, 'createQuanAnVoucher'])->middleware('quanAnMiddle');
Route::post('/quan-an/voucher/update', [VoucherController::class, 'updateQuanAnVoucher'])->middleware('quanAnMiddle');
Route::post('/quan-an/voucher/delete', [VoucherController::class, 'deleteQuanAnVoucher'])->middleware('quanAnMiddle');
Route::post('/quan-an/voucher/change', [VoucherController::class, 'doiTrangThaiQuanAnVoucher'])->middleware('quanAnMiddle');


// SHIPPER
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);
Route::post('/shipper/dang-ky', [ShipperController::class, 'Register']);
Route::get('/shipper/data-login', [ShipperController::class, 'dataSP'])->middleware('shipperMiddle');
Route::post('/shipper/update-profile', [ShipperController::class, 'updateSP'])->middleware('shipperMiddle');
Route::post('/shipper/update-password', [ShipperController::class, 'updatePassword'])->middleware('shipperMiddle');
Route::get('/shipper/data', [ShipperController::class, 'donHangChuaNhan'])->middleware('shipperMiddle');
Route::get('/shipper/don-hang/data-nhan', [ShipperController::class, 'dataDonHangNhan'])->middleware('shipperMiddle');
Route::get('/shipper/don-hang/data-da-giao', [ShipperController::class, 'dataDaGiao'])->middleware('shipperMiddle');
Route::post('/shipper/nhan-don-hang', [ShipperController::class, 'nhanDonHang'])->middleware('shipperMiddle');
Route::post('/shipper/hoan-thanh-don', [ShipperController::class, 'hoanThanhDonHang'])->middleware('shipperMiddle');


// KHÁCH HÀNG
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);
Route::post('/khach-hang/dang-xuat', [KhachHangController::class, 'DangXuat']);

Route::get('/khach-hang/quan-an/data-open', [QuanAnController::class, 'getDataOpen']);

Route::get('/khach-hang/data-mon-an', [KhachHangController::class, 'getMonAn']);
Route::post('/khach-hang/doi-mat-khau', [KhachHangController::class, 'doiMatKhau']);

Route::post('/khach-hang/quan-huyen/data', [KhachHangController::class, 'getDataQuanHuyen']);
Route::get('/khach-hang/tinh-thanh/data', [KhachHangController::class, 'getDataTinhThanh']);

Route::get('/khach-hang/data-login', [KhachHangController::class, 'getDataKhachHang'])->middleware('khachHangMiddle');
Route::post('/khach-hang/update-profile', [KhachHangController::class, 'updateProfile'])->middleware('khachHangMiddle');
Route::post('/khach-hang/update-password', [KhachHangController::class, 'updatePassword'])->middleware('khachHangMiddle');
Route::get('/khach-hang/dia-chi/data', [KhachHangController::class, 'getDataDiaChi'])->middleware('khachHangMiddle');
Route::post('/khach-hang/dia-chi/create', [KhachHangController::class, 'storeDiaChi'])->middleware('khachHangMiddle');
Route::post('/khach-hang/dia-chi/update', [KhachHangController::class, 'updateDiaChi'])->middleware('khachHangMiddle');
Route::post('/khach-hang/dia-chi/delete', [KhachHangController::class, 'destroyDiaChi'])->middleware('khachHangMiddle');


Route::get('/khach-hang/don-dat-hang/{id_quan_an}', [ChiTietDonHangController::class, 'getDonDatHang']);
Route::get('/khach-hang/xac-nhan-dat-hang/{id_quan_an}/{id_dia_chi_khach}', [ChiTietDonHangController::class, 'xacNhanDatHang']);
Route::post('/khach-hang/don-dat-hang/create', [ChiTietDonHangController::class, 'themGioHang']);
Route::post('/khach-hang/don-dat-hang/update', [ChiTietDonHangController::class, 'updateGioHang']);
Route::post('/khach-hang/don-dat-hang/phi-ship', [ChiTietDonHangController::class, 'tinhPhiShip']);
