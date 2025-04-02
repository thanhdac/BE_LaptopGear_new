<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'ma_code' => 'SPRING2025',
                'thoi_gian_bat_dau' => '2025-03-15',
                'thoi_gian_ket_thuc' => '2025-04-25',
                'loai_giam' => 0,
                'so_giam_gia' => 50000,
                'so_tien_toi_da' => 50000,
                'don_hang_toi_thieu' => 150000,
                'tinh_trang' => 1,
                'id_quan_an'=>2
            ],
            [
                'ma_code' => 'SUMMER2025',
                'thoi_gian_bat_dau' => '2025-03-15',
                'thoi_gian_ket_thuc' => '2025-05-15',
                'loai_giam' => 1,
                'so_giam_gia' => 15,
                'so_tien_toi_da' => 100000,
                'don_hang_toi_thieu' => 300000,
                'tinh_trang' => 1,
                'id_quan_an'=>2
            ],
            [
                'ma_code' => 'NEWYEAR2025',
                'thoi_gian_bat_dau' => '2025-03-01',
                'thoi_gian_ket_thuc' => '2025-06-01',
                'loai_giam' => 0,
                'so_giam_gia' => 100000,
                'so_tien_toi_da' => 100000,
                'don_hang_toi_thieu' => 500000,
                'tinh_trang' => 1,
                'id_quan_an'=>2
            ],
            [
                'ma_code' => 'WELCOME2025',
                'thoi_gian_bat_dau' => '2025-03-10',
                'thoi_gian_ket_thuc' => '2025-03-24',
                'loai_giam' => 1,
                'so_giam_gia' => 10,
                'so_tien_toi_da' => 50000,
                'don_hang_toi_thieu' => 100000,
                'tinh_trang' => 1,
                'id_quan_an'=>3
            ],
            [
                'ma_code' => 'FLASH2025',
                'thoi_gian_bat_dau' => '2025-03-20',
                'thoi_gian_ket_thuc' => '2025-03-23',
                'loai_giam' => 0,
                'so_giam_gia' => 30000,
                'so_tien_toi_da' => 30000,
                'don_hang_toi_thieu' => 50000,
                'tinh_trang' => 1,
                'id_quan_an'=>3
            ],
            [
                'ma_code' => 'SPECIAL2025',
                'thoi_gian_bat_dau' => '2025-03-05',
                'thoi_gian_ket_thuc' => '2025-04-05',
                'loai_giam' => 1,
                'so_giam_gia' => 20,
                'so_tien_toi_da' => 200000,
                'don_hang_toi_thieu' => 400000,
                'tinh_trang' => 0,
                'id_quan_an'=>3
            ],
            [
                'ma_code' => 'EASTER2025',
                'thoi_gian_bat_dau' => '2025-04-01',
                'thoi_gian_ket_thuc' => '2025-04-15',
                'loai_giam' => 0,
                'so_giam_gia' => 70000,
                'so_tien_toi_da' => 70000,
                'don_hang_toi_thieu' => 200000,
                'tinh_trang' => 1,
                'id_quan_an'=>4
            ],
            [
                'ma_code' => 'LABORDAY2025',
                'thoi_gian_bat_dau' => '2025-04-25',
                'thoi_gian_ket_thuc' => '2025-05-05',
                'loai_giam' => 1,
                'so_giam_gia' => 12,
                'so_tien_toi_da' => 120000,
                'don_hang_toi_thieu' => 350000,
                'tinh_trang' => 1,
                'id_quan_an'=>4
            ],
            [
                'ma_code' => 'MAYSALE2025',
                'thoi_gian_bat_dau' => '2025-05-10',
                'thoi_gian_ket_thuc' => '2025-05-20',
                'loai_giam' => 0,
                'so_giam_gia' => 60000,
                'so_tien_toi_da' => 60000,
                'don_hang_toi_thieu' => 180000,
                'tinh_trang' => 1,
                'id_quan_an'=>4
            ],
            [
                'ma_code' => 'JUNEPROMO2025',
                'thoi_gian_bat_dau' => '2025-06-01',
                'thoi_gian_ket_thuc' => '2025-06-30',
                'loai_giam' => 1,
                'so_giam_gia' => 25,
                'so_tien_toi_da' => 250000,
                'don_hang_toi_thieu' => 600000,
                'tinh_trang' => 1,
                'id_quan_an'=>5
            ],
            [
                'ma_code' => 'JULYDISCOUNT2025',
                'thoi_gian_bat_dau' => '2025-07-01',
                'thoi_gian_ket_thuc' => '2025-07-31',
                'loai_giam' => 0,
                'so_giam_gia' => 90000,
                'so_tien_toi_da' => 90000,
                'don_hang_toi_thieu' => 250000,
                'tinh_trang' => 1,
                'id_quan_an'=>5
            ],
            [
                'ma_code' => 'BACKTOSCHOOL2025',
                'thoi_gian_bat_dau' => '2025-08-15',
                'thoi_gian_ket_thuc' => '2025-09-10',
                'loai_giam' => 1,
                'so_giam_gia' => 18,
                'so_tien_toi_da' => 150000,
                'don_hang_toi_thieu' => 450000,
                'tinh_trang' => 1,
                'id_quan_an'=>5
            ],
            [
                'ma_code' => 'AUTUMN2025',
                'thoi_gian_bat_dau' => '2025-09-20',
                'thoi_gian_ket_thuc' => '2025-10-10',
                'loai_giam' => 0,
                'so_giam_gia' => 75000,
                'so_tien_toi_da' => 75000,
                'don_hang_toi_thieu' => 300000,
                'tinh_trang' => 1,
                'id_quan_an'=>6
            ],
            [
                'ma_code' => 'HALLOWEEN2025',
                'thoi_gian_bat_dau' => '2025-10-25',
                'thoi_gian_ket_thuc' => '2025-11-05',
                'loai_giam' => 1,
                'so_giam_gia' => 22,
                'so_tien_toi_da' => 220000,
                'don_hang_toi_thieu' => 500000,
                'tinh_trang' => 1,
                'id_quan_an'=>6
            ],
            [
                'ma_code' => 'BLACKFRIDAY2025',
                'thoi_gian_bat_dau' => '2025-11-20',
                'thoi_gian_ket_thuc' => '2025-11-30',
                'loai_giam' => 0,
                'so_giam_gia' => 150000,
                'so_tien_toi_da' => 150000,
                'don_hang_toi_thieu' => 700000,
                'tinh_trang' => 1,
                'id_quan_an'=>6
            ],
        ]);
    }
}
