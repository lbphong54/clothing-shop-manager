@extends('master')
<link href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">
@section('content')
<div style="position: absolute; left: 260px; top: 90px;" onclick="window.location.href = '{{ route('products.index') }}';">
   
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
      <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
    
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">THÊM MỚI SẢN PHẨM</h1>
</div>

<form class="row g-3" method="POST" action="{{ route('products.start-add') }}">
    <div class="col-12">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label for="ten" class="form-label">Tên sản phẩm</label>
                <input type="text" name="ten" class="form-control" id="ten" ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="gia_ban" class="form-label">Giá bán sản phẩm</label>
                <input type="text" name="gia_ban" class="form-control" id="gia_ban" ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="gia_nhap" class="form-label">Giá nhập sản phẩm</label>
                <input type="text" name="gia_nhap" class="form-control" id="gia_nhap" ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="loaiSP" class="form-label">Loại sản phẩm</label>
                <select name="loai_id" class="form-select" aria-label="Default select example" id="loai_id">
                    <option selected>Chọn loại sản phẩm</option>
                    @foreach($dsLoaiSP as $loaiSP)
                    <option value="{{ $loaiSP->id }}">{{ $loaiSP->ten }}</option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="nha_cung_cap_id" class="form-label">Nhà cung cấp</label>
                <select name="nha_cung_cap_id" class="form-select" aria-label="Default select example" id="nhaCungCap">
                    <option selected>Chọn nhà cung cấp</option>
                    @foreach($dsNhaCungCap as $nhaCungCap)
                    <option value="{{ $nhaCungCap->id }}">{{ $nhaCungCap->ten }}</option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="khuyen_mai_id" class="form-label">Khuyến mãi</label>
                <select name="khuyen_mai_id" class="form-select" aria-label="Default select example" id="khuyen_mai_id">
                    <option selected value="0">Chọn khuyến mãi</option>
                    @foreach($dsKhuyenMai as $khuyenMai)
                    <option value="{{ $khuyenMai->id }}">{{ $khuyenMai->ten }}</option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label for="mo_ta" class="form-label">Mô tả sản phẩm</label>
                <input type="text" name="mo_ta" class="form-control" id="mo_ta" ">
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