<?php

namespace Database\Seeders;

use App\Models\ChiTietBaoHanh;
use App\Models\ChiTietHoaDon;
use App\Models\DanhMuc;
use App\Models\DiaChiKhachHang;
use App\Models\Thue;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BaoHanhSeeder::class,
            ChiTietBaoHanhSeeder::class,
            ChiTietHoaDonSeeder::class,
            ChuongTrinhKhuyenMaiSeeder::class,
            DanhGiaSeeder::class,
            DanhMucSeeder::class,
            HoaDonSeeder::class,
            KhuyenMaiSeeder::class,
            LoaiTaiKhoanSeeder::class,
            NhanVienSeeder::class,
            NhapXuatSeeder::class,
            SanPhamSeeder::class,
            TaiKhoanSeeder::class,
            Thueseeder::class,


        ]);
    }
}
