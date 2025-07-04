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
Schema::create('san_phams', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_sp');
    $table->string('ten_sp');
    $table->double('don_gia');
    $table->double('gia_cu');
    $table->integer('trang_thai');
    $table->integer('so_luong');
    $table->string('hinh');
    $table->unsignedBigInteger('ma_dm');
    $table->text('mo_ta');
    // $table->text('danh_muc_may');
    $table->string('trailer');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
