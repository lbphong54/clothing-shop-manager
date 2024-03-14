<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\ChiTietSanPham;
use App\Models\LoaiSP;
use App\Models\NhaCungCap;
use App\Models\KhuyenMai;

class SanPhamController extends Controller
{
    public function danhSach(){
        $dsSanPham = SanPham::paginate(20);
        $tongSanPham = SanPham::count();
        $conHang = SanPham::where('trang_thai', 1)->count();
        $hetHang = SanPham::where('trang_thai', 2)->count();
        return view('products.index',compact('tongSanPham','conHang','hetHang','dsSanPham'));
    }
    public function chiTiet(Request $request,$id){

        $sanPham = SanPham::find($id);
        $dsChiTietSP = ChiTietSanPham::where('san_pham_id',$id)
                                    ->orderBy('size_id')
                                    ->get();
        $tongSoLuong = $dsChiTietSP->sum('so_luong');
        $dsAnhSanPham = $sanPham->anh_san_pham;
        return view('products.detail',compact('sanPham','dsChiTietSP','tongSoLuong','dsAnhSanPham'));
    }

    public function themMoi(){
        $dsLoaiSP = LoaiSP::all();
        $dsNhaCungCap = NhaCungCap::all();
        $dsKhuyenMai = KhuyenMai::all();
        return view('products.add',compact('dsLoaiSP','dsNhaCungCap','dsKhuyenMai'));
    }

    public function xuLyThemMoi(Request $request){
        
        $sanPham = new SanPham();
        $sanPham->ten = $request->ten;
        $sanPham->gia_nhap = $request->gia_nhap;
        $sanPham->gia_ban = $request->gia_ban;
        $sanPham->khuyen_mai_id = $request->khuyen_mai_id;
        $sanPham->loai_id = $request->loai_id;
        $sanPham->nha_cung_cap_id = $request->nha_cung_cap_id;
        $sanPham->trang_thai = 0;
        $sanPham->mo_ta = $request->mo_ta;         
        $sanPham->save();
        return redirect()->action([SanPhamController::class, 'danhSach'])->with(['themMoi'=>"Thêm mới thành công"]);
    }


    public function capNhat($id){
        $sanPham = SanPham::find($id);
        $dsLoaiSP = LoaiSP::all();
        $dsNhaCungCap = NhaCungCap::all();
        $dsKhuyenMai = KhuyenMai::all();
        
        if(empty($sanPham)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"Sản phẩm không tồn tại"]);
        }
        return view('products.update',compact('sanPham', 'dsLoaiSP','dsNhaCungCap','dsKhuyenMai'));
    }

    public function xuLyCapNhat(Request $request,$id){
        $sanPham = SanPham::find($id);
        if(empty($sanPham)){
            return redirect()->back()->withErrors(['loiCapNhap'=>"Sản phẩm không tồn tại"]);
        }
        $sanPham->ten = $request->ten;
        $sanPham->gia_nhap = $request->gia_ban;
        $sanPham->gia_ban = $request->gia_nhap;
        $sanPham->khuyen_mai_id = $request->khuyen_mai_id;
        $sanPham->loai_id = $request->loai_id;
        $sanPham->so_luong = $sanPham->so_luong;
        $sanPham->nha_cung_cap_id = $request->nhaCungCap;
        $sanPham->mo_ta = $request->mo_ta;    
        $sanPham->save();
        return redirect()-> action([SanPhamController::class, 'chiTiet'],['id'=>$sanPham->id])->with(['capNhap'=>"Cập nhật sản phẩm thành công"]);
    }

    public function xoa(Request $request,$id){

        $sanPham = SanPham::find($id);  
        ChiTietSanPham::where('san_pham_id', $sanPham->id)->delete();  //Xóa chi tiết sản phẩm liên quan         
        $sanPham -> delete();
        return redirect()->action([SanPhamController::class, 'danhSach']);
    }   

    public function timKiem(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!empty($keyword)) {
            $dsSanPham=SanPham::where('ten', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('id', $keyword)
                            ->paginate(20);                                  
        }
        $tongSanPham = SanPham::count();
        $conHang = SanPham::where('trang_thai', 1)->count();
        $hetHang = SanPham::where('trang_thai', 2)->count();
        return view('products.index',compact('tongSanPham','conHang','hetHang','dsSanPham'));
    }

    public function sanPhamCon(Request $request)
    {       
        $dsSanPham=SanPham::where('trang_thai', 1)
                            ->paginate(20);                                  
        $tongSanPham = SanPham::count();
        $conHang = SanPham::where('trang_thai', 1)->count();
        $hetHang = SanPham::where('trang_thai', 2)->count();
        return view('products.index',compact('tongSanPham','conHang','hetHang','dsSanPham'));
    }

    public function sanPhamHet(Request $request)
    {       
        $dsSanPham=SanPham::where('trang_thai', 2)
                            ->paginate(20);                                  
        $tongSanPham = SanPham::count();
        $conHang = SanPham::where('trang_thai', 1)->count();
        $hetHang = SanPham::where('trang_thai', 2)->count();
        return view('products.index',compact('tongSanPham','conHang','hetHang','dsSanPham'));
    }
}
