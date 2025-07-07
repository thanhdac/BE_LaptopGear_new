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
        // DB::table('danh_mucs')->truncate();
        DB::table('danh_mucs')->insert([
            [
                'ma_dm' => '0001',
                'ten_danh_muc' => 'HỌC TẬP - VĂN PHÒNG',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0002',
                'ten_danh_muc' => 'LAPTOP GAMING',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0003',
                'ten_danh_muc' => 'LAPTOP ĐỒ HỌA',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0004',
                'ten_danh_muc' => 'LAPTOP MỎNG NHẸ CAO CẤP',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0005',
                'ten_danh_muc' => 'LAPTOP LIKE NEW',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0006',
                'ten_danh_muc' => 'LINH KIỆN - PHỤ KIỆN',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => '0007',
                'ten_danh_muc' => 'PC - MÁY TÍNH LẮP RÁP',
                'trang_thai' => 1,
            ],
        ]);
    }
}
