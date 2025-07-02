<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('danh_mucs')->delete();
        DB::table('danh_mucs')->truncate();
        DB::table('danh_mucs')->insert([
            [
                'ma_dm'        => 1,
                'ten_danh_muc' => 'Macbook',
                'trang_thai'   => 1,
                'ma_thue'      => 1,
            ],
            [
                'ma_dm'        => 2,
                'ten_danh_muc' => 'Laptop Gaming',
                'trang_thai'   => 1,
                'ma_thue'      => 1,
            ],
            [
                'ma_dm'        => 3,
                'ten_danh_muc' => 'Laptop văn Phòng',
                'trang_thai'   => 1,
                'ma_thue'      => 2,
            ],
            [
                'ma_dm'        => 4,
                'ten_danh_muc' => 'Laptop Đồ Họa',
                'trang_thai'   => 1,
                'ma_thue'      => 2,
            ],
            [
                'ma_dm'        => 5,
                'ten_danh_muc' => 'Laptop Sinh Viên',
                'trang_thai'   => 1,
                'ma_thue'      => 3,
            ],
            [
                'ma_dm'        => 6,
                'ten_danh_muc' => 'Laptop Doanh Nghiệp',
                'trang_thai'   => 1,
                'ma_thue'      => 3,
            ]
        ]);
    }
}
