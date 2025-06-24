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
Schema::create('hoa_dons', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_hd');
    $table->string('ten_dang_nhap');
    $table->date('ngay_hoa_don');
    $table->string('so_dien_thoai');
    $table->string('ho_ten');
    $table->string('dia_chi');
    $table->integer('ma_nv');
    $table->text('ghi_chu');
    $table->dateTime('ngay_duyet');
    $table->integer('trang_thai');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
