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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id();
            $table->integer('khach_hang_id')->nullable();
            $table->string('ma_don', 8)->nullable();
            $table->datetime('ngay_dat')->nullable();
            $table->string('dia_chi_nhan')->nullable();
            $table->decimal('tong_tien', 10, 2)->nullable();
            $table->integer('trang_thai')->nullable();
            $table->integer('thanh_toan');
            $table->string('thong_tin', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};
