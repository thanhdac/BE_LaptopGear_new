<?php

use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\QuanAnController;
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
Route::get('/admin/profile', [NhanVienController::class, 'profile']);
Route::post('/admin/doi-mat-khau', [NhanVienController::class, 'doiMatKhau']); //


Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);

Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/create', [KhachHangController::class, 'store']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);

Route::get('/admin/voucher/data', [VoucherController::class, 'getData']);
Route::post('/admin/voucher/create', [VoucherController::class, 'store']);
Route::post('/admin/voucher/delete', [VoucherController::class, 'destroy']);
Route::post('/admin/voucher/update', [VoucherController::class, 'update']);

Route::get('/admin/quan-an/data', [QuanAnController::class, 'getData']);
Route::post('/admin/quan-an/create', [QuanAnController::class, 'store']);
Route::post('/admin/quan-an/delete', [QuanAnController::class, 'destroy']);
Route::post('/admin/quan-an/update', [QuanAnController::class, 'update']);

Route::get('/admin/phan-quyen/data', [PhanQuyenController::class, 'getData']);
Route::post('/admin/phan-quyen/create', [PhanQuyenController::class, 'create']);
Route::post('/admin/phan-quyen/update', [PhanQuyenController::class, 'update']);
Route::post('/admin/phan-quyen/delete', [PhanQuyenController::class, 'destroy']);

Route::get('/admin/danh-muc/data', [DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc/create', [DanhMucController::class, 'store']);
Route::post('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::post('/admin/danh-muc/delete', [DanhMucController::class, 'destroy']);

Route::get('/admin/tinh-thanh/data', [TinhThanhController::class, 'getData']);
Route::get('/admin/tinh-thanh/data-open', [TinhThanhController::class, 'getDataOpen']);
Route::post('/admin/tinh-thanh/create', [TinhThanhController::class, 'store']);
Route::post('/admin/tinh-thanh/update', [TinhThanhController::class, 'update']);
Route::post('/admin/tinh-thanh/delete', [TinhThanhController::class, 'destroy']);

Route::post('/admin/quan-huyen/data', [TinhThanhController::class, 'getDataQuanHuyen']);
Route::get('/admin/quan-huyen/data-open', [TinhThanhController::class, 'getDataQuanHuyenOpen']);

Route::get('/admin/shipper/data', [ShipperController::class, 'getData']);
Route::post('/admin/shipper/create', [ShipperController::class, 'store']);
Route::post('/admin/shipper/update', [ShipperController::class, 'update']);
Route::post('/admin/shipper/delete', [ShipperController::class, 'destroy']);


// Khách Hàng
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::get('/khach-hang/dia-chi/data', [KhachHangController::class, 'getDataDiaChi']);
Route::post('/khach-hang/dia-chi/create', [KhachHangController::class, 'storeDiaChi']);
Route::post('/khach-hang/dia-chi/update', [KhachHangController::class, 'updateDiaChi']);
Route::post('/khach-hang/dia-chi/delete', [KhachHangController::class, 'destroyDiaChi']);
Route::get('/khach-hang/profile', [KhachHangController::class, 'profile']);
Route::post('/khach-hang/register', [KhachHangController::class, 'register']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);

Route::post('/khach-hang/doi-mat-khau', [KhachHangController::class, 'doiMatKhau']); //



// Quán Ăn
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-ky', [QuanAnController::class, 'dangKyQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);
Route::get('/quan-an/profile', [QuanAnController::class, 'profile']);

Route::post('/quan-an/doi-mat-khau', [QuanAnController::class, 'doiMatKhau']); //



// Shipper
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-ky', [ShipperController::class, 'dangKyShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);
Route::get('/shipper/profile', [ShipperController::class, 'profile']);
Route::post('/shipper/doi-mat-khau', [ShipperController::class, 'doiMatKhau']); //
