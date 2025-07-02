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
                'trang_thai'    => 1,
                'so_luong'      => 100,
                'hinh'          => 'https://hanoilab.com/wp-content/uploads/2022/08/Dell-xps-13-plus-9320-hanoilab.jpg',
                'ma_dm'         => 1,
                'mo_ta'         => 'Laptop Dell XPS 13 với thiết kế mỏng nhẹ, hiệu năng mạnh mẽ, phù hợp cho công việc và giải trí.',
                'trailer'       => 'https://www.youtube.com/watch?v=example1'
            ],
            [
                'ma_sp'         => 2,
                'ten_sp'        => 'Laptop HP Pavilion 15',
                'don_gia'       => 20000000,
                'trang_thai'    => 1,
                'so_luong'      => 150,
                'hinh'          => 'https://hanoilab.com/wp-content/uploads/2022/08/Dell-xps-13-plus-9320-hanoilab.jpg',
                'ma_dm'         => 2,
                'mo_ta'         => 'Laptop HP Pavilion, hiệu năng ổn định, thiết kế sang trọng, phù hợp với nhu cầu học tập và làm việc.',
                'trailer'       => 'https://www.youtube.com/watch?v=example2'
            ],
            [
                'ma_sp'         => 3,
                'ten_sp'        => 'Macbook Pro 16',
                'don_gia'       => 25000000,
                'trang_thai'    => 1,
                'so_luong'      => 80,
                'hinh'          => 'https://hanoilab.com/wp-content/uploads/2022/08/Dell-xps-13-plus-9320-hanoilab.jpg',
                'ma_dm'         => 3,
                'mo_ta'         => 'Macbook Pro 16 với hiệu năng vượt trội, thiết kế tinh tế, phù hợp cho các chuyên gia sáng tạo.',
                'trailer'       => 'https://www.youtube.com/watch?v=example2'
            ],
            [
                'ma_sp'         => 4,
                'ten_sp'        => 'Laptop Asus ROG Zephyrus G14',
                'don_gia'       => 35000000,
                'trang_thai'    => 1,
                'so_luong'      => 50,
                'hinh'          => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/l/a/laptop_acer_gaming_nitro_lite_16_nl16-71g-71uj_-_2.png',
                'ma_dm'         => 4,
                'mo_ta'         => 'Laptop Asus ROG Zephyrus G14, laptop gaming mạnh mẽ với card đồ họa rời, thiết kế nhỏ gọn.',
                'trailer'       => 'https://www.youtube.com/watch?v=example3'
            ],
            [
                'ma_sp'         => 5,
                'ten_sp'        => 'Laptop Lenovo ThinkPad X1 Carbon',
                'don_gia'       => 40000000,
                'trang_thai'    => 1,
                'so_luong'      => 60,
                'hinh'          => 'https://ngocnguyen.vn/cdn/images/202311/goods_img/new-100-thinkpad-x1-extreme-gen-5-core-i7-12th-rtx-3060-16-inch-model-2023-P15486-1699241339176.png',
                'ma_dm'         => 5,
                'mo_ta'         => 'Laptop Lenovo ThinkPad X1 Carbon, laptop doanh nhân với hiệu năng cao, thiết kế bền bỉ.',
                'trailer'       => 'https://www.youtube.com/watch?v=example4'
            ],
            [
                'ma_sp'         => 6,
                'ten_sp'        => 'Laptop Acer Aspire 5',
                'don_gia'       => 15000000,
                'trang_thai'    => 1,
                'so_luong'      => 200,
                'hinh'          => 'https://ngocnguyen.vn/cdn/images/202504/goods_img/dell-precision-7680-core-i7-13th-rtx-a1000-16-inch-model-2023-P16236-1745228379138.png',
                'ma_dm'         => 6,
                'mo_ta'         => 'Laptop Acer Aspire 5, laptop văn phòng với hiệu năng ổn định, giá cả phải chăng.',
                'trailer'       => 'https://www.youtube.com/watch?v=example5'
            ],
            [
                'ma_sp'         => 7,
                'ten_sp'        => 'Laptop MSI GF63 Thin',
                'don_gia'       => 18000000,
                'trang_thai'    => 1,
                'so_luong'      => 120,
                'hinh'          => 'https://ngocnguyen.vn/cdn/images/202306/goods_img/msi-gf63-thin-11sc-i5-11400hram-8gbssd-512ggtx-1650-max-q156-inch-fhd-P14367-1686656471165.png',
                'ma_dm'         => 7,
                'mo_ta'         => 'Laptop MSI GF63 Thin, laptop gaming giá rẻ với hiệu năng tốt, thiết kế mỏng nhẹ.',
                'trailer'       => 'https://www.youtube.com/watch?v=example6'
            ],
            [
                'ma_sp'         => 8,
                'ten_sp'        => 'Laptop Dell Inspiron 15',
                'don_gia'       => 22000000,
                'trang_thai'    => 1,
                'so_luong'      => 90,
                'hinh'          => 'https://ngocnguyen.vn/cdn/images/202304/goods_img/dell-precision-5540-i7-9850h-ram-16gb-ssd-256gb-t1000-156-inch-fhd-P7205-1682410216481.jpg',
                'ma_dm'         => 8,
                'mo_ta'         => 'Laptop Dell Inspiron 15, laptop văn phòng với hiệu năng ổn định, thiết kế hiện đại.',
                'trailer'       => 'https://www.youtube.com/watch?v=example7'
            ],
            [
                'ma_sp'         => 9,
                'ten_sp'        => 'Laptop HP Envy 13',
                'don_gia'       => 27000000,
                'trang_thai'    => 1,
                'so_luong'      => 70,
                'hinh'          => 'https://ngocnguyen.vn/cdn/images/202307/goods_img/moi-100-hp-envy-x360-2in1-14-es0013dx-core-i5-1335uram-8gbssd-512gb14-inch-fhd-P15065-1688195600071.jpg',
                'ma_dm'         => 9,
                'mo_ta'         => 'Laptop HP Envy 13, laptop cao cấp với thiết kế sang trọng, hiệu năng mạnh mẽ.',
                'trailer'       => 'https://www.youtube.com/watch?v=example8'
            ],
            [
                'ma_sp'         => 10,
                'ten_sp'        => 'Laptop Apple MacBook Air M1',
                'don_gia'       => 30000000,
                'trang_thai'    => 1,
                'so_luong'      => 110,
                'hinh'          => 'https://apple.ngocnguyen.vn/cdn/images/202304/goods_img/macbook-air-13-inch-m1-2020-ram-8gb-ssd-256gb-P12641-1680832437239.jpg',
                'ma_dm'         => 10,
                'mo_ta'         => 'Laptop Apple MacBook Air M1, laptop mỏng nhẹ với chip M1, hiệu năng vượt trội.',
                'trailer'       => 'https://www.youtube.com/watch?v=example9'
            ]
        ]);

    }
}
