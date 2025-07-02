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
            ]
        ]);

    }
}
