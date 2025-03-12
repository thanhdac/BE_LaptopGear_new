<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiMonAn extends Model
{
    protected $table = 'loai_mon_ans';
    protected $fillable = [
        'ten_loai_mon',
        'id_quan_an',
        'tinh_trang',
        'id_danh_muc',
    ];
}
