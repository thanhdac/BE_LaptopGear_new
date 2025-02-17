<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'email'             =>  'nguyenquoclong@gmail.com',
                'password'          =>  123456,
                'ho_va_ten'         =>  'Nguyễn Quốc Long',
                'so_dien_thoai'     =>  '0905523543',
                'dia_chi'           =>  'Thành Phố Đà Nẵng',
                'ngay_sinh'         =>  '1999-12-12',
                'tinh_trang'        =>  1,
                'id_quyen'          =>  1,
            ],
            [
                'email'             =>  'dzfullstack@gmail.com',
                'password'          =>  123456,
                'ho_va_ten'         =>  'Nguyễn Quốc Long',
                'so_dien_thoai'     =>  '0388824999',
                'dia_chi'           =>  'Thành Phố Đà Nẵng',
                'ngay_sinh'         =>  '1999-12-12',
                'tinh_trang'        =>  1,
                'id_quyen'          =>  2,
            ],
        ]);
    }
}
