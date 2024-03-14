<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table = "nha_cung_cap";
    public function san_pham() {
        return $this->hasMany(SanPham::class, 'nha_cung_cap_id');
    }
}
