<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuanAn extends Model
{
    protected $table = 'quan_ans';
    protected $fillable = [
        'email',
        'password',
        'ma_so_thue',
        'ten_quan_an',
        'dia_chi',
        'so_dien_thoai',
        'toa_do_x',
        'toa_do_y',
        'tinh_trang',
        'is_active',
        'gio_mo_cua',
        'gio_dong_cua',
        'id_tinh_thanh',
        'id_quan_huyen',
    ];
}
