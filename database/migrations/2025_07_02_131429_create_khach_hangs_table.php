<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_kh')->nullable();
            $table->string('mat_khau');
            $table->string('ho_ten');
            $table->string('email');
            $table->string('dia_chi');
            $table->integer('sdt');
            // $table->integer('trang_thai');
            $table->integer('gioi_tinh');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
