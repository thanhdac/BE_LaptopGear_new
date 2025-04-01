<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietDiaChi extends Model
{
    protected $table = 'chi_tiet_dia_chis';
    protected $fillable =
    [
        'id_dia_chi',
        'id_khach_hang',
        'ten_nguoi_nhan',
        'so_dien_thoai',
    ];
}
