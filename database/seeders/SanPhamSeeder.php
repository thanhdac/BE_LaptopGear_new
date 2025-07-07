<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('san_phams')->delete();
        DB::table('san_phams')->truncate();
        DB::table('san_phams')->insert([
            [
                'ma_sp' => 1,
                'ten_sp' => 'Laptop Dell XPS 13 Plus 9320 (Core i7-1360P | 32GB | 1TB SSD | Intel Iris Xe | 13.4inch UHD+ | Win 11 | Xám)',
                'don_gia' => 30000000,
                'gia_cu' => 25000000,
                'trang_thai' => 1,
                'so_luong' => 100,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_7__2_224.png',
                'ma_dm' => '0001',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.2GHz up to 5.0GHz, 18MB Cache).
Ram: 32GB LPDDR5 6000MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 13.4inch UHD+ (3840 x 2400), InfinityEdge Touch.
Pin: 55Wh, 3Cell.
Weight: 1.2 kg.
Color: Platinum (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example1',
            ],
            [
                'ma_sp' => 2,
                'ten_sp' => 'Laptop HP Pavilion 15-eg3091TU (Core i5-1335U | 16GB | 512GB SSD | Intel UHD | 15.6inch FHD | Win 11 | Bạc)',
                'don_gia' => 20000000,
                'gia_cu' => 18000000,
                'trang_thai' => 1,
                'so_luong' => 150,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6_6_2.png',
                'ma_dm' => '0001',
                'mo_ta' => 'CPU: Intel® Core™ i5-1335U (1.3GHz up to 4.6GHz, 12MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB M.2 PCIe 3.0 SSD.
VGA: Intel® UHD Graphics.
Display: 15.6inch FHD (1920 x 1080), Anti-glare.
Pin: 41Wh, 3Cell.
Weight: 1.75 kg.
Color: Natural Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example2',
            ],
            [
                'ma_sp' => 3,
                'ten_sp' => 'MacBook Pro 16 M3 Pro 2023 (M3 Pro 11CPU/14GPU | 18GB | 512GB SSD | 16.2inch Liquid Retina XDR | MacOS | Bạc)',
                'don_gia' => 25000000,
                'gia_cu' => 23000000,
                'trang_thai' => 1,
                'so_luong' => 80,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/d/i/display_14_inch__f298e9zwj02m_large.jpg',
                'ma_dm' => '0001',
                'mo_ta' => 'CPU: Apple M3 Pro 11-core CPU.
Ram: 18GB Unified Memory.
Ổ cứng: 512GB SSD.
VGA: Apple 14-core GPU.
Display: 16.2inch Liquid Retina XDR (3456 x 2234).
Pin: 100Wh.
Weight: 2.14 kg.
Color: Silver (Bạc).
OS: macOS Sonoma.
NPP: Apple Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example2',
            ],
            [
                'ma_sp' => 4,
                'ten_sp' => 'Laptop Asus Zenbook 14 OLED UX3405MA-PH94W (Ultra 7-155H | 32GB | 1TB SSD | Intel Arc | 14.0inch 3K OLED | Win 11 | Xanh)',
                'don_gia' => 18000000,
                'gia_cu' => 16000000,
                'trang_thai' => 1,
                'so_luong' => 120,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_15_32.png',
                'ma_dm' => '0001',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 32GB LPDDR5X 7467MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 14.0inch 3K OLED (2880 x 1800), 120Hz.
Pin: 75Wh, 4Cell.
Weight: 1.2 kg.
Color: Ponder Blue (Xanh).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example3',
            ],

            [
                'ma_sp' => 5,
                'ten_sp' => 'Laptop Lenovo ThinkPad X1 Carbon Gen 11 (Core i7-1355U | 16GB | 1TB SSD | Intel Iris Xe | 14.0inch 2.8K OLED | Win 11 | Đen)',
                'don_gia' => 35000000,
                'gia_cu' => 32000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_5__9_255_1_1.png',
                'ma_dm' => '0001',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR5 6400MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 14.0inch 2.8K OLED (2880 x 1800), Anti-reflection, 60Hz.
Pin: 57Wh, 3Cell.
Weight: 1.12 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example4',
            ],
            [
                'ma_sp' => 6,
                'ten_sp' => 'Laptop Acer Swift 3 SF314-512-78J4 (Core i7-1260P | 16GB | 512GB SSD | Intel Iris Xe | 14.0inch FHD | Win 11 | Bạc)',
                'don_gia' => 15000000,
                'gia_cu' => 13000000,
                'trang_thai' => 1,
                'so_luong' => 200,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/2/_/2_470_1_1.png',
                'ma_dm' => '0003',
                'mo_ta' => 'CPU: Intel® Core™ i7-1260P (2.1GHz up to 4.7GHz, 18MB Cache).
Ram: 16GB LPDDR4X 4266MHz.
Ổ cứng: 512GB PCIe 3.0 NVMe SSD.
VGA: Intel® Iris Xe Graphics.
Display: 14.0inch FHD (1920 x 1080), IPS.
Pin: 56Wh, 3Cell.
Weight: 1.25 kg.
Color: Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example5',
            ],
            [
                'ma_sp' => 7,
                'ten_sp' => 'Laptop MSI Gaming GF63 Thin 12UC-876VN (Core i5-12450H | 16GB | 512GB SSD | RTX 2050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 22000000,
                'gia_cu' => 20000000,
                'trang_thai' => 1,
                'so_luong' => 70,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/a/laptop_msi_8_1_1.png',
                'ma_dm' => '0003',
                'mo_ta' => 'CPU: Intel® Core™ i5-12450H (2.0GHz up to 4.4GHz, 12MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe Gen 4 SSD.
VGA: NVIDIA® GeForce® RTX 2050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), IPS, 144Hz.
Pin: 52Wh, 3Cell.
Weight: 1.86 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: MSI Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example6',
            ],
            [
                'ma_sp' => 8,
                'ten_sp' => 'Laptop Razer Blade Stealth 13 (Core i7-1165G7 | 16GB | 512GB SSD | GTX 1650 Ti Max-Q | 13.3inch FHD 120Hz | Win 11 | Đen)',
                'don_gia' => 40000000,
                'gia_cu' => 38000000,
                'trang_thai' => 1,
                'so_luong' => 30,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_6__4_104.png',
                'ma_dm' => '0003',
                'mo_ta' => 'CPU: Intel® Core™ i7-1165G7 (2.8GHz up to 4.7GHz, 12MB Cache).
Ram: 16GB LPDDR4X 3733MHz.
Ổ cứng: 512GB M.2 NVMe SSD.
VGA: NVIDIA® GeForce® GTX 1650 Ti Max-Q 4GB.
Display: 13.3inch FHD (1920 x 1080), 120Hz, Matte.
Pin: 53Wh, 4Cell.
Weight: 1.41 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Razer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example7',
            ],
            [
                'ma_sp' => 9,
                'ten_sp' => 'Laptop Huawei MateBook X Pro 2024 (Ultra 7 155H | 16GB | 1TB SSD | Intel Arc | 14.2inch 3.1K | Win 11 | Xám)',
                'don_gia' => 28000000,
                'gia_cu' => 26000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/h/u/huawei-matebook-x_4_.jpg',
                'ma_dm' => '0003',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 16GB LPDDR5X 7467MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 14.2inch 3.1K (3120 x 2080), 90Hz.
Pin: 60Wh, 4Cell.
Weight: 1.26 kg.
Color: Space Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: Huawei Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example8',
            ],
            [
                'ma_sp' => 10,
                'ten_sp' => 'Laptop LG Gram 17 2024 (Ultra 7 155H | 32GB | 1TB SSD | Intel Arc | 17.0inch WQXGA | Win 11 | Trắng)',
                'don_gia' => 32000000,
                'gia_cu' => 30000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/t/e/text_ng_n_86_.png',
                'ma_dm' => '0003',
                'mo_ta' => 'CPU: Intel® Core™ Ultra 7 155H (1.4GHz up to 4.8GHz, 24MB Cache).
Ram: 32GB LPDDR5X 7467MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: Intel® Arc™ Graphics.
Display: 17.0inch WQXGA (2560 x 1600), Anti-glare.
Pin: 80Wh, 4Cell.
Weight: 1.35 kg.
Color: White (Trắng).
OS: Windows 11 Home bản quyền.
NPP: LG Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=example9',
            ],


            // 0002
            [
                'ma_sp' => 11,
                'ten_sp' => 'Laptop MSI Katana GF66 12UC-889VN (Core i7-12650H | 16GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 24000000,
                'gia_cu' => 22000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/1/_/1_135_2_3.jpg',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: Intel® Core™ i7-12650H (2.3GHz up to 4.7GHz, 24MB Cache).
Ram: 16GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), IPS, 144Hz.
Pin: 53.5Wh, 3Cell.
Weight: 2.25 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: MSI Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'Ragp7c4xQEU',
            ],
            [
                'ma_sp' => 12,
                'ten_sp' => 'Laptop ASUS ROG Strix G15 G513RC-HN095W (Ryzen 7 6800H | 8GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Xám)',
                'don_gia' => 29000000,
                'gia_cu' => 27000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/2/_/2_64_37.jpg',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 8GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 144Hz, Anti-glare.
Pin: 90Wh, 4Cell.
Weight: 2.1 kg.
Color: Eclipse Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=rogstrix',
            ],
            [
                'ma_sp' => 13,
                'ten_sp' => 'Laptop Acer Nitro 5 AN515-58-52SP (Core i5-12500H | 8GB | 512GB SSD | RTX 3050 | 15.6inch FHD 144Hz | Win 11 | Đen)',
                'don_gia' => 21000000,
                'gia_cu' => 19000000,
                'trang_thai' => 1,
                'so_luong' => 80,
                'hinh' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/2/8/28_1_17.jpg',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: Intel® Core™ i5-12500H (1.8GHz up to 4.5GHz, 18MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 144Hz, IPS.
Pin: 57.5Wh, 4Cell.
Weight: 2.5 kg.
Color: Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=nitro5',
            ],
            [
                'ma_sp' => 14,
                'ten_sp' => 'Laptop Lenovo Legion 5 15ARH7H (Ryzen 7 6800H | 16GB | 512GB SSD | RTX 3060 | 15.6inch WQHD 165Hz | Win 11 | Xám)',
                'don_gia' => 27000000,
                'gia_cu' => 25000000,
                'trang_thai' => 1,
                'so_luong' => 70,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/1/_/1_154_2_2.png',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 16GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 3060 6GB GDDR6.
Display: 15.6inch WQHD (2560 x 1440), 165Hz, IPS.
Pin: 80Wh, 4Cell.
Weight: 2.4 kg.
Color: Storm Gray (Xám).
OS: Windows 11 Home bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=legion5',
            ],
            [
                'ma_sp' => 15,
                'ten_sp' => 'Laptop Dell G15 5525 (Ryzen 7 6800H | 16GB | 512GB SSD | RTX 3050 | 15.6inch FHD 120Hz | Win 11 | Xám)',
                'don_gia' => 26000000,
                'gia_cu' => 24000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/d/e/dell-g15.png',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 6800H (3.2GHz up to 4.7GHz, 20MB Cache).
Ram: 16GB DDR5 4800MHz.
Ổ cứng: 512GB PCIe Gen 4 SSD.
VGA: NVIDIA® GeForce® RTX 3050 4GB GDDR6.
Display: 15.6inch FHD (1920 x 1080), 120Hz, Anti-glare.
Pin: 56Wh, 3Cell.
Weight: 2.5 kg.
Color: Phantom Grey (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=dellg15',
            ],
            [
                'ma_sp' => 16,
                'ten_sp' => 'Laptop HP Omen 16 2023 (Ryzen 7 7840HS | 16GB | 1TB SSD | RTX 4060 | 16.1inch FHD 165Hz | Win 11 | Đen)',
                'don_gia' => 31000000,
                'gia_cu' => 28000000,
                'trang_thai' => 1,
                'so_luong' => 45,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/h/p/hp-omen-16.png',
                'ma_dm' => '0002',
                'mo_ta' => 'CPU: AMD Ryzen™ 7 7840HS (3.8GHz up to 5.1GHz, 24MB Cache).
Ram: 16GB DDR5 5600MHz.
Ổ cứng: 1TB PCIe 4.0 NVMe SSD.
VGA: NVIDIA® GeForce® RTX 4060 8GB GDDR6.
Display: 16.1inch FHD (1920 x 1080), 165Hz, IPS.
Pin: 83Wh, 6Cell.
Weight: 2.4 kg.
Color: Shadow Black (Đen).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=hpomen16',
            ],


            // 0004
            [
                'ma_sp' => 17,
                'ten_sp' => 'Laptop Dell XPS 13 Plus (Intel Core i7 | 16GB | 1TB SSD | Intel Iris Xe | 13.4inch UHD+ | Win 11 | Xám)',
                'don_gia' => 36000000,
                'gia_cu' => 34000000,
                'trang_thai' => 1,
                'so_luong' => 55,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/x/p/xps-13-plus.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.8GHz up to 5.0GHz, 18MB Cache).
Ram: 16GB LPDDR5 6000MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.4inch UHD+ (3840 x 2400), InfinityEdge, cảm ứng.
Pin: 55Wh, 3Cell.
Weight: 1.23 kg.
Color: Platinum (Xám).
OS: Windows 11 Home bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=xps13plus',
            ],
            [
                'ma_sp' => 18,
                'ten_sp' => 'MacBook Air 13 M2 (8-core CPU | 10-core GPU | 16GB | 512GB SSD | 13.6inch Retina | macOS | Xám)',
                'don_gia' => 32000000,
                'gia_cu' => 30000000,
                'trang_thai' => 1,
                'so_luong' => 100,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/m/a/macbook-air-m2.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Apple M2 (8-core CPU, 10-core GPU).
Ram: 16GB Unified Memory.
Ổ cứng: 512GB SSD.
VGA: Apple 10-core GPU.
Display: 13.6inch Liquid Retina (2560 x 1664), True Tone.
Pin: 52.6Wh.
Weight: 1.24 kg.
Color: Space Gray (Xám).
OS: macOS bản quyền.
NPP: Apple Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=airm2',
            ],
            [
                'ma_sp' => 19,
                'ten_sp' => 'Laptop LG Gram 14 (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 14inch WUXGA | Win 11 | Trắng)',
                'don_gia' => 28000000,
                'gia_cu' => 26000000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/g/lg-gram-14.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Intel® Core™ i7-1360P (1.8GHz up to 5.0GHz, 18MB Cache).
Ram: 16GB LPDDR5 6000MHz.
Ổ cứng: 512GB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 14inch WUXGA (1920 x 1200), IPS.
Pin: 72Wh, 4Cell.
Weight: 0.999 kg.
Color: Snow White (Trắng).
OS: Windows 11 Home bản quyền.
NPP: LG Việt Nam.
Xuất xứ: Hàn Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=lggram14',
            ],
            [
                'ma_sp' => 20,
                'ten_sp' => 'Laptop HP Spectre x360 (Intel Core i7 | 16GB | 1TB SSD | Intel Iris Xe | 13.5inch 3K2K OLED | Win 11 | Bạc)',
                'don_gia' => 33000000,
                'gia_cu' => 31000000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/h/p/hp-spectre.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR4x 4266MHz.
Ổ cứng: 1TB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.5inch 3K2K OLED (3000 x 2000), cảm ứng, xoay gập 360°.
Pin: 66Wh, 4Cell.
Weight: 1.34 kg.
Color: Natural Silver (Bạc).
OS: Windows 11 Home bản quyền.
NPP: HP Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=spectrex360',
            ],
            [
                'ma_sp' => 21,
                'ten_sp' => 'Laptop ASUS Zenbook S 13 OLED (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 13.3inch 2.8K OLED | Win 11 | Xanh)',
                'don_gia' => 30000000,
                'gia_cu' => 28000000,
                'trang_thai' => 1,
                'so_luong' => 75,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/z/e/zenbook-s13-oled.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Intel® Core™ i7-1355U (1.7GHz up to 5.0GHz, 12MB Cache).
Ram: 16GB LPDDR5 6400MHz.
Ổ cứng: 512GB M.2 PCIe 4.0 NVMe SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.3inch 2.8K OLED (2880 x 1800), 16:10, 100% DCI-P3, 550nits.
Pin: 63Wh, 4Cell.
Weight: 1.00 kg.
Color: Basalt Gray (Xanh).
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=zenbookoled',
            ],
            [
                'ma_sp' => 22,
                'ten_sp' => 'Laptop Microsoft Surface Laptop 5 (Intel Core i7 | 16GB | 512GB SSD | Intel Iris Xe | 13.5inch PixelSense | Win 11 | Bạch Kim)',
                'don_gia' => 35000000,
                'gia_cu' => 33000000,
                'trang_thai' => 1,
                'so_luong' => 35,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/s/u/surface-laptop-5.png',
                'ma_dm' => '0004',
                'mo_ta' => 'CPU: Intel® Core™ i7-1255U (1.7GHz up to 4.7GHz, 12MB Cache).
Ram: 16GB LPDDR5x 6400MHz.
Ổ cứng: 512GB SSD.
VGA: Intel® Iris® Xe Graphics.
Display: 13.5inch PixelSense (2256 x 1504), cảm ứng, 3:2, Gorilla Glass.
Pin: 47.4Wh, 4Cell.
Weight: 1.29 kg.
Color: Platinum (Bạch Kim).
OS: Windows 11 Home bản quyền.
NPP: Microsoft Việt Nam.
Xuất xứ: Trung Quốc.',
                'trailer' => 'https://www.youtube.com/watch?v=surfacelaptop',
            ],

            // 0005
            [
                'ma_sp' => 26,
                'ten_sp' => '[Like New] Laptop Lenovo ThinkPad T480 (Intel Core i5-8350U | 8GB DDR4 | 256GB SSD | Intel UHD 620 | 14.0inch FHD IPS | Win 10 Pro | Đen)',
                'don_gia' => 13500000,
                'gia_cu' => 11500000,
                'trang_thai' => 1,
                'so_luong' => 40,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/l/e/lenovo-t480.png',
                'ma_dm' => '0005',
                'mo_ta' => "CPU: Intel® Core™ i5-8350U (1.7GHz up to 3.6GHz, 6MB Cache).
Ram: 8GB DDR4 2400MHz.
Ổ cứng: 256GB SSD M.2 SATA.
VGA: Intel® UHD Graphics 620.
Display: 14.0inch FHD (1920 x 1080) IPS.
Pin: 3Cell 57Wh.
Weight: 1.58 kg.
Color: Đen.
OS: Windows 10 Pro bản quyền.
NPP: Lenovo Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=thinkpadt480',
            ],
            [
                'ma_sp' => 27,
                'ten_sp' => '[Like New] Laptop Acer Aspire 5 (Ryzen 3 5300U | 8GB DDR4 | 256GB SSD | Radeon Graphics | 15.6inch FHD IPS | Win 11 | Bạc)',
                'don_gia' => 9000000,
                'gia_cu' => 8000000,
                'trang_thai' => 1,
                'so_luong' => 50,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/a/s/aspire5.png',
                'ma_dm' => '0005',
                'mo_ta' => "CPU: AMD Ryzen™ 3 5300U (2.6GHz up to 3.8GHz, 4MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 256GB SSD PCIe NVMe.
VGA: AMD Radeon™ Graphics.
Display: 15.6inch FHD (1920 x 1080) IPS.
Pin: 3Cell 48Wh.
Weight: 1.7 kg.
Color: Bạc.
OS: Windows 11 Home bản quyền.
NPP: Acer Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=aspire5',
            ],
            [
                'ma_sp' => 28,
                'ten_sp' => '[Like New] Laptop Asus VivoBook 14 (Intel Core i3-1115G4 | 8GB DDR4 | 512GB SSD | Intel UHD Graphics | 14.0inch FHD IPS | Win 11 | Bạc)',
                'don_gia' => 10000000,
                'gia_cu' => 8500000,
                'trang_thai' => 1,
                'so_luong' => 45,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/v/i/vivobook14.png',
                'ma_dm' => '0005',
                'mo_ta' => "CPU: Intel® Core™ i3-1115G4 (3.0GHz up to 4.1GHz, 6MB Cache).
Ram: 8GB DDR4 3200MHz.
Ổ cứng: 512GB SSD M.2 PCIe.
VGA: Intel® UHD Graphics.
Display: 14.0inch FHD (1920 x 1080) IPS.
Pin: 2Cell 37Wh.
Weight: 1.4 kg.
Color: Bạc.
OS: Windows 11 Home bản quyền.
NPP: ASUS Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=vivobook14',
            ],
            [
                'ma_sp' => 30,
                'ten_sp' => 'Bàn phím cơ Keychron K2 V2 (Bluetooth | 84 phím | Layout Mac/Win)',
                'don_gia' => 1900000,
                'gia_cu' => 1700000,
                'trang_thai' => 1,
                'so_luong' => 80,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/k/e/keychron-k2.png',
                'ma_dm' => '0006',
                'mo_ta' => "Switch: Gateron Red.
Kết nối: Bluetooth 5.1 & USB-C.
Pin: 4000mAh, dùng 72 giờ liên tục.
Layout: 84 phím, hỗ trợ macOS & Windows.
Backlight: White LED.
Weight: 794g.
Color: Đen xám.
OS: Windows, macOS.
NPP: Keychron Việt Nam.
Xuất xứ: Trung Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=keychronk2',
            ],
            [
                'ma_sp' => 31,
                'ten_sp' => 'Tai nghe Sony WH-1000XM5 (Chống ồn | Bluetooth 5.2 | Mic AI)',
                'don_gia' => 6900000,
                'gia_cu' => 6600000,
                'trang_thai' => 1,
                'so_luong' => 60,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/s/o/sony-xm5.png',
                'ma_dm' => '0006',
                'mo_ta' => "Driver: 30mm.
Chống ồn: Dual Noise Sensor + AI.
Pin: 30 giờ nghe nhạc, sạc nhanh 3 phút dùng 3h.
Kết nối: Bluetooth 5.2 + Jack 3.5mm.
Mic: 4 Mic Beamforming.
Weight: 250g.
Color: Đen.
OS: Tương thích đa nền tảng.
NPP: Sony Việt Nam.
Xuất xứ: Malaysia.",
                'trailer' => 'https://www.youtube.com/watch?v=sonywhxm5',
            ],
            [
                'ma_sp' => 32,
                'ten_sp' => 'Ổ cứng SSD Samsung 980 1TB (M.2 NVMe Gen 3 | Tốc độ cao)',
                'don_gia' => 2000000,
                'gia_cu' => 1800000,
                'trang_thai' => 1,
                'so_luong' => 90,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/s/s/ssd-980.png',
                'ma_dm' => '0006',
                'mo_ta' => "Dung lượng: 1TB.
Giao tiếp: M.2 NVMe PCIe Gen 3.0 x4.
Tốc độ đọc: Lên đến 3500MB/s.
Tốc độ ghi: Lên đến 3000MB/s.
Công nghệ: HMB & TurboWrite.
Weight: 8g.
Color: Đen.
OS: Hỗ trợ Windows, Linux.
NPP: Samsung Việt Nam.
Xuất xứ: Hàn Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=samsungssd980',
            ],
            [
                'ma_sp' => 33,
                'ten_sp' => 'Ram Kingston Fury 16GB DDR4 3200MHz (Tản nhiệt | CL16)',
                'don_gia' => 1300000,
                'gia_cu' => 1100000,
                'trang_thai' => 1,
                'so_luong' => 70,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/k/i/kingston-fury.png',
                'ma_dm' => '0006',
                'mo_ta' => "Dung lượng: 16GB.
Loại RAM: DDR4.
Bus: 3200MHz.
CAS latency: CL16.
Tản nhiệt: Có heatsink đen.
Voltage: 1.35V.
Color: Đen.
OS: Hỗ trợ mọi hệ điều hành.
NPP: Kingston Việt Nam.
Xuất xứ: Đài Loan.",
                'trailer' => 'https://www.youtube.com/watch?v=kingstonfury',
            ],
            [
                'ma_sp' => 34,
                'ten_sp' => 'Đế tản nhiệt Cooler Master Notepal (LED RGB | Fan kép | 17inch)',
                'don_gia' => 750000,
                'gia_cu' => 650000,
                'trang_thai' => 1,
                'so_luong' => 85,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/c/o/cooler-master.png',
                'ma_dm' => '0006',
                'mo_ta' => "Quạt: 2x 120mm.
Đèn: RGB LED.
Kích thước hỗ trợ: Laptop đến 17inch.
Chất liệu: Nhôm + ABS.
Nguồn: Cắm USB.
Độ ồn: <23 dBA.
Color: Đen.
OS: Tương thích mọi OS.
NPP: Cooler Master VN.
Xuất xứ: Trung Quốc.",
                'trailer' => 'https://www.youtube.com/watch?v=coolermasterfan',
            ],
            // 0007

            [
                'ma_sp' => 35,
                'ten_sp' => 'PC Intel Core i5 Gen 12 + RTX 3060 (Gaming | SSD 512GB | RAM 16GB | PSU 650W | WiFi | Win 11)',
                'don_gia' => 22000000,
                'gia_cu' => 20000000,
                'trang_thai' => 1,
                'so_luong' => 20,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/p/c/pc-rtx3060.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: Intel Core i5 12400F (6 nhân 12 luồng, 4.4GHz).
VGA: NVIDIA GeForce RTX 3060 12GB.
RAM: 16GB DDR4 3200MHz.
Ổ cứng: SSD 512GB NVMe.
Mainboard: B660M chipset.
Nguồn: 650W 80 Plus Bronze.
Kết nối: Wi-Fi + LAN.
Case: ATX gaming, kính cường lực.
OS: Windows 11 bản quyền.
NPP: Intel Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pc3060build',
            ],
            [
                'ma_sp' => 36,
                'ten_sp' => 'PC AMD Ryzen 5 + RX 6700XT (Gaming | SSD 1TB | RAM 32GB | PSU 750W | Win 11)',
                'don_gia' => 25000000,
                'gia_cu' => 23000000,
                'trang_thai' => 1,
                'so_luong' => 15,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/r/y/ryzen-rx6700.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: AMD Ryzen 5 5600X (6 nhân 12 luồng, 4.6GHz).
VGA: AMD Radeon RX 6700XT 12GB.
RAM: 32GB DDR4 3600MHz.
Ổ cứng: SSD 1TB NVMe Gen 4.
Mainboard: B550 chipset.
Nguồn: 750W 80 Plus Gold.
Tản nhiệt: Tower RGB.
OS: Windows 11 bản quyền.
NPP: AMD Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pcamdbuild',
            ],
            [
                'ma_sp' => 37,
                'ten_sp' => 'PC Intel Core i7 Gen 13 + RTX 4070 (Hiệu năng cao | 32GB RAM | SSD 1TB | WiFi | Win 11)',
                'don_gia' => 33000000,
                'gia_cu' => 31000000,
                'trang_thai' => 1,
                'so_luong' => 10,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/p/c/pc-rtx4070.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: Intel Core i7 13700F (16 nhân 24 luồng, 5.2GHz).
VGA: NVIDIA GeForce RTX 4070 12GB.
RAM: 32GB DDR5 5200MHz.
Ổ cứng: SSD 1TB Gen 4 NVMe.
Mainboard: Z690 chipset.
Nguồn: 750W 80 Plus Gold.
Tản nhiệt: AIO 240mm RGB.
OS: Windows 11 bản quyền.
NPP: Intel Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pc4070build',
            ],
            [
                'ma_sp' => 38,
                'ten_sp' => 'PC Văn Phòng Core i3 Gen 10 + SSD (Giá rẻ | Mượt nhẹ | Win 11)',
                'don_gia' => 9500000,
                'gia_cu' => 8700000,
                'trang_thai' => 1,
                'so_luong' => 30,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/p/c/pc-vanphong.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: Intel Core i3 10105 (4 nhân 8 luồng, 4.4GHz).
VGA: Intel UHD Graphics 630.
RAM: 8GB DDR4 2666MHz.
Ổ cứng: SSD 256GB SATA III.
Mainboard: H510 chipset.
Nguồn: 400W tiết kiệm điện.
Case: Mini tower, nhỏ gọn.
OS: Windows 11 bản quyền.
NPP: Intel Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pcvanphong',
            ],
            [
                'ma_sp' => 39,
                'ten_sp' => 'PC Đồ Họa Xeon + Quadro P2200 (Workstation | Tối ưu thiết kế CAD/3D)',
                'don_gia' => 28000000,
                'gia_cu' => 26000000,
                'trang_thai' => 1,
                'so_luong' => 12,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/p/c/pc-quadro.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: Intel Xeon E5-2670 v3 (12 nhân 24 luồng).
VGA: NVIDIA Quadro P2200 5GB GDDR5X.
RAM: 32GB ECC DDR4.
Ổ cứng: SSD 512GB + HDD 1TB.
Mainboard: Workstation chipset C602.
Nguồn: 750W công suất thực.
Case: Full tower chuyên nghiệp.
OS: Windows 11 Pro bản quyền.
NPP: Dell Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pcxeonquadro',
            ],
            [
                'ma_sp' => 40,
                'ten_sp' => 'PC Mini ITX Intel Pentium + SSD (Nhỏ gọn | Tĩnh lặng | Văn phòng)',
                'don_gia' => 10500000,
                'gia_cu' => 9500000,
                'trang_thai' => 1,
                'so_luong' => 25,
                'hinh' => 'https://cdn2.cellphones.com.vn/x/media/catalog/product/p/c/pc-mini-itx.png',
                'ma_dm' => '0007',
                'mo_ta' => "CPU: Intel Pentium Gold G6405 (2 nhân 4 luồng, 4.1GHz).
VGA: Intel UHD Graphics.
RAM: 8GB DDR4 2666MHz.
Ổ cứng: SSD 256GB NVMe.
Mainboard: H510M ITX.
Nguồn: 300W SFX.
Case: Mini ITX siêu nhỏ gọn.
OS: Windows 11 bản quyền.
NPP: Intel Việt Nam.
Xuất xứ: Việt Nam.",
                'trailer' => 'https://www.youtube.com/watch?v=pcminitx',
            ],
        ]);
    }
}
