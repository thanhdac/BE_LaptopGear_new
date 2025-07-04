<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('san_phams')->delete();
        DB::table('san_phams')->truncate();
        DB::table('san_phams')->insert([
            [
                'ma_sp'         => 1,
                'ten_sp'        => 'Laptop Dell XPS 13',
                'don_gia'       => 30000000,
                'gia_cu'        => 25000000,
                'trang_thai'    => 1,
                'so_luong'      => 100,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_7__2_224.png',
                'ma_dm'         => 1,
                'mo_ta'         => 'Laptop Dell XPS 13 với thiết kế mỏng nhẹ, hiệu năng mạnh mẽ, phù hợp cho công việc và giải trí.',
                'trailer'       => 'https://www.youtube.com/watch?v=example1',
                'danh_muc_may'  => 'Laptop văn phòng',
            ],
            [
                'ma_sp'         => 2,
                'ten_sp'        => 'Laptop HP Pavilion 15',
                'don_gia'       => 20000000,
                'gia_cu'        => 18000000,
                'trang_thai'    => 1,
                'so_luong'      => 150,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_6_2.png',
                'ma_dm'         => 2,
                'mo_ta'         => 'Laptop HP Pavilion, hiệu năng ổn định, thiết kế sang trọng, phù hợp với nhu cầu học tập và làm việc.',
                'trailer'       => 'https://www.youtube.com/watch?v=example2',
                'danh_muc_may'  => 'Laptop Gaming',
            ],
            [
                'ma_sp'         => 3,
                'ten_sp'        => 'Macbook Pro 16',
                'don_gia'       => 25000000,
                'gia_cu'        => 23000000,
                'trang_thai'    => 1,
                'so_luong'      => 80,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/d/i/display_14_inch__f298e9zwj02m_large.jpg',
                'ma_dm'         => 3,
                'mo_ta'         => 'Macbook Pro 16 với hiệu năng vượt trội, thiết kế tinh tế, phù hợp cho các chuyên gia sáng tạo.',
                'trailer'       => 'https://www.youtube.com/watch?v=example2',
                'danh_muc_may'  => 'Laptop văn phòng',
            ],
            [
                'ma_sp'         => 4,
                'ten_sp'        => 'Laptop Asus ZenBook 14',
                'don_gia'       => 18000000,
                'gia_cu'        => 16000000,
                'trang_thai'    => 1,
                'so_luong'      => 120,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_15_32.png',
                'ma_dm'         => 4,
                'mo_ta'         => 'Laptop Asus ZenBook 14, thiết kế mỏng nhẹ, hiệu năng cao, phù hợp cho người dùng di chuyển nhiều.',
                'trailer'       => 'https://www.youtube.com/watch?v=example3',
                'danh_muc_may'  => 'Laptop đồ họa',
            ],
            [
                'ma_sp'         => 5,
                'ten_sp'        => 'Laptop Lenovo ThinkPad X1 Carbon',
                'don_gia'       => 35000000,
                'gia_cu'        => 32000000,
                'trang_thai'    => 1,
                'so_luong'      => 50,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_5__9_255_1_1.png',
                'ma_dm'         => 5,
                'mo_ta'         => 'Laptop Lenovo ThinkPad X1 Carbon, bền bỉ, hiệu năng cao, phù hợp cho doanh nhân.',
                'trailer'       => 'https://www.youtube.com/watch?v=example4',
                'danh_muc_may'  => 'Laptop văn phòng',
            ],
            [
                'ma_sp'         => 6,
                'ten_sp'        => 'Laptop Acer Swift 3',
                'don_gia'       => 15000000,
                'gia_cu'        => 13000000,
                'trang_thai'    => 1,
                'so_luong'      => 200,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/2/_/2_470_1_1.png',
                'ma_dm'         => 6,
                'mo_ta'         => 'Laptop Acer Swift 3, thiết kế mỏng nhẹ, hiệu năng tốt, phù hợp cho học sinh, sinh viên.',
                'trailer'       => 'https://www.youtube.com/watch?v=example5',
                'danh_muc_may'  => 'Laptop đồ họa',
            ],
            [
                'ma_sp'         => 7,
                'ten_sp'        => 'Laptop MSI Gaming GF63',
                'don_gia'       => 22000000,
                'gia_cu'        => 20000000,
                'trang_thai'    => 1,
                'so_luong'      => 70,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop_msi_8_1_1.png',
                'ma_dm'         => 7,
                'mo_ta'         => 'Laptop MSI Gaming GF63, hiệu năng mạnh mẽ, thiết kế hầm hố, phù hợp cho game thủ.',
                'trailer'       => 'https://www.youtube.com/watch?v=example6',
                'danh_muc_may'  => 'Laptop Gaming',
            ],
            [
                'ma_sp'         => 8,
                'ten_sp'        => 'Laptop Razer Blade Stealth',
                'don_gia'       => 40000000,
                'gia_cu'        => 38000000,
                'trang_thai'    => 1,
                'so_luong'      => 30,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6__4_104.png',
                'ma_dm'         => 8,
                'mo_ta'         => 'Laptop Razer Blade Stealth, thiết kế cao cấp, hiệu năng đỉnh cao, phù hợp cho game thủ và người sáng tạo nội dung.',
                'trailer'       => 'https://www.youtube.com/watch?v=example7',
                'danh_muc_may'  => 'Laptop Gaming',
            ],
            [
                'ma_sp'         => 9,
                'ten_sp'        => 'Laptop Huawei MateBook X Pro',
                'don_gia'       => 28000000,
                'gia_cu'        => 26000000,
                'trang_thai'    => 1,
                'so_luong'      => 60,
                'hinh'          => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/h/u/huawei-matebook-x_4_.jpg',
                'ma_dm'         => 9,
                'mo_ta'         => 'Laptop Huawei MateBook X Pro, thiết kế sang trọng, hiệu năng mạnh mẽ, phù hợp cho người dùng doanh nhân.',
                'trailer'       => 'https://www.youtube.com/watch?v=example8',
                'danh_muc_may'  => 'Laptop văn phòng',
            ],
            [
                'ma_sp'         => 10,
                'ten_sp'        => 'Laptop LG Gram 17',
                'don_gia'       => 32000000,
                'gia_cu'        => 30000000,
                'trang_thai'    => 1,
                'so_luong'      => 40,
                'hinh'          => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_86_.png',
                'ma_dm'         => 10,
                'mo_ta'         => 'Laptop LG Gram dòng 17 inch, thiết kế nhẹ nhàng, hiệu năng cao, phù hợp cho người dùng  di chuyển nhiều.',
                'trailer'       => 'https://www.youtube.com/watch?v=example9',
                'danh_muc_may'  => 'Laptop văn phòng',
            ],
        ]);

    }
}
