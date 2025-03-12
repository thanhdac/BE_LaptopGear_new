<?php

use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\ShipperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Admin
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'Login']);
Route::get('/admin/profile', [NhanVienController::class, 'profile']);
Route::post('/admin/doi-mat-khau', [NhanVienController::class, 'doiMatKhau']);



// Khách Hàng
<<<<<<< HEAD
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkTokenUser']);
=======
Route::get('/khach-hang/check-token', [KhachHangController::class, 'checkToken']);
Route::post('/khach-hang/doi-mat-khau', [KhachHangController::class, 'doiMatKhau']);
Route::get('/khach-hang/dia-chi/data', [KhachHangController::class, 'getDataDiaChi']);
Route::post('/khach-hang/dia-chi/create', [KhachHangController::class, 'storeDiaChi']);
Route::post('/khach-hang/dia-chi/update', [KhachHangController::class, 'updateDiaChi']);
Route::post('/khach-hang/dia-chi/delete', [KhachHangController::class, 'destroyDiaChi']);
Route::get('/khach-hang/profile', [KhachHangController::class, 'profile']);
Route::post('/khach-hang/register', [KhachHangController::class, 'register']);
>>>>>>> f0d67c805afc2941c4502096c5a65c5147adab6e
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'Login']);

Route::post('/khach-hang/doi-mat-khau', [KhachHangController::class, 'doiMatKhau']);



// Quán Ăn
Route::get('/quan-an/check-token', [QuanAnController::class, 'checkTokenQuanAn']);
Route::post('/quan-an/dang-nhap', [QuanAnController::class, 'Login']);
Route::get('/quan-an/profile', [QuanAnController::class, 'profile']);

Route::post('/quan-an/doi-mat-khau', [QuanAnController::class, 'doiMatKhau']);



// Shipper
Route::get('/shipper/check-token', [ShipperController::class, 'checkTokenShipper']);
Route::post('/shipper/dang-nhap', [ShipperController::class, 'Login']);
Route::get('/shipper/profile', [ShipperController::class, 'profile']);
Route::post('/shipper/doi-mat-khau', [ShipperController::class, 'doiMatKhau']);
