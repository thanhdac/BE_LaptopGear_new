<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDiaChiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chi_tiet_dia_chis')->delete();
        DB::table('chi_tiet_dia_chis')->truncate();
        DB::table('chi_tiet_dia_chis')->insert([
            [
                'id_dia_chi' => 1,
                'id_khach_hang' => 1,
                'ten_nguoi_nhan' => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456780',
            ],
            [
                'id_dia_chi' => 2,
                'id_khach_hang' => 1,
                'ten_nguoi_nhan' => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456780',
            ],
            [
                'id_dia_chi' => 3,
                'id_khach_hang' => 1,
                'ten_nguoi_nhan' => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456780',
            ],
            [
                'id_dia_chi' => 4,
                'id_khach_hang' => 2,
                'ten_nguoi_nhan' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
            ],
            [
                'id_dia_chi' => 5,
                'id_khach_hang' => 2,
                'ten_nguoi_nhan' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
            ],
            [
                'id_dia_chi' => 6,
                'id_khach_hang' => 2,
                'ten_nguoi_nhan' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
            ],
            [
                'id_dia_chi' => 7,
                'id_khach_hang' => 3,
                'ten_nguoi_nhan' => 'Lê Minh Tuấn',
                'so_dien_thoai' => '0987654321',
            ],
            [
                'id_dia_chi' => 8,
                'id_khach_hang' => 3,
                'ten_nguoi_nhan' => 'Lê Minh Tuấn',
                'so_dien_thoai' => '0987654321',
            ],
            [
                'id_dia_chi' => 9,
                'id_khach_hang' => 3,
                'ten_nguoi_nhan' => 'Lê Minh Tuấn',
                'so_dien_thoai' => '0987654321',
            ],
            [
                'id_dia_chi' => 10,
                'id_khach_hang' => 4,
                'ten_nguoi_nhan' => 'Trần Thị Hồng Nhung',
                'so_dien_thoai' => '0911223344',
            ],
            [
                'id_dia_chi' => 11,
                'id_khach_hang' => 4,
                'ten_nguoi_nhan' => 'Trần Thị Hồng Nhung',
                'so_dien_thoai' => '0911223344',
            ],
            [
                'id_dia_chi' => 12,
                'id_khach_hang' => 4,
                'ten_nguoi_nhan' => 'Trần Thị Hồng Nhung',
                'so_dien_thoai' => '0911223344',
            ],
            [
                'id_dia_chi' => 13,
                'id_khach_hang' => 5,
                'ten_nguoi_nhan' => 'Đặng Quốc Huy',
                'so_dien_thoai' => '0933445566',
            ],
            [
                'id_dia_chi' => 14,
                'id_khach_hang' => 5,
                'ten_nguoi_nhan' => 'Đặng Quốc Huy',
                'so_dien_thoai' => '0933445566',
            ],
            [
                'id_dia_chi' => 15,
                'id_khach_hang' => 5,
                'ten_nguoi_nhan' => 'Đặng Quốc Huy',
                'so_dien_thoai' => '0933445566',
            ],
            [
                'id_dia_chi' => 16,
                'id_khach_hang' => 6,
                'ten_nguoi_nhan' => 'Phạm Thị Mai',
                'so_dien_thoai' => '0909887766',
            ],
            [
                'id_dia_chi' => 17,
                'id_khach_hang' => 6,
                'ten_nguoi_nhan' => 'Phạm Thị Mai',
                'so_dien_thoai' => '0909887766',
            ],
            [
                'id_dia_chi' => 18,
                'id_khach_hang' => 6,
                'ten_nguoi_nhan' => 'Phạm Thị Mai',
                'so_dien_thoai' => '0909887766',
            ],
            [
                'id_dia_chi' => 19,
                'id_khach_hang' => 7,
                'ten_nguoi_nhan' => 'Ngô Văn Lâm',
                'so_dien_thoai' => '0966887799',
            ],
            [
                'id_dia_chi' => 20,
                'id_khach_hang' => 7,
                'ten_nguoi_nhan' => 'Ngô Văn Lâm',
                'so_dien_thoai' => '0966887799',
            ],
            [
                'id_dia_chi' => 21,
                'id_khach_hang' => 7,
                'ten_nguoi_nhan' => 'Ngô Văn Lâm',
                'so_dien_thoai' => '0966887799',
            ]

        ]);
    }
}
