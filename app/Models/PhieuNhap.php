<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    use HasFactory;
    protected $table = "phieu_nhap";
    
    public function chi_tiet_phieu_nhap() {
        return $this->hasMany(ChiTietPhieuNhap::class, 'phieu_nhap_id');
    }
    public function nhan_vien()
    {
        return $this->belongsTo(NhanVien::class, 'nhan_vien_id');
    }

    public function nha_cung_cap()
    {
        return $this->belongsTo(NhaCungCap::class, 'nha_cung_cap_id');
    }

    public function khuyen_mai()
    {
        return $this->belongsTo(KhuyenMai::class, 'khuyen_mai_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
}
