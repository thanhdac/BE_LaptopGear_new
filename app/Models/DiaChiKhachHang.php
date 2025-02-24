<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaChiKhachHang extends Model
{
    protected $table =   'dia_chi_khach_hangs';
    protected $fillable = [
        'ho_ten_nguoi_nhan' ,
        'so_dien_thoai_nhan',
        'dia_chi_nhan_hang',
        'id_khach_hang',
    ];
}
