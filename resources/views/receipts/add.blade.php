@extends('master')
<link href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-left: -100;">
    <h1 class="h2">NHẬP HÀNG</h1>
</div>



<form action="{{ route('receipts.start-add') }}" method="POST" style="margin-left: -100;" id="myForm">
    @csrf
    <div class="col-12">     
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nha_cung_cap" class="form-label">Nhà cung cấp</label>
                        <select name="nhaCungCapSelect" class="form-select" aria-label="Default select example" id="nhaCungCapSelect">
                            <option  >Nhà cung cấp nào đây</option>
                            @foreach($dsNhaCungCap as $nhaCungCap)
                                <option value="{{ $nhaCungCap->id }}">{{ $nhaCungCap->ten }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="nguoi-nhap" class="form-label">Người nhập hàng</label>
                        <select name="nhan_vien" class="form-select" aria-label="Default select example" id="nhan_vien">
                            <option value="">Ai nhập hàng đây</option>
                            @foreach($dsNhanVien as $nhanVien)
                                <option value="{{ $nhanVien->id }}">{{ $nhanVien->ten }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="ngay-nhap" class="form-label">Ngày nhập hàng</label>
                        <input type="date" name="ngay_nhap" class="form-control" id="ngay-nhap">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-md-10">
                        <label for="loaiSP" class="form-label">Sản phẩm ID: </label><span id="id"></span>
                        <select name="sanPhamSelect" class="form-select" aria-label="Default select example" id="sanPhamSelect">
                            <option >Sản phẩm nào đây</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="ten-gia" class="form-label">Giá nhập</label>
                        <input type="number" name="gia_nhap" class="form-control" id="gia_nhap" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="ten-gia" class="form-label">Giá bán</label>
                        <input type="number" name="gia_ban" class="form-control" id="gia_ban" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="loai_sp" class="form-label">Loại sản phẩm</label>
                        <select name="loai_id" class="form-select" aria-label="Default select example" id="loai_id" disabled>
                            <option >Loại nào đây</option>
                            @foreach($dsLoaiSP as $loaiSP)
                            <option value="{{ $loaiSP->id }}">{{ $loaiSP->ten }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="khuyen_mai" class="form-label">Khuyến mãi</label>
                        <select name="khuyen_mai" class="form-select" aria-label="Default select example" id="khuyen_mai">
                            
                            @foreach($dsKhuyenMai as $khuyenMai)
                            <option value="{{ $khuyenMai->id }}">{{ $khuyenMai->ten }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="size" class="form-label">Size</label>
                        <select name="size" class="form-select" aria-label="Default select example" id="size">
                            
                            @foreach($dsSize as $size)
                                <option value="{{ $size->id }}">{{ $size->ten }}</option>
                            @endforeach  
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="color" class="form-label">Màu</label>
                        <select name="color" class="form-select" aria-label="Default select example" id="color">
                            
                            @foreach($dsColor as $color)
                                <option value="{{ $color->id }}">{{ $color->ten }}</option>
                            @endforeach  
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="so_luong" class="form-label">Số lượng nhập </label>
                        <input type="number" name="so_luong" class="form-control" id="so_luong" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <label for="thanh_tien" class="form-label">Thành tiền</label>
                        <input type="number" name="thanh_tien" class="form-control" id="thanh_tien" readonly>
                    </div>
                </div>
                    
                <div class="row pt-3">
                    <div class="col-md-10 d-flex justify-content-end" >
                        <button type="button"  class="btn btn-primary" id="btn-themSP">Thêm</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH HÀNG NHẬP</h2>
    </div>
    <div class="table-responsive" style="margin-right: 70;">
        <table class="table table-striped table-sm " id="table-them">
            <thead>
                <tr class="align-middle">
                    <th class="text-center">STT</td>   
                    <th class="text-center">ID</td>             
                    <th class="text-center">TÊN SẢN PHẨM</th>
                    <th class="text-center">GIÁ NHẬP</th>
                    <th class="text-center">GIÁ BÁN</th>
                    <th class="text-center">LOAI</th>
                    <th class="text-center">SIZE</th>
                    <th class="text-center">MÀU</th>
                    <th class="text-center">SỐ LƯỢNG NHẬP</th>
                    <th class="text-center">THÀNH TIỀN</th>                
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody class="text-center">
                
            </tbody>
            <tr class="align-middle">
                <td colspan="9" style="text-align: right; font-weight: bold; font-size: larger;">TỔNG TIỀN:</td>
                <td colspan="1" id="tong_tien" class="text-center" style="font-weight: bold; font-size: larger;"></td>
                <input type="hidden" id="tong_tien_input" name="tongTienInput" value="">
                
            </tr>
        </table>
    </div>
    <input type="hidden" name="jsonSanPhamThem" id="jsonSanPhamThem" value="">
    <div class="col-md-10 d-flex " >
        <button type="button"  class="btn btn-primary" id="btn-xac-nhan">Lưu</button>
    </div>
    
</form>

@endsection
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/nhapHang.js') }}"></script>
