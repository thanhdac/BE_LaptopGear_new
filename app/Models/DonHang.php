<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'don_hangs';
    protected $fillable = [
        'ma_don_hang',
        'id_khach_hang',
        'id_voucher',
        'id_shipper',
        'id_quan_an',
        'tong_tien',
        'dia_chi',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'phi_ship',
        'tinh_trang',
        'is_thanh_toan',
        'toa_do_x',
        'toa_do_y',
    ];
}
