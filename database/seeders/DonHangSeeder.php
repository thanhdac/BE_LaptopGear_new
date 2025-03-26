<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('don_hangs')->delete();
        DB::table('don_hangs')->truncate();
        DB::table('don_hangs')->insert([
            [
                'ma_don_hang'    => 'DH001',
                'id_khach_hang'  => 1,
                'id_quan_an'     => 1,
                'id_shipper'     => null,
                'tong_tien'      => 1500000,
                'ten_nguoi_nhan' => 'Võ Văn Việt',
                'so_dien_thoai'  => '0123456789',
                'dia_chi'        => '123 Đường ABC, Quận 1, TP.HCM',
                'phi_ship'       => 30000,
                'tinh_trang'     => 0, // TINH_TRANG_CHUA_NHAN
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'ma_don_hang'    => 'DH002',
                'id_khach_hang'  => 2,
                'id_quan_an'     => 1,
                'id_shipper'     => 1,
                'tong_tien'      => 2500000,
                'ten_nguoi_nhan' => 'Trần Thị An',
                'so_dien_thoai'  => '0987654321',
                'dia_chi'        => '456 Đường XYZ, Quận 2, TP.HCM',
                'phi_ship'       => 35000,
                'tinh_trang'     => 1, // TINH_TRANG_DA_NHAN
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'ma_don_hang'    => 'DH003',
                'id_khach_hang'  => 1,
                'id_quan_an'     => 1,
                'id_shipper'     => 1,
                'tong_tien'      => 1800000,
                'ten_nguoi_nhan' => 'Nguyễn Văn Bình',
                'so_dien_thoai'  => '0909123456',
                'dia_chi'        => '789 Đường DEF, Quận 3, TP.HCM',
                'phi_ship'       => 25000,
                'tinh_trang'     => 2, // TINH_TRANG_DA_GIAO
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'ma_don_hang'    => 'DH004',
                'id_khach_hang'  => 1,
                'id_quan_an'     => 1,
                'id_shipper'     => 1,
                'tong_tien'      => 950000,
                'ten_nguoi_nhan' => 'Lê Thị Hương',
                'so_dien_thoai'  => '0898765432',
                'dia_chi'        => '321 Đường GHI, Quận 4, TP.HCM',
                'phi_ship'       => 40000,
                'tinh_trang'     => 3, // TINH_TRANG_DA_HUY
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
        ]);
    }
}
