<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('hoa_dons')->delete();
        DB::table('hoa_dons')->truncate();
        DB::table('hoa_dons')->insert([
            [
                'ma_hd'             => 1,
                'ngay_hoa_don'      => '2025-06-23',
                'so_dien_thoai'     => '0123456789',
                'ho_ten'            => 'Nguyen Van A',
                'dia_chi'           => '123 Nguyen Trai, Hanoi',
                'ma_nv'             => 1,
                'ghi_chu'           => 'Giao hàng nhanh chóng',
                'ngay_duyet'        => '2025-06-23 10:00:00',
                'trang_thai'        => 1,
            ],
            [
                'ma_hd'             => 2,
                'ngay_hoa_don'      => '2025-06-24',
                'so_dien_thoai'     => '0987654321',
                'ho_ten'            => 'Tran Thi B',
                'dia_chi'           => '456 Le Loi, Ho Chi Minh City',
                'ma_nv'             => 2,
                'ghi_chu'           => 'Yêu cầu giao hàng vào buổi sáng',
                'ngay_duyet'        => '2025-06-24 11:00:00',
                'trang_thai'        => 1,
            ],
            [
                'ma_hd'             => 3,
                'ngay_hoa_don'      => '2025-06-25',
                'so_dien_thoai'     => '0912345678',
                'ho_ten'            => 'Le Van C',
                'dia_chi'           => '789 Tran Hung Dao, Da Nang',
                'ma_nv'             => 3,
                'ghi_chu'           => 'khách hàng yêu cầu giao hàng vào cuối tuần',
                'ngay_duyet'        => '2025-06-24 11:00:00',
                'trang_thai'        => 0,
            ]
        ]);
    }
}
