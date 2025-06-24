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
                'ten_danh_muc' => 'Điện thoại',
                'trang_thai'   => 1,
                'ma_thue'      => 1,
            ],
            [
                'ma_dm'        => 2,
                'ten_danh_muc' => 'Máy tính bảng',
                'trang_thai'   => 1,
                'ma_thue'      => 1,
            ],
            [
                'ma_dm'        => 3,
                'ten_danh_muc' => 'Laptop',
                'trang_thai'   => 1,
                'ma_thue'      => 2,
            ]
        ]);
    }
}
