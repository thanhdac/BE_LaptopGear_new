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
        Schema::create('quan_ans', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ma_so_thue')->nullable();
            $table->string('ten_quan_an');
            $table->time('gio_mo_cua')->nullable();
            $table->time('gio_dong_cua')->nullable();
            $table->integer('id_dia_chi')->default(0);
            $table->string('hinh_anh')->nullable();
            $table->string('so_dien_thoai')->unique();
            $table->integer('tong_tien')->default(0);
            $table->integer('tinh_trang')->default(0);
            $table->integer('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ans');
    }
};
