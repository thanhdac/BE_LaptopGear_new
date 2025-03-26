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
                'dia_chi' => '123 Đường ABC',
                'id_quan_huyen' => 1,
                'toa_do_x' => 10.762622,
                'toa_do_y' => 106.660172,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '456 Đường XYZ',
                'id_quan_huyen' => 2,
                'toa_do_x' => 10.775659,
                'toa_do_y' => 106.700424,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '789 Đường MNP',
                'id_quan_huyen' => 3,
                'toa_do_x' => 10.780428,
                'toa_do_y' => 106.695048,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '159 Đường DEF',
                'id_quan_huyen' => 4,
                'toa_do_x' => 10.764354,
                'toa_do_y' => 106.704972,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '753 Đường UVW',
                'id_quan_huyen' => 5,
                'toa_do_x' => 10.765789,
                'toa_do_y' => 106.682345,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '357 Đường GHI',
                'id_quan_huyen' => 6,
                'toa_do_x' => 10.765245,
                'toa_do_y' => 106.673456,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '951 Đường JKL',
                'id_quan_huyen' => 7,
                'toa_do_x' => 10.760214,
                'toa_do_y' => 106.716325,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '852 Đường RST',
                'id_quan_huyen' => 8,
                'toa_do_x' => 10.737891,
                'toa_do_y' => 106.665478,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '321 Đường OPQ',
                'id_quan_huyen' => 9,
                'toa_do_x' => 10.840592,
                'toa_do_y' => 106.788143,
                'tinh_trang' => 1
            ],
            [
                'dia_chi' => '741 Đường LMN',
                'id_quan_huyen' => 10,
                'toa_do_x' => 10.775689,
                'toa_do_y' => 106.682954,
                'tinh_trang' => 1
            ],
        ]);
    }
}
