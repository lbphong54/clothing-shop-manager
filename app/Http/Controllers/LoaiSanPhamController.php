<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\LoaiSP;
use App\Models\SanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function danhSach(){
        $dsLoaiSP = LoaiSP::all();
        
        return view('types.index',compact('dsLoaiSP')); 
    }
    public function chiTiet(Request $request,$id){

        $loaiSP = LoaiSP::find($id);
        $dsSanPham = SanPham::where('loai_id',$id)->paginate(20);
        return view('types.detail',compact('loaiSP','dsSanPham'));
    }

    public function themMoi(){

        return view('types.add');
    }

    public function xuLyThemMoi(Request $request){
        
        $loaiSP = new LoaiSP();
        $loaiSP->ten = $request->ten;      
        
        $loaiSP->save();
        return redirect()->action([LoaiSanPhamController::class, 'danhSach'])->with(['themMoi'=>"Thêm mới thành công"]);
    }


    public function capNhat($id){
        $loaiSP = LoaiSP::find($id);
        
        if(empty($loaiSP)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"không tồn tại"]);
        }
        return view('types.update',compact('loaiSP'));
    }

    public function xuLyCapNhat(Request $request,$id){
        $loaiSP = LoaiSP::find($id);
        if(empty($loaiSP)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"không tồn tại"]);
        }
        $loaiSP->ten = $request->ten;
        $loaiSP->save();
        return redirect()-> action([LoaiSanPhamController::class, 'chiTiet'],['id'=>$loaiSP->id])->with(['capNhap'=>"Cập nhật thành công"]);
    }

    public function xoa(Request $request,$id){
        $loaiSP = LoaiSP::find($id);

        $dsSanPham = SanPham::where('loai_id',$id)->get();
        foreach($dsSanPham as $sanPham){
            ChiTietSanPham::where('san_pham_id',$sanPham -> $id);
            $sanPham->delete();
        }
        $loaiSP -> delete();
        return redirect()->action([LoaiSanPhamController::class, 'danhSach']);
    }
}
