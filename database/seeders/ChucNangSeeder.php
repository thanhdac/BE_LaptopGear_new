<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucNangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chuc_nangs')->delete();

        DB::table('chuc_nangs')->truncate();

        DB::table('chuc_nangs')->insert([
            ['id' => 1, 'ten_chuc_nang' => 'Lấy dữ liệu tài khoản'],
            ['id' => 2, 'ten_chuc_nang' => 'Tạo mới tài khoản'],
            ['id' => 3, 'ten_chuc_nang' => 'Cập nhật tài khoản'],
            ['id' => 4, 'ten_chuc_nang' => 'Xóa tài khoản'],
            ['id' => 5, 'ten_chuc_nang' => 'Đổi trạng thái tài khoản'],
            ['id' => 6, 'ten_chuc_nang' => 'Lấy dữ liệu Shippper'],
            ['id' => 7, 'ten_chuc_nang' => 'Tạo mới Shippper'],
            ['id' => 8, 'ten_chuc_nang' => 'Cập nhật Shippper'],
            ['id' => 9, 'ten_chuc_nang' => 'Xóa Shippper'],
            ['id' => 10, 'ten_chuc_nang' => 'Đổi trạng thái Shippper'],
            ['id' => 11, 'ten_chuc_nang' => 'Kích hoạt Shippper'],
            ['id' => 12, 'ten_chuc_nang' => 'Lấy dữ liệu Khách Hàng'],
            ['id' => 13, 'ten_chuc_nang' => 'Tạo mới Khách Hàng'],
            ['id' => 14, 'ten_chuc_nang' => 'Cập nhật Khách Hàng'],
            ['id' => 15, 'ten_chuc_nang' => 'Xóa Khách Hàng'],
            ['id' => 16, 'ten_chuc_nang' => 'Đổi trạng thái Khách Hàng'],
            ['id' => 17, 'ten_chuc_nang' => 'Lấy dữ liệu Voucher'],
            ['id' => 18, 'ten_chuc_nang' => 'Tạo mới Voucher'],
            ['id' => 19, 'ten_chuc_nang' => 'Cập nhật Voucher'],
            ['id' => 20, 'ten_chuc_nang' => 'Xóa Voucher'],
            ['id' => 21, 'ten_chuc_nang' => 'Đổi trạng thái Voucher'],
            ['id' => 22, 'ten_chuc_nang' => 'Lấy dữ liệu Danh Mục'],
            ['id' => 23, 'ten_chuc_nang' => 'Tạo mới Danh Mục'],
            ['id' => 24, 'ten_chuc_nang' => 'Cập nhật Danh Mục'],
            ['id' => 25, 'ten_chuc_nang' => 'Xóa Danh Mục'],
            ['id' => 26, 'ten_chuc_nang' => 'Đổi trạng thái Danh Mục'],
            ['id' => 27, 'ten_chuc_nang' => 'Đổi trạng thái Loại Quán'],
            ['id' => 28, 'ten_chuc_nang' => 'Lấy dữ liệu Quán Ăn'],
            ['id' => 29, 'ten_chuc_nang' => 'Tạo mới Quán Ăn'],
            ['id' => 30, 'ten_chuc_nang' => 'Cập nhật Quán Ăn'],
            ['id' => 31, 'ten_chuc_nang' => 'Xóa Quán Ăn'],
            ['id' => 32, 'ten_chuc_nang' => 'Đổi trạng thái Quán Ăn'],
            ['id' => 33, 'ten_chuc_nang' => 'Thêm Mới Chức Vụ'],
            ['id' => 34, 'ten_chuc_nang' => 'Lấy dữ liệu chức vụ'],
            ['id' => 35, 'ten_chuc_nang' => 'Đổi Trạng Thái Chức Vụ'],
            ['id' => 36, 'ten_chuc_nang' => 'Cập Nhật Chức Vụ'],
            ['id' => 37, 'ten_chuc_nang' => 'Xóa Chức Vụ'],
            ['id' => 38, 'ten_chuc_nang' => 'Cấp chức năng cho Chức Vụ'],
            ['id' => 39, 'ten_chuc_nang' => 'Hủy chức năng của Chức Vụ '],
            ['id' => 40, 'ten_chuc_nang' => 'Lấy dữ liệu chức năng'],
            ['id' => 41, 'ten_chuc_nang' => 'Lấy dữ liệu chi tiết chức năng'],
        ]);
    }
}
