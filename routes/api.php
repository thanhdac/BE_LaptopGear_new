<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\QuanHuyenController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\TinhThanhController;
use App\Http\Controllers\VoucherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Admin
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'Login']);
//CHỨC VỤ
Route::get('/admin/chuc-vu/data',[ChucVuController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/create',[ChucVuController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/update',[ChucVuController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/chuc-vu/delete',[ChucVuController::class, 'destroy'])->middleware('nhanVienMiddle');

Route::get('/admin/voucher/data', [VoucherController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/create', [VoucherController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/delete', [VoucherController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/update', [VoucherController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/voucher/change-status', [VoucherController::class, 'changeStatus'])->middleware('nhanVienMiddle');

//Danh Mục
Route::get('/admin/danh-muc/data', [DanhMucController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/create', [DanhMucController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Khách Hàng
Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/create', [KhachHangController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/change-status', [KhachHangController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/khach-hang/change-active', [KhachHangController::class, 'changeActive'])->middleware('nhanVienMiddle');

// Quán Ăn
Route::get('/admin/quan-an/data', [QuanAnController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/create', [QuanAnController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/delete', [QuanAnController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/update', [QuanAnController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/change-status', [QuanAnController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-an/change-active', [QuanAnController::class, 'changeActive'])->middleware('nhanVienMiddle');

// Shipper
Route::get('/admin/shipper/data', [ShipperController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/create', [ShipperController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/update', [ShipperController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/delete', [ShipperController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/change-status', [ShipperController::class, 'changeStatus'])->middleware('nhanVienMiddle');
Route::post('/admin/shipper/active', [ShipperController::class, 'active'])->middleware('nhanVienMiddle');

// Tỉnh Thành
Route::get('/admin/tinh-thanh/data', [TinhThanhController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/create', [TinhThanhController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/delete', [TinhThanhController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/update', [TinhThanhController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/tinh-thanh/change-status', [TinhThanhController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Quận Huyện
Route::get('/admin/quan-huyen/data', [QuanHuyenController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/create', [QuanHuyenController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/delete', [QuanHuyenController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/update', [QuanHuyenController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/quan-huyen/change-status', [QuanHuyenController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Món Ăn
Route::get('/admin/mon-an/data', [MonAnController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/create', [MonAnController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/delete', [MonAnController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/update', [MonAnController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/mon-an/change-status', [MonAnController::class, 'changeStatus'])->middleware('nhanVienMiddle');

// Nhân Viên
Route::get('/admin/tai-khoan/data', [NhanVienController::class, 'getData'])->middleware('nhanVienMiddle');
Route::post('/admin/tai-khoan/create', [NhanVienController::class, 'store'])->middleware('nhanVienMiddle');
Route::post('/admin/tai-khoan/delete', [NhanVienController::class, 'destroy'])->middleware('nhanVienMiddle');
Route::post('/admin/tai-khoan/update', [NhanVienController::class, 'update'])->middleware('nhanVienMiddle');
Route::post('/admin/tai-khoan/change-status', [NhanVienController::class, 'changeStatus'])->middleware('nhanVienMiddle');

//ACTOR QUÁN ĂN
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);








//ACTOR KHÁCH HÀNG
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);








//ACTOR SHIPPER
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);
Route::get('/shipper/data-login', [ShipperController::class, 'dataSP'])->middleware('shipperMiddle');
Route::post('/shipper/update-profile', [ShipperController::class, 'updateSP'])->middleware('shipperMiddle');
Route::post('/shipper/update-password', [ShipperController::class, 'updatePassword'])->middleware('shipperMiddle');
Route::get('/shipper/data', [ShipperController::class, 'donHangChuaNhan'])->middleware('shipperMiddle');
Route::get('/shipper/don-hang/data-nhan', [ShipperController::class, 'dataDonHangNhan'])->middleware('shipperMiddle');
Route::get('/shipper/don-hang/data-da-giao', [ShipperController::class, 'dataDaGiao'])->middleware('shipperMiddle');
Route::post('/shipper/nhan-don-hang', [ShipperController::class, 'nhanDonHang'])->middleware('shipperMiddle');
Route::post('/shipper/hoan-thanh-don', [ShipperController::class, 'hoanThanhDonHang'])->middleware('shipperMiddle');




