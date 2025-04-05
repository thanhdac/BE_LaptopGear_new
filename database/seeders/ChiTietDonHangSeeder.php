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
            // Chi tiết đơn hàng DH001
            [
                'id_don_hang'    => 1,
                'id_khach_hang'  => 1,
                'id_mon_an'      => 1,
                'so_luong'       => 2,
                'don_gia'        => 500000,
                'thanh_tien'     => 1000000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id_don_hang'    => 1,
                'id_mon_an'      => 2,
                'id_khach_hang'  => 1,
                'so_luong'       => 1,
                'don_gia'        => 500000,
                'thanh_tien'     => 500000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            // Chi tiết đơn hàng DH002
            [
                'id_don_hang'    => 2,
                'id_mon_an'      => 3,
                'id_khach_hang'  => 2,
                'so_luong'       => 5,
                'don_gia'        => 500000,
                'thanh_tien'     => 2500000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            // Chi tiết đơn hàng DH003
            [
                'id_don_hang'    => 3,
                'id_mon_an'      => 1,
                'id_khach_hang'  => 3,
                'so_luong'       => 2,
                'don_gia'        => 400000,
                'thanh_tien'     => 800000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id_don_hang'    => 3,
                'id_mon_an'      => 4,
                'id_khach_hang'  => 3,
                'so_luong'       => 2,
                'don_gia'        => 500000,
                'thanh_tien'     => 1000000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            // Chi tiết đơn hàng DH004
            [
                'id_don_hang'    => 4,
                'id_mon_an'      => 5,
                'id_khach_hang'  => 4,
                'so_luong'       => 1,
                'don_gia'        => 950000,
                'thanh_tien'     => 950000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
