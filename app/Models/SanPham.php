<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "san_pham";

    public function nha_cung_cap()
    {
        return $this->belongsTo(NhaCungCap::class, 'nha_cung_cap_id');
    }

    public function loai_sp()
    {
        return $this->belongsTo(LoaiSP::class, 'loai_id');
    }

    public function khuyen_mai()
    {
        return $this->belongsTo(KhuyenMai::class, 'khuyen_mai_id');
    }

    public function chi_tiet_san_pham()
    {
        return $this->hasMany(ChiTietSanPham::class, 'san_pham_id');
    }
    public function anh_san_pham() {
        return $this->hasMany(AnhSanPham::class, 'san_pham_id');
    }
}
