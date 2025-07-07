<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
DB::table('gio_hangs')->delete();
        DB::table('gio_hangs')->truncate();

        DB::table('gio_hangs')->insert([
            [
                'ma_sp'     => 0001,
                'ten_sp'    => 'Dell XPS 13',
                'don_gia'   => 32000000,
                'hinh'      => 'https://example.com/images/dell_xps.jpg',
                'so_luong'  => 2,
                'ma_dm'     => 3,
                'mo_ta'     => 'Laptop Dell XPS 13 với CPU Intel Core i7, RAM 16GB, SSD 512GB, màn hình 13.3 inch Full HD.',
            ],
            [
                'ma_sp'     => 0002,
                'ten_sp'    => 'MacBook Air M2',
                'don_gia'   => 28900000,
                'hinh'      => 'https://example.com/images/macbook_air_m2.jpg',
                'so_luong'  => 1,
                'ma_dm'     => 7,
                'mo_ta'     => 'MacBook Air M2 với chip Apple M2, RAM 8GB, SSD 256GB, màn hình Retina 13.6 inch.',
            ],
            [
                'ma_sp'     => 0003,
                'ten_sp'    => 'Asus ROG Strix G15',
                'don_gia'   => 38900000,
                'hinh'      => 'https://example.com/images/asus_rog_g15.jpg',
                'so_luong'  => 1,
                'ma_dm'     => 5,
                'mo_ta'     => 'Asus ROG Strix G15 trang bị Ryzen 7, RTX 3060, RAM 16GB, SSD 1TB, màn hình 144Hz.',
            ],
        ]);
    }
}
