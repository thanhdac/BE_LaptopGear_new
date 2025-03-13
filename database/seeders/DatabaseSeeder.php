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
            DiaChiSeeder::class,
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            ShipperSeeder::class,
            DanhMucSeeder::class,
            QuanHuyenSeeder::class,
            TinhThanhSeeder::class,
            ChucVuSeeder::class,
            ChucNangSeeder::class,
            PhanQuyenSeeder::class,
            QuanAnSeeder::class,

        ]);
    }
}
