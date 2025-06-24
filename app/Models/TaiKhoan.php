<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'tai_khoans';
    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'ho_ten',
        'email',
        'dia_chi',
        'ma_loai',
        'trang_thai',
        'gioi_tinh',
    ];
}
