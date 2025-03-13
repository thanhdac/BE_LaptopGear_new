<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang')->unique();
            $table->integer('id_khach_hang');
            $table->integer('id_voucher')->nullable();
            $table->integer('id_shipper')->nullable();
            $table->integer('id_quan_an');
            $table->integer('tong_tien');
            $table->string('dia_chi');
            $table->string('ten_nguoi_nhan');
            $table->string('so_dien_thoai');
            $table->integer('phi_ship')->default(0);
            $table->tinyInteger('tinh_trang')->default(1);
            $table->integer('is_thanh_toan')->default(0);
            $table->integer('toa_do_x')->nullable();
            $table->integer('toa_do_y')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
