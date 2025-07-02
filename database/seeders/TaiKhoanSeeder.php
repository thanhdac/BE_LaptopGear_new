<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiKhoanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tai_khoans')->delete();
        DB::table('tai_khoans')->truncate();
        DB::table('tai_khoans')->insert([
            [
                'ten_dang_nhap' => 'thanhdac',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Thanh Dat',
                'email'         => 'thanhdac@gmail.com',
                'dia_chi'       => '123 Nguyen Trai, Hanoi',
                'ma_loai'       => 1,
                'trang_thai'    => 1,
                'gioi_tinh'     => 1,
            ],
            [
                'ten_dang_nhap' => 'trongtinh',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Trong Tinh',
                'email'         => 'trongtinh@gmail.com',
                'dia_chi'       => '456 Le Loi, Ho Chi Minh City',
                'ma_loai'       => 2,
                'trang_thai'    => 1,
                'gioi_tinh'     => 1,
            ],
            [
                'ten_dang_nhap' => 'vanhieu',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Van Hieu',
                'email'         => 'vanhieu@gmail.com',
                'dia_chi'       => '789 Tran Hung Dao, Da Nang',
                'ma_loai'       => 2,
                'trang_thai'    => 1,
                'gioi_tinh'     => 0,
            ],
        ]);
    }
}
