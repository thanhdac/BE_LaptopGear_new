<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();

        DB::table('khach_hangs')->insert([
            [
<<<<<<< HEAD
                'ho_va_ten'     => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456789',
                'email'         => 'voviet@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => null,
                'id_dia_chi'    => 1,
                'hash_reset'    => null,
                'hash_active'   => null,
=======
                'id'            => 1,
                'ho_va_ten'     =>  'Nguyễn Văn A',
                'email'         =>  'nguyenvana@gmail.com',
                'so_dien_thoai' =>  '0708585120',
                'password'      =>  123456,
                'ngay_sinh'     =>  '1998-03-08',
                'is_active'     =>  1,
                'is_block'      =>  0,
            ],
            [
                'id'            => 2,
                'ho_va_ten'     => 'Trần Thị B',
                'email'         => 'tranthib@gmail.com',
                'so_dien_thoai' => '0901234567',
                'password'      => 123456,
                'ngay_sinh'     => '2000-07-15',
>>>>>>> f0d67c805afc2941c4502096c5a65c5147adab6e
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
<<<<<<< HEAD
                'ho_va_ten'     => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
                'email'         => 'nguyenvana@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => null,
                'id_dia_chi'    => 1,
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
=======
                'id'            => 3,
                'ho_va_ten'     => 'Lê Văn C',
                'email'         => 'levanc@gmail.com',
                'so_dien_thoai' => '0987654321',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
            ],
            [
                'id'            => 4,
                'ho_va_ten'     => 'Nguyễn Hữu Thái',
                'email'         => 'thaidepzai@gmail.com',
                'so_dien_thoai' => '0987654321',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
            ],
            [
                'id'            => 5,
                'ho_va_ten'     => 'Võ Văn Nhân',
                'email'         => 'vovannhan@gmail.com',
                'so_dien_thoai' => '0903005519',
                'password'      => 123456,
                'ngay_sinh'     => '1995-12-22',
                'is_active'     => 0,
                'is_block'      => 1,
>>>>>>> f0d67c805afc2941c4502096c5a65c5147adab6e
            ],
        ]);
    }
}
