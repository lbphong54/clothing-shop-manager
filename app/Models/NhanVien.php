<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table = "nhan_vien";
    public function phieu_nhap()
    {
        return $this->hasMany(PhieuNhap::class, 'nhan_vien_id');
    }
}
