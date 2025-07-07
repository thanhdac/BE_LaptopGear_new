<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = 'hoa_dons';
    protected $fillable = ['ma_hd', 'ngay_hoa_don', 'so_dien_thoai', 'ho_ten', 'dia_chi', 'ma_nv', 'ghi_chu', 'ngay_duyet', 'trang_thai'];
     const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
