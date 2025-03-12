<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaChiKhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dia_chi_khach_hangs')->delete();

        DB::table('dia_chi_khach_hangs')->truncate();

        DB::table('dia_chi_khach_hangs')->insert([
            [
                'ho_ten_nguoi_nhan' => 'Nguyễn Anh Dũng',
                'so_dien_thoai_nhan' => '0912345678',
                'dia_chi_nhan_hang' => '123 Đường Bà Triệu, Quận 1, TP. Hồ Chí Minh',
                'id_khach_hang' => 1
            ],
            [
                'ho_ten_nguoi_nhan' => 'Phạm Minh Châu',
                'so_dien_thoai_nhan' => '0987654321',
                'dia_chi_nhan_hang' => '456 Đường Lê Lợi, Quận 2, TP. Hồ Chí Minh',
                'id_khach_hang' => 2
            ],
            [
                'ho_ten_nguoi_nhan' => 'Lê Thị Hoa',
                'so_dien_thoai_nhan' => '0923456789',
                'dia_chi_nhan_hang' => '789 Đường Nguyễn Huệ, Quận 3, TP. Hồ Chí Minh',
                'id_khach_hang' => 3
            ],
            [
                'ho_ten_nguoi_nhan' => 'Trần Ngọc Thanh',
                'so_dien_thoai_nhan' => '0934567890',
                'dia_chi_nhan_hang' => '159 Đường Đồng Khởi, Quận 1, TP. Hồ Chí Minh',
                'id_khach_hang' => 4
            ],
            [
                'ho_ten_nguoi_nhan' => 'Vũ Hải Long',
                'so_dien_thoai_nhan' => '0976543210',
                'dia_chi_nhan_hang' => '321 Đường Lý Thường Kiệt, Quận 11, TP. Hồ Chí Minh',
                'id_khach_hang' => 5
            ],
            [
                'ho_ten_nguoi_nhan' => 'Đặng Phương Nam',
                'so_dien_thoai_nhan' => '0911123456',
                'dia_chi_nhan_hang' => '582 Đường Ba Tháng Hai, Quận 10, TP. Hồ Chí Minh',
                'id_khach_hang' => 1
            ],
            [
                'ho_ten_nguoi_nhan' => 'Ngô Bảo Trâm',
                'so_dien_thoai_nhan' => '0999888777',
                'dia_chi_nhan_hang' => '77 Đường Thành Thái, Quận 5, TP. Hồ Chí Minh',
                'id_khach_hang' => 2
            ],
            [
                'ho_ten_nguoi_nhan' => 'Hoàng Minh Tuấn',
                'so_dien_thoai_nhan' => '0901112222',
                'dia_chi_nhan_hang' => '889 Đường Lý Tự Trọng, Quận 1, TP. Hồ Chí Minh',
                'id_khach_hang' => 3
            ],
            [
                'ho_ten_nguoi_nhan' => 'Bùi Khánh Linh',
                'so_dien_thoai_nhan' => '0944445555',
                'dia_chi_nhan_hang' => '336 Đường Trần Hưng Đạo, Quận 5, TP. Hồ Chí Minh',
                'id_khach_hang' => 4
            ],
            [
                'ho_ten_nguoi_nhan' => 'Phan Thị Mai',
                'so_dien_thoai_nhan' => '0933334444',
                'dia_chi_nhan_hang' => '154 Đường Hải Phòng, Quận 10, TP. Hồ Chí Minh',
                'id_khach_hang' => 5
            ],
            [
                'ho_ten_nguoi_nhan' => 'Vũ Phương Thảo',
                'so_dien_thoai_nhan' => '0966667777',
                'dia_chi_nhan_hang' => '268 Đường Nguyễn Tri Phương, Quận 10, TP. Hồ Chí Minh',
                'id_khach_hang' => 1
            ],
            [
                'ho_ten_nguoi_nhan' => 'Lê Quang Vinh',
                'so_dien_thoai_nhan' => '0988889999',
                'dia_chi_nhan_hang' => '478 Đường Trần Quốc Toản, Quận 3, TP. Hồ Chí Minh',
                'id_khach_hang' => 2
            ],
            [
                'ho_ten_nguoi_nhan' => 'Đỗ Thị Hồng',
                'so_dien_thoai_nhan' => '0955556666',
                'dia_chi_nhan_hang' => '623 Đường Cách Mạng Tháng Tám, Quận 3, TP. Hồ Chí Minh',
                'id_khach_hang' => 3
            ]
        ]);
    }
}
