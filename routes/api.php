<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APILoaiSanPhamController;
use App\Http\Controllers\APISanPhamController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/san-pham-theo-loai/{id}',[APILoaiSanPhamController::class,'sanPhamTheoLoai']);
Route::get('/loai-san-pham',[APILoaiSanPhamController::class,'dsLoaiSP']);

Route::get('/san-pham-theo-nha-cung-cap/{id}',[APISanPhamController::class,'sanPhamTheoNhaCungCap']);
Route::get('/thong-tin-san-pham/{id}',[APISanPhamController::class,'thongTinSanPham']);
Route::get('/danh-sach-san-pham',[APISanPhamController::class,'dsSanPham']);
Route::get('/chi-tiet-san-pham/{id}',[APISanPhamController::class,'chiTietSanPham']);
