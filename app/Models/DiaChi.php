<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaChi extends Model
{
    protected $table = 'dia_chis';
    protected $fillable = [
        'dia_chi',
        'id_quan_huyen',
        'id_tinh_thanh',
        'id_khach_hang',
        'toa_do_x',
        'toa_do_y',
        'tinh_trang',
    ];
}
