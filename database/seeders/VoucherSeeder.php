<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vouchers')->delete();
        DB::table('vouchers')->truncate();
        DB::table('vouchers')->insert([
            [
                'ma_code' => 'DISCOUNT01',
                'tinh_trang' => 1,
                'thoi_gian_bat_dau' => '2024-09-01',
                'thoi_gian_ket_thuc' => '2024-09-30',
                'loai_giam' => 0,
                'so_giam_gia' => 10,
                'so_tien_toi_da' => 1000,
                'don_hang_toi_thieu' => 500,
            ],
            [
                'ma_code' => 'DISCOUNT02',
                'tinh_trang' => 0,
                'thoi_gian_bat_dau' => '2024-07-15',
                'thoi_gian_ket_thuc' => '2024-09-15',
                'loai_giam' => 1,
                'so_giam_gia' => 200,
                'so_tien_toi_da' => 2000,
                'don_hang_toi_thieu' => 1000,
            ],
            [
                'ma_code' => 'DISCOUNT03',
                'tinh_trang' => 1,
                'thoi_gian_bat_dau' => '2024-07-20',
                'thoi_gian_ket_thuc' => '2024-09-20',
                'loai_giam' => 0,
                'so_giam_gia' => 15,
                'so_tien_toi_da' => 1500,
                'don_hang_toi_thieu' => 750,
            ],
            [
                'ma_code' => 'DISCOUNT04',
                'tinh_trang' => 0,
                'thoi_gian_bat_dau' => '2024-07-05',
                'thoi_gian_ket_thuc' => '2024-09-25',
                'loai_giam' => 1,
                'so_giam_gia' => 300,
                'so_tien_toi_da' => 3000,
                'don_hang_toi_thieu' => 1500,
            ],
            [
                'ma_code' => 'DISCOUNT05',
                'tinh_trang' => 1,
                'thoi_gian_bat_dau' => '2024-07-09',
                'thoi_gian_ket_thuc' => '2024-09-18',
                'loai_giam' => 0,
                'so_giam_gia' => 25,
                'so_tien_toi_da' => 2500,
                'don_hang_toi_thieu' => 1250,
            ],
            [
                'ma_code' => 'DISCOUNT06',
                'tinh_trang' => 0,
                'thoi_gian_bat_dau' => '2024-07-12',
                'thoi_gian_ket_thuc' => '2024-09-12',
                'loai_giam' => 1,
                'so_giam_gia' => 350,
                'so_tien_toi_da' => 3500,
                'don_hang_toi_thieu' => 1750,
            ],
            [
                'ma_code' => 'DISCOUNT07',
                'tinh_trang' => 1,
                'thoi_gian_bat_dau' => '2024-07-09',
                'thoi_gian_ket_thuc' => '2024-09-22',
                'loai_giam' => 0,
                'so_giam_gia' => 40,
                'so_tien_toi_da' => 4000,
                'don_hang_toi_thieu' => 2000,
            ],
            [
                'ma_code' => 'DISCOUNT08',
                'tinh_trang' => 0,
                'thoi_gian_bat_dau' => '2024-07-03',
                'thoi_gian_ket_thuc' => '2024-09-17',
                'loai_giam' => 1,
                'so_giam_gia' => 450,
                'so_tien_toi_da' => 4500,
                'don_hang_toi_thieu' => 2250,
            ],
            [
                'ma_code' => 'DISCOUNT09',
                'tinh_trang' => 1,
                'thoi_gian_bat_dau' => '2024-07-11',
                'thoi_gian_ket_thuc' => '2024-09-19',
                'loai_giam' => 0,
                'so_giam_gia' => 50,
                'so_tien_toi_da' => 5000,
                'don_hang_toi_thieu' => 2500,
            ],
            [
                'ma_code' => 'DISCOUNT10',
                'tinh_trang' => 0,
                'thoi_gian_bat_dau' => '2024-07-14',
                'thoi_gian_ket_thuc' => '2024-09-14',
                'loai_giam' => 1,
                'so_giam_gia' => 550,
                'so_tien_toi_da' => 5500,
                'don_hang_toi_thieu' => 2750,
            ],
        ]);
    }
}
