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
        Schema::create('phieu_nhap', function (Blueprint $table) {
            $table->id();
            $table->date('ngay_nhap')->nullable();
            $table->integer('nha_cung_cap_id')->nullable();
            $table->decimal('tong_tien', 10, 2);
            $table->string('ghi_chu', 255)->nullable();
            $table->timestamps();
            $table->integer('nhan_vien_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_nhap');
    }
};
