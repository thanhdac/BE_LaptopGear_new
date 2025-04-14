<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'id'             => 1,
                'ho_va_ten'      => 'Shipper A',
                'so_dien_thoai'  => '0123456789',
                'email'          => 'shippera@gmail.com',
                'password'       => '123456',
                'cccd'           => '123456789012',
                'is_active'      => 1,
                'is_open'        => 1,
                'tong_tien'      => 0,
            ],
            [
                'id'             => 2,
                'ho_va_ten'      => 'Shipper B',
                'so_dien_thoai'  => '0987654321',
                'email'          => 'shipperb@gmail.com',
                'password'       => '123456',
                'cccd'           => '987654321098',
                'is_active'      => 1,
                'is_open'        => 1,
                'tong_tien'      => 0,
            ],
        ]);
    }
}
