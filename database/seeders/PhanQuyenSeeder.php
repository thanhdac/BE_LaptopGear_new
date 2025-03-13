<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhanQuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phan_quyens')->delete();

        DB::table('phan_quyens')->truncate();

        // Chủ tịch HĐQT và Giám đốc điều hành có toàn quyền
        for($i = 1; $i <= 41; $i++) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 1, 'id_chuc_nang' => $i],  // Chủ tịch HĐQT
                ['id_chuc_vu' => 2, 'id_chuc_nang' => $i],  // Giám đốc điều hành
            ]);
        }

        // Giám đốc nhân sự - quyền liên quan đến tài khoản và nhân sự
        $hr_permissions = [1, 2, 3, 4, 5, 33, 34, 35, 36, 37, 38, 39, 40, 41];
        foreach($hr_permissions as $permission) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 7, 'id_chuc_nang' => $permission],
            ]);
        }

        // Quản lý bộ phận - quyền xem và quản lý cơ bản
        $manager_permissions = [1, 3, 5, 12, 14, 16, 34, 40];
        foreach($manager_permissions as $permission) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 9, 'id_chuc_nang' => $permission],
            ]);
        }

        // Nhân viên IT - quyền liên quan đến hệ thống
        $it_permissions = [1, 3, 34, 40, 41];
        foreach($it_permissions as $permission) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 20, 'id_chuc_nang' => $permission],
            ]);
        }

        // Nhân viên bán hàng - quyền liên quan đến khách hàng và đơn hàng
        $sales_permissions = [12, 13, 14, 16, 17, 18, 19, 21, 22, 28];
        foreach($sales_permissions as $permission) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 21, 'id_chuc_nang' => $permission],
            ]);
        }

        // Nhân viên CSKH - quyền liên quan đến khách hàng
        $cs_permissions = [12, 14, 16, 17, 28];
        foreach($cs_permissions as $permission) {
            DB::table('phan_quyens')->insert([
                ['id_chuc_vu' => 22, 'id_chuc_nang' => $permission],
            ]);
        }
    }
}
