<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table = "don_hang";

    public function chi_tiet_don_hang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'don_hang_id');
    }

    public function khach_hang()
    {
        return $this->belongsTo(KhachHang::class, 'khach_hang_id');
    }
}
