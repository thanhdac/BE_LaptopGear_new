<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDanhMucQuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_danh_muc_quan_ans')->delete();
        DB::table('chi_tiet_danh_muc_quan_ans')->truncate();

        DB::table('chi_tiet_danh_muc_quan_ans')->insert([
            ['id' => '1', 'id_quan_an' => '2', 'id_danh_muc' => '15'],
            ['id' => '2', 'id_quan_an' => '2', 'id_danh_muc' => '16'],
            ['id' => '3', 'id_quan_an' => '2', 'id_danh_muc' => '17'],
            ['id' => '4', 'id_quan_an' => '2', 'id_danh_muc' => '18'],
            ['id' => '5', 'id_quan_an' => '3', 'id_danh_muc' => '15'],
            ['id' => '6', 'id_quan_an' => '3', 'id_danh_muc' => '16'],
            ['id' => '7', 'id_quan_an' => '3', 'id_danh_muc' => '18'],
            ['id' => '8', 'id_quan_an' => '4', 'id_danh_muc' => '15'],
            ['id' => '9', 'id_quan_an' => '4', 'id_danh_muc' => '16'],
            ['id' => '10', 'id_quan_an' => '4', 'id_danh_muc' => '17'],
            ['id' => '11', 'id_quan_an' => '4', 'id_danh_muc' => '18'],
            ['id' => '12', 'id_quan_an' => '4', 'id_danh_muc' => '19'],
            ['id' => '13', 'id_quan_an' => '4', 'id_danh_muc' => '36'],
            ['id' => '14', 'id_quan_an' => '5', 'id_danh_muc' => '22'],
            ['id' => '15', 'id_quan_an' => '5', 'id_danh_muc' => '23'],
            ['id' => '16', 'id_quan_an' => '5', 'id_danh_muc' => '14'],
            ['id' => '17', 'id_quan_an' => '5', 'id_danh_muc' => '26'],
            ['id' => '18', 'id_quan_an' => '6', 'id_danh_muc' => '23'],
            ['id' => '19', 'id_quan_an' => '6', 'id_danh_muc' => '14'],
            ['id' => '20', 'id_quan_an' => '7', 'id_danh_muc' => '22'],
            ['id' => '21', 'id_quan_an' => '7', 'id_danh_muc' => '23'],
            ['id' => '22', 'id_quan_an' => '7', 'id_danh_muc' => '24'],
            ['id' => '23', 'id_quan_an' => '7', 'id_danh_muc' => '25'],
            ['id' => '24', 'id_quan_an' => '8', 'id_danh_muc' => '14'],
            ['id' => '25', 'id_quan_an' => '8', 'id_danh_muc' => '15'],
            ['id' => '26', 'id_quan_an' => '8', 'id_danh_muc' => '25'],
            ['id' => '27', 'id_quan_an' => '8', 'id_danh_muc' => '26'],
            ['id' => '28', 'id_quan_an' => '9', 'id_danh_muc' => '21'],
            ['id' => '29', 'id_quan_an' => '9', 'id_danh_muc' => '28'],
            ['id' => '30', 'id_quan_an' => '9', 'id_danh_muc' => '14'],
            ['id' => '31', 'id_quan_an' => '10', 'id_danh_muc' => '13'],
            ['id' => '32', 'id_quan_an' => '10', 'id_danh_muc' => '8'],
            ['id' => '33', 'id_quan_an' => '11', 'id_danh_muc' => '19'],
            ['id' => '34', 'id_quan_an' => '11', 'id_danh_muc' => '35'],
            ['id' => '35', 'id_quan_an' => '11', 'id_danh_muc' => '14'],
            ['id' => '36', 'id_quan_an' => '12', 'id_danh_muc' => '36'],
            ['id' => '37', 'id_quan_an' => '12', 'id_danh_muc' => '14'],
            ['id' => '38', 'id_quan_an' => '12', 'id_danh_muc' => '15'],
            ['id' => '39', 'id_quan_an' => '12', 'id_danh_muc' => '16'],
            ['id' => '40', 'id_quan_an' => '12', 'id_danh_muc' => '17'],
            ['id' => '41', 'id_quan_an' => '12', 'id_danh_muc' => '18'],
            ['id' => '42', 'id_quan_an' => '13', 'id_danh_muc' => '11'],
            ['id' => '43', 'id_quan_an' => '13', 'id_danh_muc' => '35'],
            ['id' => '44', 'id_quan_an' => '13', 'id_danh_muc' => '24'],
            ['id' => '45', 'id_quan_an' => '14', 'id_danh_muc' => '11'],
            ['id' => '46', 'id_quan_an' => '14', 'id_danh_muc' => '35'],
            ['id' => '47', 'id_quan_an' => '14', 'id_danh_muc' => '24'],
            ['id' => '48', 'id_quan_an' => '15', 'id_danh_muc' => '6'],
            ['id' => '49', 'id_quan_an' => '15', 'id_danh_muc' => '14'],
            ['id' => '50', 'id_quan_an' => '15', 'id_danh_muc' => '15'],
            ['id' => '51', 'id_quan_an' => '15', 'id_danh_muc' => '16'],
            ['id' => '52', 'id_quan_an' => '15', 'id_danh_muc' => '17'],
            ['id' => '53', 'id_quan_an' => '15', 'id_danh_muc' => '18'],
            ['id' => '54', 'id_quan_an' => '16', 'id_danh_muc' => '15'],
            ['id' => '55', 'id_quan_an' => '16', 'id_danh_muc' => '16'],
            ['id' => '56', 'id_quan_an' => '16', 'id_danh_muc' => '17'],
            ['id' => '57', 'id_quan_an' => '16', 'id_danh_muc' => '18'],
            ['id' => '58', 'id_quan_an' => '17', 'id_danh_muc' => '32'],
            ['id' => '59', 'id_quan_an' => '17', 'id_danh_muc' => '33'],
            ['id' => '60', 'id_quan_an' => '18', 'id_danh_muc' => '22'],
            ['id' => '61', 'id_quan_an' => '18', 'id_danh_muc' => '25'],
            ['id' => '62', 'id_quan_an' => '18', 'id_danh_muc' => '26'],
            ['id' => '63', 'id_quan_an' => '19', 'id_danh_muc' => '11'],
            ['id' => '64', 'id_quan_an' => '20', 'id_danh_muc' => '8'],
        ]);
    }
}
