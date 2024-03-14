@extends('master')
<link href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">
@section('content')
<div style="position: absolute;left: 260px;top: 90px;"  onclick="window.location.href = '{{ route('products.detail',['id'=>$sanPham->id]) }}';">
   
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>
      
</div>
  
<h1 style="font-size: 36px; margin-top: 50px;">CẬP NHẬT</h1>
<form method="POST" action="{{ route('products.start-update', ['id' => $sanPham->id]) }}">   
        <div class="col-20">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <label for="ten" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="ten" class="form-control" id="ten" " value="{{$sanPham->ten}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="ten-gia" class="form-label">Giá bán sản phẩm</label>
                    <input type="text" name="gia_ban" class="form-control" id="gia_ban" value="{{$sanPham->gia_ban}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Giá nhập sản phẩm</label>
                    <input type="text" name="gia_nhap" class="form-control" id="gia-nhap" value="{{$sanPham->gia_nhap}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="loaiSP" class="form-label">Loại sản phẩm</label>
                    <select name="loai_id" class="form-select" aria-label="Default select example" id="loai_id" >          
                        @foreach($dsLoaiSP as $loaiSP)
                        <option value="{{ $loaiSP->id }}" <?php if ($loaiSP->id === $sanPham->loai_id) echo 'selected'; ?>>{{ $loaiSP->ten }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="nhaCungCap" class="form-label">Nhà cung cấp</label>
                    <select name="nhaCungCap" class="form-select" aria-label="Default select example" id="nhaCungCap" >          
                        @foreach($dsNhaCungCap as $nhaCungCap)
                        <option value="{{ $nhaCungCap->id }}" <?php if ($nhaCungCap->id === $sanPham->nha_cung_cap_id) echo 'selected'; ?>>{{ $nhaCungCap->ten }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="khuyen_mai_id" class="form-label">Khuyến mãi</label>
                    <select name="khuyen_mai_id" class="form-select" aria-label="Default select example" id="khuyen_mai_id" >          
                        @foreach($dsKhuyenMai as $khuyenMai)
                        <option value="{{ $khuyenMai->id }}" <?php if ($khuyenMai->id === $sanPham->khuyen_mai_id ) echo 'selected'; ?>>{{ $khuyenMai->ten }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="mo_ta" class="form-label">Mô tả sản phẩm</label>
                    <input type="text" name="mo_ta" class="form-control" id="mo_ta" value="{{$sanPham->mo_ta}}"">
                </div>
            </div>
                
            <div class="row pt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
@endsection