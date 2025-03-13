<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChucVuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chuc_vus')->delete();

        DB::table('chuc_vus')->truncate();

        DB::table('chuc_vus')->insert([
            ['id' => 1, 'ten_chuc_vu' => 'Chủ tịch hội đồng quản trị', 'slug_chuc_vu' => Str::slug('Chủ tịch hội đồng quản trị'),],
            ['id' => 2, 'ten_chuc_vu' => 'Giám đốc điều hành', 'slug_chuc_vu' => Str::slug('Giám đốc điều hành'),],
            ['id' => 3, 'ten_chuc_vu' => 'Giám đốc tài chính ', 'slug_chuc_vu' => Str::slug('Giám đốc tài chính '),],
            ['id' => 4, 'ten_chuc_vu' => 'Giám đốc vận hành', 'slug_chuc_vu' => Str::slug('Giám đốc vận hành'),],
            ['id' => 5, 'ten_chuc_vu' => 'Giám đốc công nghệ', 'slug_chuc_vu' => Str::slug('Giám đốc công nghệ'),],
            ['id' => 6, 'ten_chuc_vu' => 'Giám đốc marketing', 'slug_chuc_vu' => Str::slug('Giám đốc marketing'),],
            ['id' => 7, 'ten_chuc_vu' => 'Giám đốc nhân sự ', 'slug_chuc_vu' => Str::slug('Giám đốc nhân sự '),],
            ['id' => 8, 'ten_chuc_vu' => 'Giám đốc bộ phận', 'slug_chuc_vu' => Str::slug('Giám đốc bộ phận'),],
            ['id' => 9, 'ten_chuc_vu' => 'Quản lý bộ phận ', 'slug_chuc_vu' => Str::slug('Quản lý bộ phận '),],
            ['id' => 10, 'ten_chuc_vu' => 'Trưởng phòng', 'slug_chuc_vu' => Str::slug('Trưởng phòng'),],
            ['id' => 11, 'ten_chuc_vu' => 'Phó trưởng phòng ', 'slug_chuc_vu' => Str::slug('Phó trưởng phòng '),],
            ['id' => 12, 'ten_chuc_vu' => 'Chuyên viên cao cấp', 'slug_chuc_vu' => Str::slug('Chuyên viên cao cấp'),],
            ['id' => 13, 'ten_chuc_vu' => 'Chuyên viên', 'slug_chuc_vu' => Str::slug('Chuyên viên'),],
            ['id' => 14, 'ten_chuc_vu' => 'Nhân viên', 'slug_chuc_vu' => Str::slug('Nhân viên'),],
            ['id' => 15, 'ten_chuc_vu' => 'Nhân viên thực tập', 'slug_chuc_vu' => Str::slug('Nhân viên thực tập'),],
            ['id' => 16, 'ten_chuc_vu' => 'Thư ký ', 'slug_chuc_vu' => Str::slug('Thư ký '),],
            ['id' => 17, 'ten_chuc_vu' => 'Trợ lý giám đốc', 'slug_chuc_vu' => Str::slug('Trợ lý giám đốc'),],
            ['id' => 18, 'ten_chuc_vu' => 'Kế toán viên', 'slug_chuc_vu' => Str::slug('Kế toán viên'),],
            ['id' => 19, 'ten_chuc_vu' => 'Kỹ sư', 'slug_chuc_vu' => Str::slug('Kỹ sư'),],
            ['id' => 20, 'ten_chuc_vu' => 'Nhân viên IT ', 'slug_chuc_vu' => Str::slug('Nhân viên IT '),],
            ['id' => 21, 'ten_chuc_vu' => 'Nhân viên bán hàng', 'slug_chuc_vu' => Str::slug('Nhân viên bán hàng'),],
            ['id' => 22, 'ten_chuc_vu' => 'Nhân viên chăm sóc khách hàng', 'slug_chuc_vu' => Str::slug('Nhân viên chăm sóc khách hàng'),],
        ]);
    }
}
