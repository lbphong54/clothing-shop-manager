@extends('master')
<link href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">
@section('content')
<div style="position: absolute;left: 260px;top: 90px;"  onclick="window.location.href = '{{ route('products.detail',['id'=>$ctPhieuNhap->phieu_nhap_id]) }}';">
   
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>
      
</div>
  
<h1 style="font-size: 36px; margin-top: 50px;">CẬP NHẬT</h1>
<form method="POST" action="{{ route('receipts.start-update', ['id' => $ctPhieuNhap->id]) }}">   
        <div class="col-20">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <label for="ten" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="ten" class="form-control" id="ten" " value="{{$ctPhieuNhap->san_pham->ten}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="ten-gia" class="form-label">Giá bán sản phẩm</label>
                    <input type="text" name="gia_ban" class="form-control" id="gia_ban" value="{{$ctPhieuNhap->gia_ban}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Giá nhập</label>
                    <input type="text" name="gia_nhap" class="form-control" id="gia_nhap" value="{{$ctPhieuNhap->gia_nhap}}">
                </div>
            </div><div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Size</label>
                    <select name="size" class="form-select" aria-label="Default select example" id="size">
                        @foreach($dsSize as $size)
                        <option value="{{ $size->id }}" <?php if ($size->id === $ctPhieuNhap->size_id) echo 'selected'; ?> >{{ $ctPhieuNhap->size->ten }}</option>
                        @endforeach
                    </select>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Màu</label>
                    <select name="color" class="form-select" aria-label="Default select example" id="color">
                        @foreach($dsColor as $color)
                        <option value="{{ $color->id }}" <?php if ($color->id === $ctPhieuNhap->color_id) echo 'selected'; ?> >{{ $ctPhieuNhap->color->ten }}</option>
                        @endforeach
                    </select>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Số lượng</label>
                    <input type="text" name="so_luong" class="form-control" id="so_luong" value="{{$ctPhieuNhap->so_luong}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="gia-nhap" class="form-label">Thành tiền</label>
                    <input type="text" name="thanh_tien" class="form-control" id="thanh_tien" value="{{$ctPhieuNhap->thanh_tien}}" readonly>
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
<script src="{{ asset('js/tinhTienNHapHang.js') }}"></script>