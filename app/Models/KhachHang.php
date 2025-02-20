<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class KhachHang extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'khach_hangs';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'password',
        'hash_reset',
        'hash_active',
        'is_active',
        'is_block',
    ];
}
