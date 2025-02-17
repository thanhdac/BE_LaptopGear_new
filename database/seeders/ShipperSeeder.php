<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('shippers')->delete();

        DB::table('shippers')->truncate();

        DB::table('shippers')->insert([
            [
                'ho_va_ten' => 'Nguyễn Văn A',
                'so_dien_thoai' => '0909090909',
                'email' => 'nguyenvana@gmail.com',
                'password' => '123456',
                'cccd' => '123456789012345678',
                'dia_chi_thuong_tru' => '123 Nguyễn Văn A, Hà Nội',
                'toa_do_x' => 10.823099,
                'toa_do_y' => 106.629699,
                'id_tinh_thanh' => 1,
                'id_quan_huyen' => 1,
                'is_active' => 1,
                'is_open' => 0,
            ],
            [
                'ho_va_ten' => 'Nguyễn Văn B',
                'so_dien_thoai' => '0909090909',
                'email' => 'nguyenvanb@gmail.com',
                'password' => '123456',
                'cccd' => '123456789012345678',
                'dia_chi_thuong_tru' => '123 Nguyễn Văn B, Hà Nội',
                'toa_do_x' => 10.823099,
                'toa_do_y' => 106.629699,
                'id_tinh_thanh' => 1,
                'id_quan_huyen' => 1,
                'is_active' => 1,
                'is_open' => 1,
            ],
            [
                'ho_va_ten' => 'Nguyễn Văn C',
                'so_dien_thoai' => '0909090909',
                'email' => 'nguyenvanc@gmail.com',
                'password' => '123456',
                'cccd' => '123456789012345678',
                'dia_chi_thuong_tru' => '123 Nguyễn Văn C, Hà Nội',
                'toa_do_x' => 10.823099,
                'toa_do_y' => 106.629699,
                'id_tinh_thanh' => 1,
                'id_quan_huyen' => 1,
                'is_active' => 1,
                'is_open' => 0,
            ]
        ]);
    }
}
