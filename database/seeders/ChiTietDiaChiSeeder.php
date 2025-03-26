<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDiaChiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chi_tiet_dia_chis')->truncate();
        DB::table('chi_tiet_dia_chis')->truncate();
        DB::table('chi_tiet_dia_chis')->insert([
            [
                'id_dia_chi' => 1,
                'id_khach_hang' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_dia_chi' => 2,
                'id_khach_hang' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_dia_chi' => 3,
                'id_khach_hang' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_dia_chi' => 4,
                'id_khach_hang' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_dia_chi' => 5,
                'id_khach_hang' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}