<?php

namespace App\Http\Controllers;

use App\Models\ChiTietPhieuNhap;
use Illuminate\Http\Request;
use App\Models\PhieuNhap;
use App\Models\SanPham;
use App\Models\ChiTietSanPham;
use App\Models\Color;
use App\Models\KhuyenMai;
use App\Models\LoaiSP;
use App\Models\NhaCungCap;
use App\Models\NhanVien;
use App\Models\Size;

class PhieuNhapController extends Controller
{
    public function danhSach(){
        
        $dsPhieuNhap = PhieuNhap::orderBy('created_at', 'desc')->paginate(15);
        
        return view('receipts.index',compact('dsPhieuNhap'));
    }

    public function themMoi(){
        $dsSanPham = SanPham::all();
        $dsLoaiSP = LoaiSP::all();
        $dsNhaCungCap = NhaCungCap::all();
        $dsNhanVien = NhanVien::all();
        $dsKhuyenMai = KhuyenMai::all();
        $dsSize = Size::all();
        $dsColor = Color::all();

        return view('receipts.add',compact('dsSanPham','dsLoaiSP','dsNhaCungCap','dsNhanVien','dsKhuyenMai','dsSize','dsColor'));
    }

    public function xuLyThemMoi(Request $request)  {
        
        $dsSanPhamThem = $request->input('jsonSanPhamThem');
        $dsSanPhamThem = json_decode($dsSanPhamThem, true);
        
        $id = $request->nhaCungCapSelect;
        
        $nguoiNhap = $request->nhan_vien;
        
        $ngayNhap = $request->ngay_nhap;
        $tongTien = $request->tongTienInput;
        
        $nhaCungCap = NhaCungCap::find($id);      

        $phieuNhap = new PhieuNhap;
        $phieuNhap->nha_cung_cap_id = $nhaCungCap->id;
        $phieuNhap->nhan_vien_id = $nguoiNhap;
        $phieuNhap->ngay_nhap = $ngayNhap;
        $phieuNhap->tong_tien = $tongTien;
        
        $phieuNhap->ghi_chu = "";
        $phieuNhap->save();

        foreach ($dsSanPhamThem as $sanPhamThem) {
            // dd($sanPhamThem);
            $chiTietPhieuNhap  = new ChiTietPhieuNhap();
            $chiTietPhieuNhap->phieu_nhap_id = $phieuNhap->id;
            $chiTietPhieuNhap->san_pham_id = $sanPhamThem['san_pham_id'];
            $chiTietPhieuNhap->gia_nhap = $sanPhamThem['gia_nhap'];
            $chiTietPhieuNhap->gia_ban = $sanPhamThem['gia_ban'];
            $chiTietPhieuNhap->so_luong = $sanPhamThem['so_luong'];
            $chiTietPhieuNhap->size_id = $sanPhamThem['size_id'];
            $chiTietPhieuNhap->color_id = $sanPhamThem['color_id'];
            $chiTietPhieuNhap->thanh_tien = $sanPhamThem['thanh_tien'];
            $chiTietPhieuNhap ->save();

            $chiTietSanPhamThem = ChiTietSanPHam::where('san_pham_id',$sanPhamThem['san_pham_id'])
                                                ->where('size_id',$sanPhamThem['size_id'])
                                                ->where('color_id',$sanPhamThem['color_id'])
                                                ->first();
            if($chiTietSanPhamThem){
                $chiTietSanPhamThem->so_luong += $sanPhamThem['so_luong'];
                $chiTietSanPhamThem->save();
            }                                   
            else{
                $themChiTietSanPham = new ChiTietSanPham();
                $themChiTietSanPham->san_pham_id = $sanPhamThem['san_pham_id'];
                $themChiTietSanPham->size_id = $sanPhamThem['size_id'];
                $themChiTietSanPham->color_id = $sanPhamThem['color_id'];
                $themChiTietSanPham->so_luong = $sanPhamThem['so_luong'];
                $themChiTietSanPham->save();
            }                                    
            $sanPham = SanPham::find($sanPhamThem['san_pham_id']);
            $sanPham->gia_nhap = $sanPhamThem['gia_nhap'];
            $sanPham->gia_ban = $sanPhamThem['gia_ban'];
            $sanPham->so_luong += $sanPhamThem['so_luong'];
            $sanPham->trang_thai = 1;
            $sanPham->save();
            
        };

        return redirect()->action([PhieuNhapController::class, 'danhSach']);
    }

    public function chiTiet(Request $request,$id){
        $phieuNhap = PhieuNhap::find($id);
        $dsCTPhieuNhap = ChiTietPhieuNhap::where('phieu_nhap_id',$id)->get();
        
        return view('receipts.detail',compact('dsCTPhieuNhap','phieuNhap'));
    }

    public function themMoiChiTiet(Request $request,$id){

        $phieuNhap = PhieuNhap::find($id);       
        $dsSanPham = SanPham::where('nha_cung_cap_id',$phieuNhap->nha_cung_cap_id)->get();
        $dsSize = Size::all();
        $dsColor = Color::all();
        $dsLoaiSP = LoaiSP::all();

        return view('receipts.add-detail',compact('dsSanPham','phieuNhap','dsSize','dsColor','dsLoaiSP'));
    }

    public function xuLyThemMoiChitiet(Request $request,$id)  {
        
        $dsSanPhamThem = $request->input('jsonSanPhamThem');
        $dsSanPhamThem = json_decode($dsSanPhamThem, true);

        $phieuNhap = PhieuNhap::find($id);  

        foreach ($dsSanPhamThem as $sanPhamThem) {
            // dd($sanPhamThem);
            $chiTietPhieuNhap  = new ChiTietPhieuNhap();
            $chiTietPhieuNhap->phieu_nhap_id = $phieuNhap->id;
            $chiTietPhieuNhap->san_pham_id = $sanPhamThem['san_pham_id'];
            $chiTietPhieuNhap->gia_nhap = $sanPhamThem['gia_nhap'];
            $chiTietPhieuNhap->gia_ban = $sanPhamThem['gia_ban'];
            $chiTietPhieuNhap->so_luong = $sanPhamThem['so_luong'];
            $chiTietPhieuNhap->size_id = $sanPhamThem['size_id'];
            $chiTietPhieuNhap->color_id = $sanPhamThem['color_id'];
            $chiTietPhieuNhap->thanh_tien = $sanPhamThem['thanh_tien'];
            $chiTietPhieuNhap ->save();

            $chiTietSanPhamThem = ChiTietSanPHam::where('san_pham_id',$sanPhamThem['san_pham_id'])
                                                ->where('size_id',$sanPhamThem['size_id'])
                                                ->where('color_id',$sanPhamThem['size_id'])
                                                ->first();
            if($chiTietSanPhamThem){
                $chiTietSanPhamThem->so_luong += $sanPhamThem['so_luong'];
                $chiTietSanPhamThem->save();
            }                                   
            else{
                $themChiTietSanPham = new ChiTietSanPham();
                $themChiTietSanPham->san_pham_id = $sanPhamThem['san_pham_id'];
                $themChiTietSanPham->size_id = $sanPhamThem['size_id'];
                $themChiTietSanPham->color_id = $sanPhamThem['color_id'];
                $themChiTietSanPham->so_luong = $sanPhamThem['so_luong'];
                $themChiTietSanPham->save(); 
            }
                                       
            //Cập nhật sản phẩm
            $sanPham = SanPham::find($sanPhamThem['san_pham_id']);
            $sanPham->gia_nhap = $sanPhamThem['gia_nhap'];
            $sanPham->gia_ban = $sanPhamThem['gia_ban'];
            $sanPham->so_luong += $sanPhamThem['so_luong'];
            $sanPham->save();
            //Cập nhật phiếu nhập   
            $phieuNhap->tong_tien += $sanPhamThem['thanh_tien'];  
            $phieuNhap->save();
            
        };

        return redirect()->action([PhieuNhapController::class, 'chiTiet'],['id'=>$id]);
    }

    public function capNhat(Request $request,$id){     
        $ctPhieuNhap = ChiTietPhieuNhap::find($id);
        $dsSize = Size::all();
        $dsColor = Color::all();
        return view('receipts.update',compact('ctPhieuNhap','dsSize','dsColor'));
    }

    public function xuLyCapNhat(Request $request,$id){     

        $ctPhieuNhap = ChiTietPhieuNhap::find($id);
        $phieuNhap = PhieuNhap::find($ctPhieuNhap -> phieu_nhap_id);

        if( $ctPhieuNhap->size_id != $request -> size || $ctPhieuNhap->color_id != $request -> color ){
            
            
            $dsCTPhieuNhap = $phieuNhap -> chi_tiet_phieu_nhap;
            foreach ($dsCTPhieuNhap as $chiTietPhieuNhap){
                if($ctPhieuNhap->size_id == $chiTietPhieuNhap -> size_id && $ctPhieuNhap->color_id == $chiTietPhieuNhap -> color_id){
                    $request->session()->put('success_message', 'Sản phẩm này đã có trong danh sách');
                    return redirect()->back();
                }
            }           
        } 

        $chiTietSanPham = ChiTietSanPHam::where('san_pham_id',$ctPhieuNhap->san_pham_id)
                                                ->where('size_id',$ctPhieuNhap->size_id)
                                                ->where('color_id', $ctPhieuNhap->color_id)
                                                ->first();
            if($chiTietSanPham){
                $chiTietSanPham->so_luong += $request -> so_luong;
                $chiTietSanPham->so_luong -= $ctPhieuNhap -> so_luong;
            }                                   
            else{
                $themChiTietSanPham = new ChiTietSanPham();
                $themChiTietSanPham->san_pham_id = $ctPhieuNhap->san_pham_id;
                $themChiTietSanPham->size_id = $ctPhieuNhap->size_id;
                $themChiTietSanPham->color_id = $ctPhieuNhap->color_id;
                $themChiTietSanPham->so_luong = $ctPhieuNhap->so_luong;
            }   
            $chiTietSanPham->save();                           
            //Cập nhật sản phẩm
            $sanPham = SanPham::find($ctPhieuNhap->san_pham_id);
            $sanPham->gia_nhap = $ctPhieuNhap->gia_nhap;
            $sanPham->gia_ban = $ctPhieuNhap->gia_ban;
            $sanPham->so_luong += $ctPhieuNhap->so_luong;
            $sanPham->so_luong -= $ctPhieuNhap -> so_luong;
            $sanPham->save();

            //Cập nhật phiếu nhập   
            $phieuNhap->tong_tien += $request->thanh_tien;  
            $phieuNhap->tong_tien -= $ctPhieuNhap->thanh_tien; 
            $phieuNhap->save();

            $ctPhieuNhap->gia_nhap = $request -> gia_nhap;
            $ctPhieuNhap->gia_ban = $request -> gia_ban;
            $ctPhieuNhap->size_id = $request -> size;
            $ctPhieuNhap->color_id = $request -> color;
            $ctPhieuNhap->so_luong = $request -> so_luong;
            $ctPhieuNhap->thanh_tien = $request -> thanh_tien;
            $ctPhieuNhap-> save();

        return redirect()->action([PhieuNhapController::class, 'chiTiet'],['id'=>$phieuNhap->id]);
    }

    public function xoa(Request $request,$id){
        $phieuNhap = PhieuNhap::find($id);
        $dsCTPhieuNhap = $phieuNhap -> chi_tiet_phieu_nhap;

        foreach($dsCTPhieuNhap as $ctPhieuNhap){
            $sanPham = SanPham::find($ctPhieuNhap->san_pham_id);
            $dsCTSanPham = $sanPham -> chi_tiet_san_pham;           
            foreach($dsCTSanPham as $ctSanPham){
                if($ctSanPham->size_id == $ctPhieuNhap->size_id && $ctSanPham->color_id == $ctPhieuNhap->color_id ){
                    $ctSanPham -> so_luong -= $ctPhieuNhap -> so_luong ;
                    $sanPham->so_luong -= $ctPhieuNhap->so_luong;
                    $ctSanPham->save();
                }
            }
            if($sanPham->so_luong == 0){
                $sanPham->trang_thai = 2; //sản phẩm hết
            }
            $sanPham->save();
            $ctPhieuNhap->delete();
        }
        $phieuNhap->delete();
        return redirect()->action([PhieuNhapController::class, 'danhSach']);
    }

    public function xoaChiTIet(Request $request,$id){
        $ctPhieuNhap = ChiTietPhieuNhap::find($id);
        $sanPham = SanPham::find($ctPhieuNhap->san_pham_id);
        $sanPham->so_luong -= $ctPhieuNhap->so_luong;
        if($sanPham->so_luong == 0){
            $sanPham->trang_thai = 2; //sản phẩm hết
        }
        $ctSanPham = ChiTietSanPham::where('san_pham_id',$ctPhieuNhap->san_pham_id)
                                    ->where('size_id',$ctPhieuNhap->size_id)
                                    ->where('color_id',$ctPhieuNhap->color_id)
                                    ->first();
                                    //dd($ctPhieuNhap);
        $ctSanPham->so_luong -= $ctPhieuNhap->so_luong;
        $phieuNhap = PhieuNhap::find($ctPhieuNhap->phieu_nhap_id);
        $phieuNhap->tong_tien -= $ctPhieuNhap->thanh_tien;
        $ctPhieuNhap->delete();
        $sanPham->save();
        $ctSanPham->save();
         $phieuNhap->save();
        $slPhieuNhap = ChiTietPhieuNhap::where('phieu_nhap_id',$phieuNhap->id)->count();
        if($slPhieuNhap == 0){
            //phiếu nhập không có gì
            $phieuNhap->delete();
            return redirect()->action([PhieuNhapController::class, 'danhSach']);
        }

        return redirect()->action([PhieuNhapController::class, 'chiTiet'],['id'=>$ctPhieuNhap->phieu_nhap_id]);
    }

    public function layChiTietPhieuNhap(Request $request, $id){
    
    $dsCTPhieuNhap = ChiTietPhieuNhap::where('phieu_nhap_id', $id)->get();

    return response()->json([
        'dsCTPhieuNhap' => $dsCTPhieuNhap
    ]);
    }
}
 