<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use App\Models\NhaCungCap;
use App\Models\SanPham;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    public function danhSach(){
        $dsNhaCungCap = NhaCungCap::all();
        
        return view('suppliers.index',compact('dsNhaCungCap')); 
    }
    public function chiTiet(Request $request,$id){

        $nhaCungCap = NhaCungCap::find($id);
        $dsSanPham = SanPham::where('nha_cung_cap_id',$id)->paginate(20);
        return view('suppliers.detail',compact('nhaCungCap','dsSanPham'));
    }

    public function themMoi(){

        return view('suppliers.add');
    }

    public function xuLyThemMoi(Request $request){
        
        $nhaCungCap = new NhaCungCap();
        $nhaCungCap->ten = $request->ten;      
        
        $nhaCungCap->save();
        return redirect()->action([NhaCungCapController::class, 'danhSach'])->with(['themMoi'=>"Thêm mới thành công"]);
    }


    public function capNhat($id){
        $nhaCungCap = NhaCungCap::find($id);
        
        if(empty($nhaCungCap)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"không tồn tại"]);
        }
        return view('suppliers.update',compact('nhaCungCap'));
    }

    public function xuLyCapNhat(Request $request,$id){
        $nhaCungCap = NhaCungCap::find($id);
        if(empty($nhaCungCap)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"không tồn tại"]);
        }
        $nhaCungCap->ten = $request->ten;
        $nhaCungCap->save();
        return redirect()-> action([NhaCungCapController::class, 'chiTiet'],['id'=>$nhaCungCap->id])->with(['capNhap'=>"Cập nhật thành công"]);
    }

    public function xoa(Request $request,$id){
        $nhaCungCap = NhaCungCap::find($id);

        $dsSanPham = SanPham::where('loai_id',$id)->get();
        foreach($dsSanPham as $sanPham){
            ChiTietSanPham::where('san_pham_id',$sanPham -> $id);
            $sanPham->delete();
        }
        $nhaCungCap -> delete();
        return redirect()->action([NhaCungCapController::class, 'danhSach']);
    }
}
