<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ma_kh' => 'KH01',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Thanh Dat',
                'email'         => 'thanhdac@gmail.com',
                'dia_chi'       => '123 Nguyen Trai, Hanoi',
                'sdt'      => '0123456789',
                // 'trang_thai'    => 1,
                'gioi_tinh'     => 0,
            ],
            [
                'ma_kh' => 'KH02',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Trong Tinh',
                'email'         => 'trongtinh@gmail.com',
                'dia_chi'       => '456 Le Loi, Ho Chi Minh City',
                'sdt'      => '0123456789',
                // 'trang_thai'    => 1,
                'gioi_tinh'     => 1,
            ],
            [
                'ma_kh' => 'KH03',
                'mat_khau'      => '123456',
                'ho_ten'        => 'Nguyen Van Hieu',
                'email'         => 'vanhieu@gmail.com',
                'dia_chi'       => '789 Tran Hung Dao, Da Nang',
                'sdt'      => '0123456789',
                // 'trang_thai'    => 1,
                'gioi_tinh'     => 1,
            ],
        ]);
    }
}
