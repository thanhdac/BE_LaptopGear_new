<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_mucs';
    protected $fillable = [
        'ten_danh_muc',
        'slug_danh_muc',
        'hinh_anh',
        'id_danh_muc_cha',
        'tinh_trang'
    ];
}
