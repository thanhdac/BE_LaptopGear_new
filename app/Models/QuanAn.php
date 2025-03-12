<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class QuanAn extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'quan_ans';
    protected $fillable = [
        'email',
        'password',
        'ma_so_thue',
        'ten_quan_an',
        'gio_mo_cua',
        'gio_dong_cua',
        'id_dia_chi',
        'hinh_anh',
        'so_dien_thoai',
        'tong_tien',
        'tinh_trang',
        'is_active',
    ];
}
