<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;
use App\Models\DonHang;
use Illuminate\Support\Facades\View;

class KhachHangController extends Controller
{
    public function danhSach(){
        $dsKhachHangAll = KhachHang::all();
        $dsKhachHang = KhachHang::paginate(10);
        return view('customers/index',compact('dsKhachHang','dsKhachHangAll')); 
    }

    public function chiTiet(Request $request,$id){

        $khachHang = KhachHang::find($id);
        $dsDonHang = DonHang::where('khach_hang_id',$id)->paginate(10);
        $tongTienMua = DonHang::where('trang_thai', 3)->sum('tong_tien');
        $donHoanThanh = DonHang::where('trang_thai', 3)->count();
        $donHangHuy = DonHang::where('trang_thai', -1)->count();
        return view('customers.detail',compact('khachHang','dsDonHang','donHoanThanh','donHangHuy','tongTienMua'));
    }
}
