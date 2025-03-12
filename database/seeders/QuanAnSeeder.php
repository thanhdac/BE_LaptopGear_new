<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quan_ans')->delete();

        DB::table('quan_ans')->insert([
            [
                'email'          => 'quanan1@gmail.com',
                'password'       => '123456',
                'ma_so_thue'     => 'MST123456789',
                'ten_quan_an'    => 'Quán Ăn A',
                'gio_mo_cua'     => '07:00:00',
                'gio_dong_cua'   => '22:00:00',
                'id_dia_chi'     => 1,
                'hinh_anh'       => null,
                'so_dien_thoai'  => '0123456789',
                'tong_tien'      => 0,
                'tinh_trang'     => 1,
                'is_active'      => 1,
            ],
            [
                'email'          => 'quanan2@gmail.com',
                'password'       => '123456',
                'ma_so_thue'     => 'MST987654321',
                'ten_quan_an'    => 'Quán Ăn B',
                'gio_mo_cua'     => '06:00:00',
                'gio_dong_cua'   => '23:00:00',
                'id_dia_chi'     => 2,
                'hinh_anh'       => null,
                'so_dien_thoai'  => '0987654321',
                'tong_tien'      => 0,
                'tinh_trang'     => 1,
                'is_active'      => 1,
            ],
        ]);
    }
}
