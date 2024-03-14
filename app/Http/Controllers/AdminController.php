<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function danhSach()
    {
        // Lay toan bo danh sach sinh vien
        $dsAdmin = Admin::all();
        return view("admin.index",compact('dsAdmin'));
    }
    
    public function themMoi(){

        return view('admin.add');
    }

    public function xuLyThemMoi(Request $request){
        
        $Admin = new Admin();
        $Admin->ten_dang_nhap = $request->ten;   
        $Admin->password = Hash::make($request->password);       
        $Admin->save();
        return redirect()->action([AdminController::class, 'danhSach'])->with(['themMoi'=>"Thêm mới thành công"]);
    }

    public function xoa(Request $request,$id){
        $Admin = Admin::find($id);

        $Admin -> delete();
        return redirect()->action([AdminController::class, 'danhSach']);
    }
}
