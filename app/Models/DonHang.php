<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'don_hangs';
    protected $fillable = [
        'ma_don_hang',
        'tong_tien',
        'id_quan_an',
        'id_khach_hang',
        'dia_chi',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'id_voucher',
        'phi_ship',
        'tinh_trang',
        'is_thanh_toan',
        'id_shipper',
    ];
}
