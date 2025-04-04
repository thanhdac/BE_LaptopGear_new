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
                'so_dien_thoai' => '0376659762',
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
                'so_dien_thoai' => '0123321123',
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
                'so_dien_thoai' => '090081981',
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
                'so_dien_thoai' => '0123123654',
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
                'so_dien_thoai' => '0112222111',
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
                'so_dien_thoai' => '0123123312',
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
                'so_dien_thoai' => '0123122311',
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
                'so_dien_thoai' => '0123987911',
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
                'so_dien_thoai' => '0786182312',
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
                'so_dien_thoai' => '0431231231',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 11,
                'email' => 'detox@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '6781625381',
                'ten_quan_an' => 'Nước Ép Detox',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 11,
                'hinh_anh' => 'https://chaipetsaigon.com/wp-content/uploads/2021/03/10-cong-thuc-lam-nuoc-ep-detox.jpg',
                'so_dien_thoai' => '0123421212',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 12,
                'email' => 'tocha@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '6781523801',
                'ten_quan_an' => 'Trà Sữa Tổ Cha',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 12,
                'hinh_anh' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3LTDYwStuK8NaZCp_hkTaz7qZy8jx2zB3Qz54ZhSrHg&s',
                'so_dien_thoai' => '0567125312',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 13,
                'email' => 'tamvien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '6781237810',
                'ten_quan_an' => 'Quán Chay Tâm Viên',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 13,
                'hinh_anh' => 'https://images.foody.vn/res/g66/658430/prof/s/foody-upload-api-foody-mobile-650c7590-4246-4eff-8-200504103214.jpg',
                'so_dien_thoai' => '0789126310',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 14,
                'email' => 'baolong@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '9739812798',
                'ten_quan_an' => 'Quán Chay Bảo Long',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 14,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsu8naawqtok4a@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0971263787',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 15,
                'email' => 'bonpas@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1786237808',
                'ten_quan_an' => 'BonPas Bakery',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 15,
                'hinh_anh' => 'https://demtrang.vn/wp-content/uploads/2019/09/Bonpas-05-01.jpg',
                'so_dien_thoai' => '0187263123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 16,
                'email' => 'vintea@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1981726391',
                'ten_quan_an' => 'Trà Sữa VinTea',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '23:00:00',
                'id_dia_chi' => 16,
                'hinh_anh' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQieyuN-1Hm1N7LR6ubuvXCiAL1k3AkxC__SRo2FHf8eA&s',
                'so_dien_thoai' => '0987612893',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 17,
                'email' => 'chelien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '7891263879',
                'ten_quan_an' => 'Chè Liên',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 17,
                'hinh_anh' => 'https://statics.vinpearl.com/che-sau-lien-ha-noi-0_1693400399.jpg',
                'so_dien_thoai' => '0127863856',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 18,
                'email' => 'comtamngon@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '9812763891',
                'ten_quan_an' => 'Cơm Tấm Ngon',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 18,
                'hinh_anh' => 'https://statics.vinpearl.com/com-tam-ngon-o-sai-gon-0_1630562640.jpg',
                'so_dien_thoai' => '0789126389',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 19,
                'email' => 'supcua@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1872368192',
                'ten_quan_an' => 'Súp KuShin',
                'gio_mo_cua' => '07:30:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 19,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsu4z5obhrixb3@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0817263811',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 20,
                'email' => 'chaolong@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '1872756381',
                'ten_quan_an' => 'Cháo Lòng Gia Trường',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '20:00:00',
                'id_dia_chi' => 20,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsvba1hvgxj82e@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0198273611',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
        ]);
    }
}
