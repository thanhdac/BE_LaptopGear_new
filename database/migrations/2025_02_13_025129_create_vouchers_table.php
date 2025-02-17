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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('ma_code');
            $table->date('thoi_gian_bat_dau');
            $table->date('thoi_gian_ket_thuc');
            $table->integer('loai_giam');
            $table->integer('so_giam_gia');
            $table->integer('so_tien_toi_da');
            $table->integer('don_hang_toi_thieu');
            $table->boolean('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
