<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = 'chi_tiet_don_hangs';
    protected $fillable = [
        'id_don_hang',
        'id_mon_an',
        'don_gia',
        'so_luong',
        'thanh_tien',
        'tinh_trang',
    ];

    CONST TINH_TRANG_CHUA_XAC_NHAN = 0;
    CONST TINH_TRANG_DA_XAC_NHAN = 1;

}
