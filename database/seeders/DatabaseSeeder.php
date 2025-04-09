<?php

namespace Database\Seeders;

use App\Models\DiaChiKhachHang;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            // Đã làm lại
            QuanHuyenSeeder::class,
            TinhThanhSeeder::class,

            DiaChiSeeder::class,
            QuanAnSeeder::class,

            KhachHangSeeder::class,
            ChiTietDiaChiSeeder::class,

            MonAnSeeder::class,
            ChiTietDonHangSeeder::class,

            // Chưa làm lại
            NhanVienSeeder::class,
            ShipperSeeder::class,
            DanhMucSeeder::class,

            ChucVuSeeder::class,
            ChucNangSeeder::class,
            PhanQuyenSeeder::class,

            VoucherSeeder::class,

            ChiTietDanhMucQuanAnSeeder::class,
            DonHangSeeder::class,

        ]);
    }
}
