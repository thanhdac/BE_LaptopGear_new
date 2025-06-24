<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
protected $table = 'san_phams';
protected $fillable = ['ma_sp','ten_sp', 'don_gia', 'trang_thai', 'so_luong', 'hinh', 'ma_dm', 'mo_ta','trailer'];
}
