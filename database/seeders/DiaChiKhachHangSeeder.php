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
                'dia_chi_nhan_hang'  => '100 Nguyễn Hoàng',
                'id_khach_hang'      => 1,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Trần Thị B',
                'so_dien_thoai_nhan' => '0901234567',
                'dia_chi_nhan_hang'  => '86 Trường Chinh',
                'id_khach_hang'      => 1,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Lê Văn C',
                'so_dien_thoai_nhan' => '0987654321',
                'dia_chi_nhan_hang'  => '65 Hoàng Hoa Thám ',
                'id_khach_hang'      => 1,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Nguyễn Hữu Thái',
                'so_dien_thoai_nhan' => '0987654321',
                'dia_chi_nhan_hang'  => '200 Tôn Đản',
                'id_khach_hang'      => 1,
            ],
            [
                'ho_ten_nguoi_nhan'  => 'Võ Văn Nhân',
                'so_dien_thoai_nhan' => '0903005519',
                'dia_chi_nhan_hang'  => '75 Nguyễn Văn Linh',
                'id_khach_hang'      => 1,
            ],
        ]);
    }
}
