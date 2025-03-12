<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();

        DB::table('nhan_viens')->truncate();

        DB::table('nhan_viens')->insert([
            [
                'email'         => 'admin@master.com',
                'ho_va_ten'     => 'ADMIN MASTER',
                'password'      => '123456',
                'so_dien_thoai' => '0123456789',
                'dia_chi'       => '180 Cao Lỗ',
                'ngay_sinh'     => '1999-01-01',
                'avatar'        => null,
                'tinh_trang'    => 1,
                'id_chuc_vu'    => 0,
                'is_master'     => 1,
            ],
            [
                'email'         => 'nhanvien@gmail.com',
                'ho_va_ten'     => 'Nhân Viên Test',
                'password'      => '123456',
                'so_dien_thoai' => '0987654321',
                'dia_chi'       => '180 Cao Lỗ',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => null,
                'tinh_trang'    => 1,
                'id_chuc_vu'    => 1,
                'is_master'     => 0,
            ],
        ]);
    }
}
