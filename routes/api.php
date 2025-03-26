<?php

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

Route::get('/admin/voucher/data', [VoucherController::class, 'getData']);
Route::post('/admin/voucher/create', [VoucherController::class, 'store']);
Route::post('/admin/voucher/delete', [VoucherController::class, 'destroy']);
Route::post('/admin/voucher/update', [VoucherController::class, 'update']);
Route::post('/admin/voucher/change-status', [VoucherController::class, 'changeStatus']);

Route::get('/admin/danh-muc/data', [DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc/create', [DanhMucController::class, 'store']);
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy']);
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::post('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus']);

// Khách Hàng
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);
Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/create', [KhachHangController::class, 'store']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/change-status', [KhachHangController::class, 'changeStatus']);
Route::post('/admin/khach-hang/change-active', [KhachHangController::class, 'changeActive']);


// Quán Ăn
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);

Route::get('/admin/quan-an/data', [QuanAnController::class, 'getData']);
Route::post('/admin/quan-an/create', [QuanAnController::class, 'store']);
Route::post('/admin/quan-an/delete', [QuanAnController::class, 'destroy']);
Route::post('/admin/quan-an/update', [QuanAnController::class, 'update']);
Route::post('/admin/quan-an/change-status', [QuanAnController::class, 'changeStatus']);
Route::post('/admin/quan-an/change-active', [QuanAnController::class, 'changeActive']);


// Shipper
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);

Route::get('/admin/shipper/data', [ShipperController::class, 'getData']);
Route::post('/admin/shipper/create', [ShipperController::class, 'store']);
Route::post('/admin/shipper/update', [ShipperController::class, 'update']);
Route::post('/admin/shipper/delete', [ShipperController::class, 'destroy']);
Route::post('/admin/shipper/change-status', [ShipperController::class, 'changeStatus']);
Route::post('/admin/shipper/active', [ShipperController::class, 'active']);


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
