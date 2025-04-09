<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaChiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dia_chis')->truncate();

        DB::table('dia_chis')->delete();

        DB::table('dia_chis')->insert([
            [
                'id' => 1,
                'dia_chi' => '101 Lê Duẩn, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.070488,
                'toa_do_y' => 108.219213,
                'tinh_trang' => 1
            ],
            [
                'id' => 2,
                'dia_chi' => '23 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.058558,
                'toa_do_y' => 108.214981,
                'tinh_trang' => 1
            ],
            [
                'id' => 3,
                'dia_chi' => '45 Lê Thanh Nghị, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.040205,
                'toa_do_y' => 108.221597,
                'tinh_trang' => 1
            ],
            [
                'id' => 4,
                'dia_chi' => '88 Nguyễn Tất Thành, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 54,
                'toa_do_x' => 16.065522,
                'toa_do_y' => 108.187813,
                'tinh_trang' => 1
            ],
            [
                'id' => 5,
                'dia_chi' => '190 Trần Cao Vân, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 54,
                'toa_do_x' => 16.060112,
                'toa_do_y' => 108.199389,
                'tinh_trang' => 1
            ],
            [
                'id' => 6,
                'dia_chi' => '02 Nguyễn Hữu Thọ, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.043820,
                'toa_do_y' => 108.210663,
                'tinh_trang' => 1
            ],
            [
                'id' => 7,
                'dia_chi' => '60 Nguyễn Tri Phương, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 54,
                'toa_do_x' => 16.058120,
                'toa_do_y' => 108.197856,
                'tinh_trang' => 1
            ],
            [
                'id' => 8,
                'dia_chi' => '66 Nguyễn Chí Thanh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.073004,
                'toa_do_y' => 108.220612,
                'tinh_trang' => 1
            ],
            [
                'id' => 9,
                'dia_chi' => '80 Nguyễn Hữu Thọ, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.046311,
                'toa_do_y' => 108.210984,
                'tinh_trang' => 1
            ],
            [
                'id' => 10,
                'dia_chi' => '37 Nguyễn Văn Thoại, Quận Ngũ Hành Sơn, Đà Nẵng',
                'id_quan_huyen' => 52,
                'toa_do_x' => 16.042390,
                'toa_do_y' => 108.243331,
                'tinh_trang' => 1
            ],
            [
                'id' => 11,
                'dia_chi' => '33 An Thượng 26, Quận Ngũ Hành Sơn, Đà Nẵng',
                'id_quan_huyen' => 52,
                'toa_do_x' => 16.037229,
                'toa_do_y' => 108.246977,
                'tinh_trang' => 1
            ],
            [
                'id' => 12,
                'dia_chi' => '25 Hồ Xuân Hương, Quận Ngũ Hành Sơn, Đà Nẵng',
                'id_quan_huyen' => 52,
                'toa_do_x' => 16.031478,
                'toa_do_y' => 108.242894,
                'tinh_trang' => 1
            ],
            [
                'id' => 13,
                'dia_chi' => '14 Nguyễn Văn Cừ, Quận Liên Chiểu, Đà Nẵng',
                'id_quan_huyen' => 51,
                'toa_do_x' => 16.087891,
                'toa_do_y' => 108.133952,
                'tinh_trang' => 1
            ],
            [
                'id' => 14,
                'dia_chi' => '112 Tôn Đức Thắng, Quận Liên Chiểu, Đà Nẵng',
                'id_quan_huyen' => 51,
                'toa_do_x' => 16.065361,
                'toa_do_y' => 108.157582,
                'tinh_trang' => 1
            ],
            [
                'id' => 15,
                'dia_chi' => '295 Nguyễn Lương Bằng, Quận Liên Chiểu, Đà Nẵng',
                'id_quan_huyen' => 51,
                'toa_do_x' => 16.071234,
                'toa_do_y' => 108.153721,
                'tinh_trang' => 1
            ],
            [
                'id' => 16,
                'dia_chi' => '15 Nguyễn Công Trứ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 53,
                'toa_do_x' => 16.071203,
                'toa_do_y' => 108.236738,
                'tinh_trang' => 1
            ],
            [
                'id' => 17,
                'dia_chi' => '21 Hồ Nghinh, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 53,
                'toa_do_x' => 16.074378,
                'toa_do_y' => 108.244821,
                'tinh_trang' => 1
            ],
            [
                'id' => 18,
                'dia_chi' => '05 Võ Văn Kiệt, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 53,
                'toa_do_x' => 16.061167,
                'toa_do_y' => 108.238498,
                'tinh_trang' => 1
            ],
            [
                'id' => 19,
                'dia_chi' => 'Trung tâm hành chính huyện Hòa Vang, Đà Nẵng',
                'id_quan_huyen' => 55,
                'toa_do_x' => 16.003093,
                'toa_do_y' => 108.054232,
                'tinh_trang' => 1
            ],
            [
                'id' => 20,
                'dia_chi' => 'Xã Hòa Nhơn, Huyện Hòa Vang, Đà Nẵng',
                'id_quan_huyen' => 55,
                'toa_do_x' => 15.997589,
                'toa_do_y' => 108.062402,
                'tinh_trang' => 1
            ],
            [
                'id' => 21,
                'dia_chi' => 'Khu công nghệ cao Hòa Liên, Huyện Hòa Vang, Đà Nẵng',
                'id_quan_huyen' => 55,
                'toa_do_x' => 16.061901,
                'toa_do_y' => 108.027447,
                'tinh_trang' => 1
            ],
            [
                'id' => 22,
                'dia_chi' => '23/14 Trần Kế Xương, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.067819,
                'toa_do_y' => 108.220950,
                'tinh_trang' => 1
            ],
            [
                'id' => 23,
                'dia_chi' => '112 Võ Nguyên Giáp, Phường Phước Mỹ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 50,
                'toa_do_x' => 16.059620,
                'toa_do_y' => 108.249770,
                'tinh_trang' => 1
            ],
            [
                'id' => 24,
                'dia_chi' => '1 Hải Phòng, Phường Thạch Thang, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.074230,
                'toa_do_y' => 108.220280,
                'tinh_trang' => 1
            ],
            [
                'id' => 25,
                'dia_chi' => '295 Hùng Vương, Phường Vĩnh Trung, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.070480,
                'toa_do_y' => 108.210820,
                'tinh_trang' => 1
            ],
            [
                'id' => 26,
                'dia_chi' => '113/3 Nguyễn Chí Thanh, Phường Hải Châu 1, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.073500,
                'toa_do_y' => 108.220700,
                'tinh_trang' => 1
            ],
            [
                'id' => 27,
                'dia_chi' => '46 Phan Thanh, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.065500,
                'toa_do_y' => 108.206800,
                'tinh_trang' => 1
            ],
            [
                'id' => 28,
                'dia_chi' => '469 Hoàng Diệu, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059900,
                'toa_do_y' => 108.209400,
                'tinh_trang' => 1
            ],
            [
                'id' => 29,
                'dia_chi' => '59 Ông Ích Khiêm, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.069800,
                'toa_do_y' => 108.209000,
                'tinh_trang' => 1
            ],
            [
                'id' => 30,
                'dia_chi' => '251 Phan Châu Trinh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059000,
                'toa_do_y' => 108.217500,
                'tinh_trang' => 1
            ],
            [
                'id' => 31,
                'dia_chi' => '22 Nguyễn Chí Thanh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.073600,
                'toa_do_y' => 108.220900,
                'tinh_trang' => 1
            ],
            [
                'id' => 32,
                'dia_chi' => '4 Lê Duẩn, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.075400,
                'toa_do_y' => 108.221300,
                'tinh_trang' => 1
            ],
            [
                'id' => 33,
                'dia_chi' => '441 Ông Ích Khiêm, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.068500,
                'toa_do_y' => 108.209800,
                'tinh_trang' => 1
            ],
            [
                'id' => 34,
                'dia_chi' => '8 Bắc Sơn, Quận Cẩm Lệ, Đà Nẵng',
                'id_quan_huyen' => 47,
                'toa_do_x' => 16.043200,
                'toa_do_y' => 108.187500,
                'tinh_trang' => 1
            ],
            [
                'id' => 35,
                'dia_chi' => '190 Trần Phú, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.067300,
                'toa_do_y' => 108.220100,
                'tinh_trang' => 1
            ],
            [
                'id' => 36,
                'dia_chi' => '100 Hoàng Văn Thụ, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.069500,
                'toa_do_y' => 108.220300,
                'tinh_trang' => 1
            ],
            [
                'id' => 37,
                'dia_chi' => '126 Duy Tân, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059700,
                'toa_do_y' => 108.218200,
                'tinh_trang' => 1
            ],
            [
                'id' => 38,
                'dia_chi' => '20 Đoàn Thị Điểm, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.072600,
                'toa_do_y' => 108.222100,
                'tinh_trang' => 1
            ],
            [
                'id' => 39,
                'dia_chi' => '179 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.061800,
                'toa_do_y' => 108.218700,
                'tinh_trang' => 1
            ],
            [
                'id' => 40,
                'dia_chi' => '66 Lê Lợi, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.072200,
                'toa_do_y' => 108.218400,
                'tinh_trang' => 1
            ],
            [
                'id' => 41,
                'dia_chi' => '85 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.063700,
                'toa_do_y' => 108.214900,
                'tinh_trang' => 1
            ]
        ]);
    }
}
