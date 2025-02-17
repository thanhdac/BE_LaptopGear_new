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
        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->string('password');
            $table->string('cccd');
            $table->string('dia_chi_thuong_tru');
            $table->float('toa_do_x')->nullable();
            $table->float('toa_do_y')->nullable();
            $table->integer('id_tinh_thanh');
            $table->integer('id_quan_huyen');
            $table->integer('is_active')->default(0);
            $table->integer('is_open')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippers');
    }
};
