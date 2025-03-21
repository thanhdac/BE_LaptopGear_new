<?php

use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\ShipperController;
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


// Quán Ăn
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);




// Shipper
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);
