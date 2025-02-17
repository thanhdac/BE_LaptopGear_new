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
            $table->string('email');
            $table->string('password');
            $table->string('ma_so_thue');
            $table->string('ten_quan_an');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->float('toa_do_x')->nullable();
            $table->float('toa_do_y')->nullable();
            $table->integer('tinh_trang')->default(0);
            $table->integer('is_active')->default(0);
            $table->integer('id_quan_huyen');
            $table->integer('id_tinh_thanh');
            $table->string('gio_mo_cua');
            $table->string('gio_dong_cua');
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
