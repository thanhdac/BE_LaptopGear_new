<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten'     =>  'Nguyễn Văn A',
                'email'         =>  'nguyenvana@gmail.com',
                'so_dien_thoai' =>  '0708585120',
                'password'      =>  123456,
                'ngay_sinh'     =>  '1998-03-08',
                'is_active'     =>  1,
                'is_block'      =>  0,
            ],
            [
                'ho_va_ten'     => 'Trần Thị B',
                'email'         => 'tranthib@gmail.com',
                'so_dien_thoai' => '0901234567',
                'password'      => 123456,
                'ngay_sinh'     => '2000-07-15',
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'ho_va_ten'     => 'Lê Văn C',
                'email'         => 'levanc@gmail.com',
                'so_dien_thoai' => '0987654321',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
            ],
            [
                'ho_va_ten'     => 'Nguyễn Hữu Thái',
                'email'         => 'thaidepzai@gmail.com',
                'so_dien_thoai' => '0987654321',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
            ],
            [
                'ho_va_ten'     => 'Võ Văn Nhân',
                'email'         => 'vovannhan@gmail.com',
                'so_dien_thoai' => '0903005519',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
            ],
        ]);
    }
}
