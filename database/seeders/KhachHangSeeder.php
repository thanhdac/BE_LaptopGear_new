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
                'ho_va_ten'     => 'Võ Văn Việt',
                'so_dien_thoai' => '0123456789',
                'email'         => 'voviet@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => null,
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'ho_va_ten'     => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
                'email'         => 'nguyenvana@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => null,
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
        ]);
    }
}
