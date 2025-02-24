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
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            VoucherSeeder::class,
            QuanAnSeeder::class,
            DanhMucSeeder::class,
            TinhThanhSeeder::class,
            QuanHuyenSeeder::class,
            ShipperSeeder::class,
            PhanQuyenSeeder::class,
            DiaChiKhachHangSeeder::class,
        ]);
    }
}
