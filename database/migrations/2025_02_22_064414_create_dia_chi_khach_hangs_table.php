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
        Schema::create('dia_chi_khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten_nguoi_nhan');
            $table->string('so_dien_thoai_nhan');
            $table->string('dia_chi_nhan_hang');
            $table->integer('id_khach_hang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dia_chi_khach_hangs');
    }
};
