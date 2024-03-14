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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 255)->nullable();
            $table->decimal('gia_ban', 10, 2)->nullable();
            $table->decimal('gia_nhap', 10, 2)->nullable();
            $table->text('mo_ta')->nullable();
            $table->integer('loai_id')->nullable();
            $table->integer('khuyen_mai_id')->nullable();
            $table->integer('nha_cung_cap_id')->nullable();
            $table->integer('so_luong')->default(0);
            $table->integer('trang_thai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
