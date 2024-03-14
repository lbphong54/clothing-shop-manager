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
        Schema::create('chi_tiet_phieu_nhap', function (Blueprint $table) {
            $table->id();
            $table->integer('phieu_nhap_id')->nullable();
            $table->integer('san_pham_id')->nullable();
            $table->integer('so_luong')->nullable();
            $table->integer('size_id');
            $table->integer('color_id');
            $table->decimal('thanh_tien', 10, 2)->nullable();
            $table->decimal('gia_nhap', 10, 2)->nullable();
            $table->decimal('gia_ban', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_phieu_nhap');
    }
};
