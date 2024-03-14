<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCap;
use App\Models\SanPham;
use Illuminate\Http\Request;

class APISanPhamController extends Controller
{

    public function dsSanPham(){
        $dsSanPham = SanPham::where('trang_thai','1')->get();
              

        return response()->json([
            'success'=>true,
            'data'=>$dsSanPham
        ]);
    }

    public function sanPhamTheoLoai($id){
        $loaiSP = NhaCungCap::find($id);
        $dsSanPham = $loaiSP->san_pham;
        if(empty($dsSanPham)){
            return response()->json([
                'success'=>false,
                'data'=>"Loại sản phẩm này không tồn tại"
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$dsSanPham
        ]);
    }

    public function chiTietSanPham($id){
        $sanPham = SanPham::with('chi_tiet_san_pham')->find($id);

        return response()->json([
            'success'=>true,
            'data'=>$sanPham
        ]);
    }

    public function sanPhamTheoNhaCungCap($id){
        $nhaCungCap = NhaCungCap::find($id);
        $dsSanPham = $nhaCungCap->san_pham;
        if(empty($dsSanPham)){
            return response()->json([
                'success'=>false,
                'data'=>" sản phẩm này không tồn tại"
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$dsSanPham
        ]);
    }

    public function thongTinSanPham($id){
        $sanPham = SanPham::find($id);
        
        if(empty($sanPham)){
            return response()->json([
                'success'=>false,
                'data'=>"Loại sản phẩm này không tồn tại"
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$sanPham
        ]);
    }
}
