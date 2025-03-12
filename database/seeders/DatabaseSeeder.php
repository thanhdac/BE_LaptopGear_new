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
            QuanAnSeeder::class,
            ShipperSeeder::class,
<<<<<<< HEAD
=======
            PhanQuyenSeeder::class,
            DiaChiKhachHangSeeder::class,
>>>>>>> f0d67c805afc2941c4502096c5a65c5147adab6e
        ]);
    }
}
