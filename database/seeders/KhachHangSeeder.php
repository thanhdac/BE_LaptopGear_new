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
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'id'            => 1,
                'ho_va_ten'     => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456780',
                'email'         => 'voviet@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 2,
                'ho_va_ten'     => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
                'email'         => 'nguyenvana@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => "https://scs.duytan.edu.vn/upload/images/13-1-2021-7-24-29-57.JPG",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 3,
                'ho_va_ten'     => 'Lê Minh Tuấn',
                'so_dien_thoai' => '0987654321',
                'email'         => 'minhtuan.le@gmail.com',
                'password'      => '123456',
                'cccd'          => '987654321001',
                'ngay_sinh'     => '1995-04-15',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 4,
                'ho_va_ten'     => 'Trần Thị Hồng Nhung',
                'so_dien_thoai' => '0911223344',
                'email'         => 'nhung.tran@gmail.com',
                'password'      => '123456',
                'cccd'          => '456789123456',
                'ngay_sinh'     => '1998-08-20',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 5,
                'ho_va_ten'     => 'Đặng Quốc Huy',
                'so_dien_thoai' => '0933445566',
                'email'         => 'quochuy.dang@gmail.com',
                'password'      => '123456',
                'cccd'          => '112233445566',
                'ngay_sinh'     => '1996-11-30',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 6,
                'ho_va_ten'     => 'Phạm Thị Mai',
                'so_dien_thoai' => '0909887766',
                'email'         => 'mai.pham@gmail.com',
                'password'      => '123456',
                'cccd'          => '445566778899',
                'ngay_sinh'     => '1999-03-22',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 7,
                'ho_va_ten'     => 'Ngô Văn Lâm',
                'so_dien_thoai' => '0966887799',
                'email'         => 'vanlam.ngo@gmail.com',
                'password'      => '123456',
                'cccd'          => '998877665544',
                'ngay_sinh'     => '1997-07-12',
                'avatar'        => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
        ]);
    }
}
