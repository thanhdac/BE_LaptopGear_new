<?php

namespace Database\Seeders;

use App\Models\QuanAn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quan_ans')->delete();

        DB::table('quan_ans')->truncate();

        DB::table('quan_ans')->insert([
            [
                'id' => 1,
                'email' => 'quanan1@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1234567890',
                'ten_quan_an' => 'DZFullStack Restaurant',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 1,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsvba1hvgxj82e@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '376659762',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 2,
                'email' => 'didaudo@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1231233211',
                'ten_quan_an' => 'Cafe Đi Đâu Đó',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '23:00:00',
                'id_dia_chi' => 2,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsvftuo7o0pl83@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '123321123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 3,
                'email' => 'phuctea@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1233214541',
                'ten_quan_an' => 'Phúc Tea',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 3,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsvbott8ho61cc@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '190081981',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 4,
                'email' => 'hailan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1239871231',
                'ten_quan_an' => 'Highlands Coffee',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '22:30:00',
                'id_dia_chi' => 4,
                'hinh_anh' => 'https://aeonmall-haiphong-lechan.com.vn/wp-content/uploads/2020/12/hc-flagships-750x468-1.png',
                'so_dien_thoai' => '123123654',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 5,
                'email' => 'baty@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1122331111',
                'ten_quan_an' => 'Cơm Tấm Bà Ty',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 5,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsu9h27u4lok00@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '112222111',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 6,
                'email' => 'comgaduyen@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '2211112121',
                'ten_quan_an' => 'Cơm Gà Duyên',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 6,
                'hinh_anh' => 'https://images.foody.vn/res/g92/916004/prof/s/foody-upload-api-foody-mobile-seatalk_img_15876368-200423171714.jpg',
                'so_dien_thoai' => '123123312',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 7,
                'email' => 'captien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '3221121311',
                'ten_quan_an' => 'Cơm Gà Cấp Tiến',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 7,
                'hinh_anh' => 'https://bazantravel.com/cdn/medias/uploads/72/72732-com-ga-cap-tien-da-nang-700x615.jpg',
                'so_dien_thoai' => '123122311',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 8,
                'email' => 'comngo@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '9776987678',
                'ten_quan_an' => 'Cơm Gạo Quê Ngố',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:30:00',
                'id_dia_chi' => 8,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsv4ug0qcuroe7@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '123987911',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 9,
                'email' => 'xoichien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '4567891231',
                'ten_quan_an' => 'Xôi Chiên Anh Mập',
                'gio_mo_cua' => '15:00:00',
                'gio_dong_cua' => '23:00:00',
                'id_dia_chi' => 9,
                'hinh_anh' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQezTLNix3tk-m9RzdEydJoVwu9rR5qCDpkzrm0Tm3jQA&s',
                'so_dien_thoai' => '786182312',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 10,
                'email' => 'thitnuong@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '3451723121',
                'ten_quan_an' => 'Bún Thịt Nướng',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 10,
                'hinh_anh' => 'https://www.cet.edu.vn/wp-content/uploads/2018/03/bun-thit-nuong-kieu-mien-nam.jpg',
                'so_dien_thoai' => '431231231',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
        ]);

    }
}
