<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    use HasFactory;
    protected $table = "loai_sp";

    public function san_pham() {
        return $this->hasMany(SanPham::class, 'loai_id');
    }
}
