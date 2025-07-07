<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'gio_hangs';
    protected $fillable = [
        'ma_sp',
        'ten_sp',
        'don_gia',
        'hinh',
        'so_luong',
        'ma_dm',
        'mo_ta',
    ];
}
