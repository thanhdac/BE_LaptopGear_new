<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaChiKhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dia_chi_khach_hangs')->delete();

        DB::table('dia_chi_khach_hangs')->truncate();

        DB::table('dia_chi_khach_hangs')->insert([
            [
                'ho_ten_nguoi_nhan'  => 'Nguyễn Văn A',
                'so_dien_thoai_nhan' => '0708585120',
                'dia_chi_nhan_hang'  => '100 Nguyễn Hoàng, Đà Nẵng',
                'id_khach_hang'      => 1,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Trần Thị B',
                'so_dien_thoai_nhan' => '0901234567',
                'dia_chi_nhan_hang'  => '86 Trường Chinh, Đà Nẵng',
                'id_khach_hang'      => 2,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Lê Văn C',
                'so_dien_thoai_nhan' => '0987654321',
                'dia_chi_nhan_hang'  => '65 Hoàng Hoa Thám, Đà Nẵng',
                'id_khach_hang'      => 3,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Nguyễn Hữu Thái',
                'so_dien_thoai_nhan' => '0987654321',
                'dia_chi_nhan_hang'  => '200 Tôn Đản, Đà Nẵng',
                'id_khach_hang'      => 4,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Võ Văn Nhân',
                'so_dien_thoai_nhan' => '0903005519',
                'dia_chi_nhan_hang'  => '75 Nguyễn Văn Linh, Đà Nẵng',
                'id_khach_hang'      => 5,
            ],
        ]);
    }
}
