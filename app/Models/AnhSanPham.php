<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnhSanPham extends Model
{
    use HasFactory;
    protected $table = "anh_san_pham";
    public function anh_san_pham() {
        return $this->hasMany(AnhSanPham::class, 'san_pham_id');
    }
}
