<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDonHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chi_tiet_don_hangs')->delete();
        DB::table('chi_tiet_don_hangs')->truncate();
        DB::table('chi_tiet_don_hangs')->insert([
            [
                'id' => 1,
                'id_don_hang' => 1,
                'id_khach_hang' => 1,
                'id_mon_an' => 1, // Cafe Dừa
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 20000,
                'thanh_tien' => 20000,
            ],
            [
                'id' => 2,
                'id_don_hang' => 1,
                'id_khach_hang' => 1,
                'id_mon_an' => 2, // Cafe Máy
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 15000,
                'thanh_tien' => 15000,
            ],
            [
                'id' => 3,
                'id_don_hang' => 2,
                'id_khach_hang' => 2,
                'id_mon_an' => 9, // Lục Trà Chanh
                'id_quan_an' => 3,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 4,
                'id_don_hang' => 3,
                'id_khach_hang' => 3,
                'id_mon_an' => 13, // Phin Sữa Đá
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 5,
                'id_don_hang' => 3,
                'id_khach_hang' => 3,
                'id_mon_an' => 15, // Bạc Xỉu
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 6,
                'id_don_hang' => 4,
                'id_khach_hang' => 4,
                'id_mon_an' => 19, // Cơm Tấm Sườn
                'id_quan_an' => 5,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 7,
                'id_don_hang' => 5,
                'id_khach_hang' => 5,
                'id_mon_an' => 22, // Cơm Chiên Dương Châu
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 8,
                'id_don_hang' => 6,
                'id_khach_hang' => 6,
                'id_mon_an' => 25, // Cơm Chiên Trứng
                'id_quan_an' => 7,
                'so_luong' => 1,
                'don_gia' => 50000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 9,
                'id_don_hang' => 7,
                'id_khach_hang' => 7,
                'id_mon_an' => 27, // Cơm Cá Kho
                'id_quan_an' => 8,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 10,
                'id_don_hang' => 8,
                'id_khach_hang' => 1,
                'id_mon_an' => 30, // Xôi Chiên Thịt Băm
                'id_quan_an' => 9,
                'so_luong' => 2,
                'don_gia' => 20000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 11,
                'id_don_hang' => 11,
                'id_khach_hang' => 4,
                'id_mon_an' => 39, // Bún Thập Cẩm
                'id_quan_an' => 10,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 12,
                'id_don_hang' => 12,
                'id_khach_hang' => 5,
                'id_mon_an' => 41, // Nước Ép Cà Rốt
                'id_quan_an' => 11,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 13,
                'id_don_hang' => 13,
                'id_khach_hang' => 6,
                'id_mon_an' => 45, // Trà Sữa Trân Châu Đường Đen
                'id_quan_an' => 12,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 14,
                'id_don_hang' => 14,
                'id_khach_hang' => 7,
                'id_mon_an' => 53, // Cơm Chay
                'id_quan_an' => 13,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 15,
                'id_don_hang' => 15,
                'id_khach_hang' => 1,
                'id_mon_an' => 56, // Cà Ri Chay
                'id_quan_an' => 14,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 16,
                'id_don_hang' => 16,
                'id_khach_hang' => 2,
                'id_mon_an' => 58, // Bánh Su Kem
                'id_quan_an' => 15,
                'so_luong' => 1,
                'don_gia' => 40000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 17,
                'id_don_hang' => 17,
                'id_khach_hang' => 3,
                'id_mon_an' => 61, // Bánh Mì Heo Quay
                'id_quan_an' => 16,
                'so_luong' => 1,
                'don_gia' => 50000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 18,
                'id_don_hang' => 18,
                'id_khach_hang' => 4,
                'id_mon_an' => 64, // Nước Dừa
                'id_quan_an' => 17,
                'so_luong' => 1,
                'don_gia' => 35000,
                'thanh_tien' => 35000,
            ],
            [
                'id' => 19,
                'id_don_hang' => 19,
                'id_khach_hang' => 5,
                'id_mon_an' => 76, // Sườn Bì
                'id_quan_an' => 18,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 20,
                'id_don_hang' => 20,
                'id_khach_hang' => 6,
                'id_mon_an' => 78, // Súp Cua
                'id_quan_an' => 19,
                'so_luong' => 1,
                'don_gia' => 40000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 21,
                'id_don_hang' => 21,
                'id_khach_hang' => 1,
                'id_mon_an' => 9, // Lục Trà Chanh
                'id_quan_an' => 3,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 22,
                'id_don_hang' => 21,
                'id_khach_hang' => 1,
                'id_mon_an' => 10, // Lục Trà Xoài
                'id_quan_an' => 3,
                'so_luong' => 1,
                'don_gia' => 10000,
                'thanh_tien' => 10000,
            ],
            [
                'id' => 23,
                'id_don_hang' => 22,
                'id_khach_hang' => 2,
                'id_mon_an' => 13, // Phin Sữa Đá
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 24,
                'id_don_hang' => 22,
                'id_khach_hang' => 2,
                'id_mon_an' => 14, // Phin Đen Đá
                'id_quan_an' => 4,
                'so_luong' => 3,
                'don_gia' => 15000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 25,
                'id_don_hang' => 23,
                'id_khach_hang' => 3,
                'id_mon_an' => 19, // Cơm Tấm Sườn
                'id_quan_an' => 5,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 26,
                'id_don_hang' => 24,
                'id_khach_hang' => 4,
                'id_mon_an' => 22, // Cơm Chiên Dương Châu
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 27,
                'id_don_hang' => 24,
                'id_khach_hang' => 4,
                'id_mon_an' => 23, // Cơm Đùi Gà Quay
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 40000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 28,
                'id_don_hang' => 25,
                'id_khach_hang' => 5,
                'id_mon_an' => 25, // Cơm Chiên Trứng
                'id_quan_an' => 7,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 29,
                'id_don_hang' => 25,
                'id_khach_hang' => 5,
                'id_mon_an' => 26, // Cơm Chiên Heo Quay
                'id_quan_an' => 7,
                'so_luong' => 2,
                'don_gia' => 20000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 30,
                'id_don_hang' => 26,
                'id_khach_hang' => 6,
                'id_mon_an' => 27, // Cơm Cá Kho
                'id_quan_an' => 8,
                'so_luong' => 2,
                'don_gia' => 35000,
                'thanh_tien' => 70000,
            ],
            [
                'id' => 31,
                'id_don_hang' => 31,
                'id_khach_hang' => 1,
                'id_mon_an' => 1, // Cafe Dừa
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 20000,
                'thanh_tien' => 20000,
            ],
            [
                'id' => 32,
                'id_don_hang' => 31,
                'id_khach_hang' => 1,
                'id_mon_an' => 2, // Cafe Máy
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 33,
                'id_don_hang' => 31,
                'id_khach_hang' => 1,
                'id_mon_an' => 3, // Cafe Sữa
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 32
            [
                'id' => 34,
                'id_don_hang' => 32,
                'id_khach_hang' => 2,
                'id_mon_an' => 9, // Lục Trà Chanh
                'id_quan_an' => 3,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 35,
                'id_don_hang' => 32,
                'id_khach_hang' => 2,
                'id_mon_an' => 10, // Lục Trà Xoài
                'id_quan_an' => 3,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            // Đơn hàng 33
            [
                'id' => 36,
                'id_don_hang' => 33,
                'id_khach_hang' => 3,
                'id_mon_an' => 13, // Phin Sữa Đá
                'id_quan_an' => 4,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 37,
                'id_don_hang' => 33,
                'id_khach_hang' => 3,
                'id_mon_an' => 14, // Phin Đen Đá
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 34
            [
                'id' => 38,
                'id_don_hang' => 34,
                'id_khach_hang' => 4,
                'id_mon_an' => 19, // Cơm Tấm Sườn
                'id_quan_an' => 5,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 39,
                'id_don_hang' => 34,
                'id_khach_hang' => 4,
                'id_mon_an' => 20, // Cơm Tấm Sườn Nướng
                'id_quan_an' => 5,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 35
            [
                'id' => 40,
                'id_don_hang' => 35,
                'id_khach_hang' => 5,
                'id_mon_an' => 22, // Cơm Chiên Dương Châu
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 41,
                'id_don_hang' => 35,
                'id_khach_hang' => 5,
                'id_mon_an' => 23, // Cơm Đùi Gà Quay
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 50000,
                'thanh_tien' => 50000,
            ],
            // Đơn hàng 36
            [
                'id' => 42,
                'id_don_hang' => 36,
                'id_khach_hang' => 6,
                'id_mon_an' => 25, // Cơm Chiên Trứng
                'id_quan_an' => 7,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 43,
                'id_don_hang' => 36,
                'id_khach_hang' => 6,
                'id_mon_an' => 26, // Cơm Chiên Heo Quay
                'id_quan_an' => 7,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            // Đơn hàng 37
            [
                'id' => 44,
                'id_don_hang' => 37,
                'id_khach_hang' => 7,
                'id_mon_an' => 27, // Cơm Cá Kho
                'id_quan_an' => 8,
                'so_luong' => 3,
                'don_gia' => 35000,
                'thanh_tien' => 105000,
            ],
            // Đơn hàng 38
            [
                'id' => 45,
                'id_don_hang' => 38,
                'id_khach_hang' => 1,
                'id_mon_an' => 30, // Xôi Chiên Thịt Băm
                'id_quan_an' => 9,
                'so_luong' => 2,
                'don_gia' => 20000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 46,
                'id_don_hang' => 38,
                'id_khach_hang' => 1,
                'id_mon_an' => 31, // Xôi Chiên Thịt Xíu
                'id_quan_an' => 9,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 39
            [
                'id' => 47,
                'id_don_hang' => 39,
                'id_khach_hang' => 2,
                'id_mon_an' => 39, // Bún Thập Cẩm
                'id_quan_an' => 10,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 48,
                'id_don_hang' => 39,
                'id_khach_hang' => 2,
                'id_mon_an' => 40, // Bún Mắm
                'id_quan_an' => 10,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            // Đơn hàng 40
            [
                'id' => 49,
                'id_don_hang' => 40,
                'id_khach_hang' => 3,
                'id_mon_an' => 41, // Nước Ép Cà Rốt
                'id_quan_an' => 11,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 50,
                'id_don_hang' => 40,
                'id_khach_hang' => 3,
                'id_mon_an' => 42, // Nước Dừa
                'id_quan_an' => 11,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 51,
                'id_don_hang' => 41,
                'id_khach_hang' => 4,
                'id_mon_an' => 53, // Cơm Chay
                'id_quan_an' => 13,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 52,
                'id_don_hang' => 41,
                'id_khach_hang' => 4,
                'id_mon_an' => 54, // Bánh Canh Chay
                'id_quan_an' => 13,
                'so_luong' => 1,
                'don_gia' => 20000,
                'thanh_tien' => 20000,
            ],
            // Đơn hàng 42
            [
                'id' => 53,
                'id_don_hang' => 42,
                'id_khach_hang' => 5,
                'id_mon_an' => 56, // Cà Ri Chay
                'id_quan_an' => 14,
                'so_luong' => 1,
                'don_gia' => 50000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 54,
                'id_don_hang' => 42,
                'id_khach_hang' => 5,
                'id_mon_an' => 57, // Bánh Kem
                'id_quan_an' => 14,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            // Đơn hàng 43
            [
                'id' => 55,
                'id_don_hang' => 43,
                'id_khach_hang' => 6,
                'id_mon_an' => 60, // Đen Đá
                'id_quan_an' => 15,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 56,
                'id_don_hang' => 43,
                'id_khach_hang' => 6,
                'id_mon_an' => 61, // Bánh Mì Heo Quay
                'id_quan_an' => 15,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 44
            [
                'id' => 57,
                'id_don_hang' => 44,
                'id_khach_hang' => 7,
                'id_mon_an' => 64, // Nước Dừa
                'id_quan_an' => 16,
                'so_luong' => 3,
                'don_gia' => 30000,
                'thanh_tien' => 90000,
            ],
            // Đơn hàng 45
            [
                'id' => 58,
                'id_don_hang' => 45,
                'id_khach_hang' => 1,
                'id_mon_an' => 70, // Chè Thái
                'id_quan_an' => 17,
                'so_luong' => 2,
                'don_gia' => 50000,
                'thanh_tien' => 100000,
            ],
            // Đơn hàng 46
            [
                'id' => 59,
                'id_don_hang' => 46,
                'id_khach_hang' => 2,
                'id_mon_an' => 75, // Sườn Bì Chả
                'id_quan_an' => 18,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 60,
                'id_don_hang' => 46,
                'id_khach_hang' => 2,
                'id_mon_an' => 76, // Sườn Bì
                'id_quan_an' => 18,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            // Đơn hàng 47
            [
                'id' => 61,
                'id_don_hang' => 47,
                'id_khach_hang' => 3,
                'id_mon_an' => 78, // Súp Cua
                'id_quan_an' => 19,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 62,
                'id_don_hang' => 47,
                'id_khach_hang' => 3,
                'id_mon_an' => 79, // Súp Bột Báng
                'id_quan_an' => 19,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 48
            [
                'id' => 63,
                'id_don_hang' => 48,
                'id_khach_hang' => 4,
                'id_mon_an' => 81, // Cháo Lòng
                'id_quan_an' => 20,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 64,
                'id_don_hang' => 48,
                'id_khach_hang' => 4,
                'id_mon_an' => 82, // Lòng Trộn
                'id_quan_an' => 20,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            // Đơn hàng 49
            [
                'id' => 65,
                'id_don_hang' => 49,
                'id_khach_hang' => 5,
                'id_mon_an' => 1, // Cafe Dừa
                'id_quan_an' => 1,
                'so_luong' => 1,
                'don_gia' => 20000,
                'thanh_tien' => 20000,
            ],
            [
                'id' => 66,
                'id_don_hang' => 49,
                'id_khach_hang' => 5,
                'id_mon_an' => 2, // Cafe Máy
                'id_quan_an' => 1,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 67,
                'id_don_hang' => 49,
                'id_khach_hang' => 5,
                'id_mon_an' => 3, // Cafe Sữa
                'id_quan_an' => 1,
                'so_luong' => 1,
                'don_gia' => 50000,
                'thanh_tien' => 50000,
            ],
            // Đơn hàng 50
            [
                'id' => 68,
                'id_don_hang' => 50,
                'id_khach_hang' => 6,
                'id_mon_an' => 5, // Nước Chanh
                'id_quan_an' => 2,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 69,
                'id_don_hang' => 50,
                'id_khach_hang' => 6,
                'id_mon_an' => 6, // Nước Cam Ép
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 40000,
                'thanh_tien' => 40000,
            ],
            [
                'id' => 70,
                'id_don_hang' => 51,
                'id_khach_hang' => 7,
                'id_mon_an' => 9, // Lục Trà Chanh
                'id_quan_an' => 3,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 71,
                'id_don_hang' => 51,
                'id_khach_hang' => 7,
                'id_mon_an' => 10, // Lục Trà Xoài
                'id_quan_an' => 3,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 52
            [
                'id' => 72,
                'id_don_hang' => 52,
                'id_khach_hang' => 1,
                'id_mon_an' => 13, // Phin Sữa Đá
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 73,
                'id_don_hang' => 52,
                'id_khach_hang' => 1,
                'id_mon_an' => 14, // Phin Đen Đá
                'id_quan_an' => 4,
                'so_luong' => 1,
                'don_gia' => 35000,
                'thanh_tien' => 35000,
            ],
            // Đơn hàng 53
            [
                'id' => 74,
                'id_don_hang' => 53,
                'id_khach_hang' => 2,
                'id_mon_an' => 19, // Cơm Tấm Sườn
                'id_quan_an' => 5,
                'so_luong' => 2,
                'don_gia' => 40000,
                'thanh_tien' => 80000,
            ],
            // Đơn hàng 54
            [
                'id' => 75,
                'id_don_hang' => 54,
                'id_khach_hang' => 3,
                'id_mon_an' => 23, // Cơm Đùi Gà Quay
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 76,
                'id_don_hang' => 54,
                'id_khach_hang' => 3,
                'id_mon_an' => 24, // Cơm Cánh Gà Quay
                'id_quan_an' => 6,
                'so_luong' => 1,
                'don_gia' => 40000,
                'thanh_tien' => 40000,
            ],
            // Đơn hàng 55
            [
                'id' => 77,
                'id_don_hang' => 55,
                'id_khach_hang' => 4,
                'id_mon_an' => 27, // Cơm Cá Kho
                'id_quan_an' => 7,
                'so_luong' => 2,
                'don_gia' => 45000,
                'thanh_tien' => 90000,
            ],
            // Đơn hàng 56
            [
                'id' => 78,
                'id_don_hang' => 56,
                'id_khach_hang' => 5,
                'id_mon_an' => 30, // Xôi Chiên Thịt Băm
                'id_quan_an' => 8,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 79,
                'id_don_hang' => 56,
                'id_khach_hang' => 5,
                'id_mon_an' => 31, // Xôi Chiên Thịt Xíu
                'id_quan_an' => 8,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            // Đơn hàng 57
            [
                'id' => 80,
                'id_don_hang' => 57,
                'id_khach_hang' => 6,
                'id_mon_an' => 39, // Bún Thập Cẩm
                'id_quan_an' => 9,
                'so_luong' => 2,
                'don_gia' => 40000,
                'thanh_tien' => 80000,
            ],
            // Đơn hàng 58
            [
                'id' => 81,
                'id_don_hang' => 58,
                'id_khach_hang' => 7,
                'id_mon_an' => 41, // Nước Ép Cà Rốt
                'id_quan_an' => 10,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 82,
                'id_don_hang' => 58,
                'id_khach_hang' => 7,
                'id_mon_an' => 42, // Nước Dừa
                'id_quan_an' => 10,
                'so_luong' => 1,
                'don_gia' => 15000,
                'thanh_tien' => 15000,
            ],
            // Đơn hàng 59
            [
                'id' => 83,
                'id_don_hang' => 59,
                'id_khach_hang' => 1,
                'id_mon_an' => 45, // Trà Sữa Trân Châu Đường Đen
                'id_quan_an' => 11,
                'so_luong' => 1,
                'don_gia' => 45000,
                'thanh_tien' => 45000,
            ],
            [
                'id' => 84,
                'id_don_hang' => 59,
                'id_khach_hang' => 1,
                'id_mon_an' => 46, // Trà Sữa Truyền Thống
                'id_quan_an' => 11,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            // Đơn hàng 60
            [
                'id' => 85,
                'id_don_hang' => 60,
                'id_khach_hang' => 2,
                'id_mon_an' => 50, // Trà Chanh Nhãn
                'id_quan_an' => 12,
                'so_luong' => 3,
                'don_gia' => 30000,
                'thanh_tien' => 90000,
            ],
            [
                'id' => 86,
                'id_don_hang' => 61,
                'id_khach_hang' => 3,
                'id_mon_an' => 55, // Mì Quảng Chay
                'id_quan_an' => 13,
                'so_luong' => 1,
                'don_gia' => 30000,
                'thanh_tien' => 30000,
            ],
            [
                'id' => 87,
                'id_don_hang' => 61,
                'id_khach_hang' => 3,
                'id_mon_an' => 56, // Cà Ri Chay
                'id_quan_an' => 13,
                'so_luong' => 1,
                'don_gia' => 25000,
                'thanh_tien' => 25000,
            ],
            [
                'id' => 88,
                'id_don_hang' => 61,
                'id_khach_hang' => 3,
                'id_mon_an' => 57, // Bánh Kem
                'id_quan_an' => 13,
                'so_luong' => 1,
                'don_gia' => 33000,
                'thanh_tien' => 33000,
            ],
            // Đơn hàng 62
            [
                'id' => 89,
                'id_don_hang' => 62,
                'id_khach_hang' => 4,
                'id_mon_an' => 60, // Đen Đá
                'id_quan_an' => 14,
                'so_luong' => 2,
                'don_gia' => 35000,
                'thanh_tien' => 70000,
            ],
            [
                'id' => 90,
                'id_don_hang' => 62,
                'id_khach_hang' => 4,
                'id_mon_an' => 61, // Bánh Mì Heo Quay
                'id_quan_an' => 14,
                'so_luong' => 1,
                'don_gia' => 5000,
                'thanh_tien' => 5000,
            ],
            // Đơn hàng 63
            [
                'id' => 91,
                'id_don_hang' => 63,
                'id_khach_hang' => 5,
                'id_mon_an' => 64, // Nước Dừa
                'id_quan_an' => 15,
                'so_luong' => 3,
                'don_gia' => 30000,
                'thanh_tien' => 90000,
            ],
            [
                'id' => 92,
                'id_don_hang' => 63,
                'id_khach_hang' => 5,
                'id_mon_an' => 65, // Nước Dừa Trân châu
                'id_quan_an' => 15,
                'so_luong' => 1,
                'don_gia' => 4000,
                'thanh_tien' => 4000,
            ],
            // Đơn hàng 64
            [
                'id' => 93,
                'id_don_hang' => 64,
                'id_khach_hang' => 6,
                'id_mon_an' => 70, // Chè Thái
                'id_quan_an' => 16,
                'so_luong' => 2,
                'don_gia' => 30000,
                'thanh_tien' => 60000,
            ],
            [
                'id' => 94,
                'id_don_hang' => 64,
                'id_khach_hang' => 6,
                'id_mon_an' => 71, // Chè Thái Sầu
                'id_quan_an' => 16,
                'so_luong' => 1,
                'don_gia' => 21000,
                'thanh_tien' => 21000,
            ],
            // Đơn hàng 65
            [
                'id' => 95,
                'id_don_hang' => 65,
                'id_khach_hang' => 7,
                'id_mon_an' => 75, // Sườn Bì Chả
                'id_quan_an' => 17,
                'so_luong' => 3,
                'don_gia' => 28000,
                'thanh_tien' => 84000,
            ],
            [
                'id' => 96,
                'id_don_hang' => 65,
                'id_khach_hang' => 7,
                'id_mon_an' => 76, // Sườn Bì
                'id_quan_an' => 17,
                'so_luong' => 1,
                'don_gia' => 1000,
                'thanh_tien' => 1000,
            ],
            // Đơn hàng 66
            [
                'id' => 97,
                'id_don_hang' => 66,
                'id_khach_hang' => 1,
                'id_mon_an' => 78, // Súp Cua
                'id_quan_an' => 18,
                'so_luong' => 2,
                'don_gia' => 39000,
                'thanh_tien' => 78000,
            ],
            [
                'id' => 98,
                'id_don_hang' => 66,
                'id_khach_hang' => 1,
                'id_mon_an' => 79, // Súp Bột Báng
                'id_quan_an' => 18,
                'so_luong' => 1,
                'don_gia' => 2000,
                'thanh_tien' => 2000,
            ],
            // Đơn hàng 67
            [
                'id' => 99,
                'id_don_hang' => 67,
                'id_khach_hang' => 2,
                'id_mon_an' => 81, // Cháo Lòng
                'id_quan_an' => 19,
                'so_luong' => 3,
                'don_gia' => 30000,
                'thanh_tien' => 90000,
            ],
            [
                'id' => 100,
                'id_don_hang' => 67,
                'id_khach_hang' => 2,
                'id_mon_an' => 82, // Lòng Trộn
                'id_quan_an' => 19,
                'so_luong' => 1,
                'don_gia' => 2000,
                'thanh_tien' => 2000,
            ],
            // Đơn hàng 68
            [
                'id' => 101,
                'id_don_hang' => 68,
                'id_khach_hang' => 3,
                'id_mon_an' => 1, // Cafe Dừa
                'id_quan_an' => 20,
                'so_luong' => 2,
                'don_gia' => 25000,
                'thanh_tien' => 50000,
            ],
            [
                'id' => 102,
                'id_don_hang' => 68,
                'id_khach_hang' => 3,
                'id_mon_an' => 2, // Cafe Máy
                'id_quan_an' => 20,
                'so_luong' => 1,
                'don_gia' => 38000,
                'thanh_tien' => 38000,
            ],
            // Đơn hàng 69
            [
                'id' => 103,
                'id_don_hang' => 69,
                'id_khach_hang' => 4,
                'id_mon_an' => 5, // Nước Chanh
                'id_quan_an' => 1,
                'so_luong' => 3,
                'don_gia' => 31000,
                'thanh_tien' => 93000,
            ],
            // Đơn hàng 70
            [
                'id' => 104,
                'id_don_hang' => 70,
                'id_khach_hang' => 5,
                'id_mon_an' => 9, // Lục Trà Chanh
                'id_quan_an' => 2,
                'so_luong' => 2,
                'don_gia' => 27000,
                'thanh_tien' => 54000,
            ],
            [
                'id' => 105,
                'id_don_hang' => 70,
                'id_khach_hang' => 5,
                'id_mon_an' => 10, // Lục Trà Xoài
                'id_quan_an' => 2,
                'so_luong' => 1,
                'don_gia' => 43000,
                'thanh_tien' => 43000,
            ],
        ]);
    }
}
