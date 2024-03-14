<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\AnhSanPham;

class AnhSanPhamController extends Controller
{
    
    public function themMoi(Request $request,$id){    
       
        $images = $request->file('images');
        if($images == null){
            return redirect()->back()->withErrors(['loiUpAnh'=>"Có ảnh đâu mà up"]);
        }
        foreach ($images as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('anh/anhSP', $imageName);

            $anhSanPham = new AnhSanPham();
            $anhSanPham->san_pham_id = $id;
            $anhSanPham->duong_dan = $imagePath;
            $anhSanPham->ten = $imageName;
            $anhSanPham->save();
        }
        return redirect()->back()->with(['upAnh'=>"Upload ảnh thành công "]);
    }

    public function xoa($id,)
    {
        $anhSP = AnhSanPham::find($id);
        $anhSP->delete();
        return redirect()->back();
    }
    
}
