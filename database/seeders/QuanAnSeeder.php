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
                'email' => 'bunmamvan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400101234',
                'ten_quan_an' => 'Bún Mắm Vân',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 22,
                'hinh_anh' => 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/02/bun-mam-van-da-nang.jpg',
                'so_dien_thoai' => '0905123456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 2,
                'email' => 'haisancuabien1@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400527891',
                'ten_quan_an' => 'Hải Sản Cua Biển 1',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '23:00:00',
                'id_dia_chi' => 23,
                'hinh_anh' => 'https://cdn1.ivivu.com/iVivu/2023/03/14/10/hai-san-cua-bien-da-nang.jpg',
                'so_dien_thoai' => '0905234567',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 3,
                'email' => 'miquang1a@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400651234',
                'ten_quan_an' => 'Mì Quảng 1A',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '20:30:00',
                'id_dia_chi' => 24,
                'hinh_anh' => 'https://danangfantasticity.com/wp-content/uploads/2021/07/mi-quang-1a-da-nang-1.jpg',
                'so_dien_thoai' => '0905345678',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 4,
                'email' => 'bunbaan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400789123',
                'ten_quan_an' => 'Bún Bà Ân',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 25,
                'hinh_anh' => 'https://media.foody.vn/images/blogs/foody-upload-api-foody-mobile-bunbathuyn--200310152227.jpg',
                'so_dien_thoai' => '0905456789',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 5,
                'email' => 'bunchacahon@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400987123',
                'ten_quan_an' => 'Bún chả cá Hờn',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 26,
                'hinh_anh' => 'https://static.vinwonders.com/production/bun-cha-ca-da-nang-1.jpg',
                'so_dien_thoai' => '0905567890',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 6,
                'email' => 'banhxeonamhien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400112233',
                'ten_quan_an' => 'Bánh xèo tôm nhảy Năm Hiền',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 27,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/10/07/1390167/banh-xeo-tom-nhay-mon-an-dac-san-binh-dinh-hap-dan-thu-hut-202110070039133465.jpg',
                'so_dien_thoai' => '0905678901',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 7,
                'email' => 'bunthitnuongcosau@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400223344',
                'ten_quan_an' => 'Bún thịt nướng Cô Sáu',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 28,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/03/04/1334207/cach-lam-bun-thit-nuong-ngon-chuan-vi-hue-202112100918345146.jpg',
                'so_dien_thoai' => '0905789012',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 8,
                'email' => 'ochutcaybang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400334455',
                'ten_quan_an' => 'Ốc hút Cây Bàng',
                'gio_mo_cua' => '16:00:00',
                'gio_dong_cua' => '23:00:00',
                'id_dia_chi' => 29,
                'hinh_anh' => 'https://static.vinwonders.com/production/oc-hut-da-nang-3.jpg',
                'so_dien_thoai' => '0905890123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 9,
                'email' => 'banhdappct@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400445566',
                'ten_quan_an' => 'Bánh đập Phan Châu Trinh',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '20:00:00',
                'id_dia_chi' => 30,
                'hinh_anh' => 'https://cdn.tgdd.vn/2021/04/content/banh-dap-la-dac-san-noi-tieng-cua-mien-trung-202104161641397922.jpg',
                'so_dien_thoai' => '0906901234',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 10,
                'email' => 'banhcanhbathu@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400556677',
                'ten_quan_an' => 'Bánh canh Bà Thu',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'id_dia_chi' => 31,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/08/20/1376629/cach-nau-banh-canh-cha-ca-thom-ngon-dam-da-chuan-vi-202108201132102937.jpg',
                'so_dien_thoai' => '0907012345',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 11,
                'email' => 'quantran@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400667788',
                'ten_quan_an' => 'Quán Trần',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 32,
                'hinh_anh' => 'https://static.vinwonders.com/production/quan-tran-da-nang-1.jpg',
                'so_dien_thoai' => '0907123456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 12,
                'email' => 'miquangechbeptrang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400778899',
                'ten_quan_an' => 'Mì Quảng Ếch Bếp Trang',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 33,
                'hinh_anh' => 'https://static.vinwonders.com/production/mi-quang-ech-bep-trang-da-nang.jpg',
                'so_dien_thoai' => '0907234567',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 13,
                'email' => 'bethuicaumongro@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400889900',
                'ten_quan_an' => 'Bê thui Cầu Mống Rô',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'id_dia_chi' => 34,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2020/10/09/1295085/cach-lam-be-thui-cau-mong-dam-chat-dac-san-da-nang-202010091027444642.jpg',
                'so_dien_thoai' => '0907345678',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 14,
                'email' => 'banhcuontienhung@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400990011',
                'ten_quan_an' => 'Bánh cuốn Tiến Hưng',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'id_dia_chi' => 35,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/03/31/1340286/cach-lam-banh-cuon-nhan-thit-truyen-thong-mem-ngon-don-gian-202203021008551632.jpg',
                'so_dien_thoai' => '0907456789',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 15,
                'email' => 'quanbabe@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400011223',
                'ten_quan_an' => 'Quán Bà Bé',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 36,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2020/10/14/1296625/cach-lam-banh-bot-loc-la-don-gian-tai-nha-202010141122593541.jpg',
                'so_dien_thoai' => '0907567890',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 16,
                'email' => 'banhtrangcuonthitheobahuong@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400022334',
                'ten_quan_an' => 'Bánh tráng cuốn thịt heo Bà Hường',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 37,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/10/12/1389777/cach-lam-banh-trang-cuon-thit-heo-dam-da-chuan-vi-da-nang-202110121126225909.jpg',
                'so_dien_thoai' => '0907678901',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 17,
                'email' => 'bunmamngoc@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400033445',
                'ten_quan_an' => 'Bún Mắm Ngọc',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '20:30:00',
                'id_dia_chi' => 38,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2022/04/27/1433960/cach-nau-bun-mam-ca-loc-dam-da-thom-ngon-chuan-vi-202204271136088080.jpg',
                'so_dien_thoai' => '0907789012',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 18,
                'email' => 'bunthitnuongbatrai@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400044556',
                'ten_quan_an' => 'Bún thịt nướng Bà Trai',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'id_dia_chi' => 39,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2021/03/04/1334207/cach-lam-bun-thit-nuong-ngon-chuan-vi-hue-202112100918345146.jpg',
                'so_dien_thoai' => '0907890123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 19,
                'email' => 'miquangthi@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400055667',
                'ten_quan_an' => 'Mì Quảng Thi',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'id_dia_chi' => 40,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2022/04/27/1433960/cach-nau-mi-quang-ngon-dam-da-chuan-vi-quang-nam-202204271136088080.jpg',
                'so_dien_thoai' => '0907901234',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 20,
                'email' => 'banhmibalan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400066778',
                'ten_quan_an' => 'Bánh mì Bà Lan',
                'gio_mo_cua' => '05:30:00',
                'gio_dong_cua' => '21:30:00',
                'id_dia_chi' => 41,
                'hinh_anh' => 'https://cdn.tgdd.vn/Files/2020/08/10/1278995/banh-mi-da-nang-1.jpg',
                'so_dien_thoai' => '0908012345',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ]

        ]);
    }
}
