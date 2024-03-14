<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\ChiTietSanPham;
use Illuminate\Http\Request;
use App\Models\DonHang;
use App\Models\KhachHang;
use App\Models\SanPham;

class DonHangController extends Controller
{
    public function danhSach()
    {
        $dsDonHang = DonHang::where('trang_thai', '!=', '-1')
                        ->orderBy('trang_thai')
                        ->paginate(20);
         $thangHienTai = date('m');
         $namHienTai = date('Y');
         
        $tongDonHangTrongThang = DonHang::where('trang_thai', '3')
                        ->whereMonth('ngay_dat', $thangHienTai)
                        ->whereYear('ngay_dat', $namHienTai)
                         ->count();
        return view('oders.index', compact('dsDonHang','tongDonHangTrongThang'));    }
    public function chiTiet(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $dsCTDonHang = $donHang->chi_tiet_don_hang;
        $khachHang = KhachHang::find($donHang->khach_hang_id);

        return view('oders.detail', compact('donHang', 'dsCTDonHang', 'khachHang'));
    }

    public function themMoi(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $dsSanPham = SanPham::all();
        return view('oders.add', compact('donHang', 'dsSanPham'));
    }

    public function xuLyThemMoi(Request $request, $id)
    {
        $donHang = DonHang::find($id);

        $ctDonHang = new ChiTietDonHang();

        $ctDonHang->don_hang_id = $id;
        $ctDonHang->san_pham_id = $request->san_pham;
        $ctDonHang->size_id = $request->size;
        $ctDonHang->color_id = $request->color;
        $ctDonHang->so_luong = $request->so_luong;
        $ctDonHang->gia = $request->gia;
        $ctDonHang->save();

        $donHang->tong_tien += ($ctDonHang->so_luong * $ctDonHang->gia);
        $donHang->save();
        return redirect()->action([DonHangController::class, 'chiTiet'], ['id' => $id]);
    }


    public function capNhat($id)
    {
        $donHang = DonHang::find($id);

        if (empty($donHang)) {
            return redirect()->back()->withErrors(['loiCapNhap' => "không tồn tại"]);
        }
        return view('oders.update', compact('donHang'));
    }

    public function xuLyCapNhat(Request $request, $id)
    {
        $donHang = DonHang::find($id);

        if (empty($donHang)) {
            return redirect()->back()->withErrors(['loiCapNhap' => "không tồn tại"]);
        }

        $donHang->dia_chi_nhan = $request->dia_chi;
        $donHang->save();

        return redirect()->action([DonHangController::class, 'chiTiet'], ['id' => $id])->with(['capNhap' => "Cập nhật thành công"]);
    }

    public function capNhatChiTiet($id)
    {
        $donHang = DonHang::find($id);

        if (empty($donHang)) {
            return redirect()->back()->withErrors(['loiCapNhap' => "không tồn tại"]);
        }
        return view('oders.update', compact('donHang'));
    }

    public function xuLyCapNhatChiTiet(Request $request, $id)
    {
        $ctDonHang = ChiTietDonHang::find($id);
        $donHang = DonHang::find($ctDonHang->don_hang_id);

        if (empty($ctDonHang)) {
            return redirect()->back()->withErrors(['loiCapNhap' => "không tồn tại"]);
        }

        $donHang->tong_tien -= ($ctDonHang->so_luong * $ctDonHang->gia);
        $ctDonHang->size_id = $request->size;
        $ctDonHang->color_id = $request->color;
        $ctDonHang->so_luong = $request->so_luong;
        $ctDonHang->save();

        $donHang->tong_tien += ($ctDonHang->so_luong * $ctDonHang->gia);
        $donHang->save();

        return redirect()->action([DonHangController::class, 'chiTiet'], ['id' => $ctDonHang->don_hang_id])->with(['capNhap' => "Cập nhật thành công"]);
    }

    public function xoaChiTiet(Request $request, $id)
    {
        $ctDonHang = ChiTietDonHang::find($id);
        $donHang = DonHang::find($ctDonHang->don_hang_id);

        if (empty($ctDonHang)) {
            return redirect()->back()->withErrors(['loiCapNhap' => "không tồn tại"]);
        }

        $donHang->tong_tien -= ($ctDonHang->so_luong * $ctDonHang->gia);
        $donHang->save();
        $ctDonHang->delete();

        return redirect()->action([DonHangController::class, 'chiTiet'], ['id' => $ctDonHang->don_hang_id])->with(['capNhap' => "Cập nhật thành công"]);
    }

    public function huy(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $donHang->trang_thai = -1;

        if($donHang->trang_thai != 0){
            $dsCTDonHang = $donHang->chi_tiet_don_hang;
            foreach ($dsCTDonHang as $ctDonHang) {
            $ctSanPham = ChiTietSanPHam::where('san_pham_id', $ctDonHang->san_pham_id)
                ->where('size_id', $ctDonHang->size_id)
                ->where('color_id', $ctDonHang->color_id)
                ->first();
            $ctSanPham->so_luong += $ctDonHang->so_luong;
            $ctSanPham->save();
            $sanPham = SanPham::find($ctDonHang->san_pham_id);
            $sanPham->so_luong += $ctDonHang->so_luong;
            $sanPham->save();
        }
        }
        
        $donHang->save();
        return redirect()->action([DonHangController::class, 'danhSach']);
    }

    public function xacNhan(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $dsCTDonHang = $donHang->chi_tiet_don_hang;
        foreach ($dsCTDonHang as $ctDonHang) {
            $ctSanPham = ChiTietSanPHam::where('san_pham_id', $ctDonHang->san_pham_id)
                ->where('size_id', $ctDonHang->size_id)
                ->where('color_id', $ctDonHang->color_id)
                ->first();
            $ctSanPham->so_luong -= $ctDonHang->so_luong;
            $ctSanPham->save();
            $sanPham = SanPham::find($ctDonHang->san_pham_id);
            $sanPham->so_luong -= $ctDonHang->so_luong;
            $sanPham->save();
        }
        $donHang->trang_thai = 1;
        $donHang->save();
        return redirect()->action([DonHangController::class, 'danhSach']);
    }

    public function giaoHang(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $donHang->trang_thai = 2;
        $donHang->save();
        return redirect()->action([DonHangController::class, 'danhSach']);
    }
    public function hoanThanh(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $donHang->trang_thai = 3;
        $donHang->thanh_toan = 1;
        $donHang->save();
        return redirect()->action([DonHangController::class, 'danhSach']);
    }
    public function thanhToan(Request $request, $id)
    {
        $donHang = DonHang::find($id);
        $donHang->thanh_toan = 1;
        $donHang->save();
        return redirect()->action([DonHangController::class, 'chiTiet'],['id'=>$id]);
    }

    public function danhSachTrongThang(Request $request){
        $dsDonHang = DonHang::whereMonth('ngay_dat','=',now()->month)
            ->orderBy('trang_thai')
            ->paginate(20);
        $tongDonHangTrongThang = DonHang::whereMonth('ngay_dat','=',now()->month)->count();
        return view('oders.index', compact('dsDonHang','tongDonHangTrongThang'));
    }

    public function timKiem(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!empty($keyword)) {
            $dsDonHang=DonHang::where('ma_don', 'LIKE', '%' . $keyword . '%')
                            ->paginate(20);                                  
        }
        $tongDonHangTrongThang = DonHang::whereMonth('ngay_dat','=',now()->month)->count();
        return view('oders.index', compact('dsDonHang','tongDonHangTrongThang'));
    }
}
