<?php

namespace App\Http\Controllers;
use App\Models\LoaiSP;

use Illuminate\Http\Request;

class APILoaiSanPhamController extends Controller
{
    public function dsLoaiSP(){
        $dsLoaiSP = LoaiSP::all();
              

        return response()->json([
            'success'=>true,
            'data'=>$dsLoaiSP
        ]);
    }

    public function sanPhamTheoLoai($id){
        $loaiSP = LoaiSP::with(['san_pham' => function ($query) {
            $query->where('trang_thai', '1');
        }])->find($id);

        if(empty($loaiSP)){
            return response()->json([
                'success'=>false,
                'data'=>"Loại sản phẩm này không tồn tại"
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$loaiSP
        ]);
    }

}
