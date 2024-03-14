<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnhSanPhamController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\PhieuNhapController;
use App\Models\DonHang;
use App\Models\KhachHang;
use PgSql\Lob;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});





Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        $thangHienTai = date('m');
        $namHienTai = date('Y');
        $doanhThu = DonHang::where('trang_thai', '3')
                        ->whereMonth('created_at', $thangHienTai)
                        ->whereYear('created_at', $namHienTai)
                        ->sum('tong_tien');
        $thanhVienMoi = KhachHang::whereYear('created_at', $namHienTai)
                        ->whereMonth('created_at', $thangHienTai)
                        ->count();
        $tongDonHang = DonHang::where('trang_thai', '3')
                        ->whereMonth('ngay_dat', $thangHienTai)
                        ->whereYear('ngay_dat', $namHienTai)
                        ->count();
        $dsDonHang = DonHang::where('trang_thai', '0')
                        ->orderBy('ngay_dat')
                        ->paginate(20);

        return view('home',compact('doanhThu','thanhVienMoi','tongDonHang','dsDonHang'));
    })->name('home');
    
    Route::prefix('/customers')->name('customers.')->group(function () {
        Route::get('/index', [KhachHangController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/detail/{id}', [KhachHangController::class, 'chiTiet'])
            ->name('detail');
    });
    
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/index', [AdminController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/add', [AdminController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [AdminController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/delete/{id}', [AdminController::class, 'xoa'])
            ->name('delete');
    });
    
    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/index', [SanPhamController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/detail/{id}', [SanPhamController::class, 'chiTiet'])
            ->name('detail');
    
        Route::get('/add', [SanPhamController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [SanPhamController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/update/{id}', [SanPhamController::class, 'capNhat'])
            ->name('update');
    
        Route::post('/start-update/{id}', [SanPhamController::class, 'xuLyCapNhat'])
            ->name('start-update');
    
        Route::get('/delete/{id}', [SanPhamController::class, 'xoa'])
            ->name('delete');
    
        Route::get('/index/seach', [SanPhamController::class, 'timKiem'])
            ->name('search');
    
        Route::get('/index/stock', [SanPhamController::class, 'sanPhamCon'])
            ->name('index-stock');
    
        Route::get('/index/sold-out', [SanPhamController::class, 'sanPhamHet'])
            ->name('index-sold-out');
    });
    
    Route::prefix('/receipts')->name('receipts.')->group(function () {
        Route::get('/index', [PhieuNhapController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/detail/{id}', [PhieuNhapController::class, 'chiTiet'])
            ->name('detail');
    
        Route::get('/add', [PhieuNhapController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [PhieuNhapController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/add-detail/{id}', [PhieuNhapController::class, 'themMoiChiTiet'])
            ->name('add-detail');
    
        Route::post('/start-add-detail/{id}', [PhieuNhapController::class, 'xuLyThemMoiChiTiet'])
            ->name('start-add-detail');
    
        Route::get('/update/{id}', [PhieuNhapController::class, 'capNhat'])
            ->name('update');
    
        Route::post('/start-update/{id}', [PhieuNhapController::class, 'xuLyCapNhat'])
            ->name('start-update');
    
        Route::get('/delete/{id}', [PhieuNhapController::class, 'xoa'])
            ->name('delete');
    
        Route::get('/delete-detail/{id}', [PhieuNhapController::class, 'xoaChiTiet'])
            ->name('delete-detail');
    
        Route::get('/get-CTPN/{id}', [PhieuNhapController::class, 'layChiTietPhieuNhap']);
    });
    
    Route::prefix('/suppliers')->name('suppliers.')->group(function () {
        Route::get('/index', [NhaCungCapController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/detail/{id}', [NhaCungCapController::class, 'chiTiet'])
            ->name('detail');
    
        Route::get('/add', [NhaCungCapController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [NhaCungCapController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/update/{id}', [NhaCungCapController::class, 'capNhat'])
            ->name('update');
    
        Route::post('/start-update/{id}', [NhaCungCapController::class, 'xuLyCapNhat'])
            ->name('start-update');
        Route::get('/delete/{id}', [NhaCungCapController::class, 'xoa'])
            ->name('delete');
    });
    
    Route::prefix('/types')->name('types.')->group(function () {
        Route::get('/index', [LoaiSanPhamController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/detail/{id}', [LoaiSanPhamController::class, 'chiTiet'])
            ->name('detail');
    
        Route::get('/add', [LoaiSanPhamController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [LoaiSanPhamController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/update/{id}', [LoaiSanPhamController::class, 'capNhat'])
            ->name('update');
    
        Route::post('/start-update/{id}', [LoaiSanPhamController::class, 'xuLyCapNhat'])
            ->name('start-update');
        Route::get('/delete/{id}', [LoaiSanPhamController::class, 'xoa'])
            ->name('delete');
    });
    
    Route::prefix('/oders')->name('oders.')->group(function () {
        Route::get('/index', [DonHangController::class, 'danhSach'])
            ->name('index');
    
        Route::get('/index-month', [DonHangController::class, 'danhSachTrongThang'])
            ->name('index-month');
    
        Route::get('/detail/{id}', [DonHangController::class, 'chiTiet'])
            ->name('detail');
    
        Route::get('/add', [DonHangController::class, 'themMoi'])
            ->name('add');
    
        Route::post('/start-add', [DonHangController::class, 'xuLyThemMoi'])
            ->name('start-add');
    
        Route::get('/update/{id}', [DonHangController::class, 'capNhat'])
            ->name('update');
    
        Route::post('/update/{id}', [DonHangController::class, 'xuLyCapNhat'])
            ->name('start-update');
    
        Route::get('/update/{id}', [DonHangController::class, 'capNhatChiTiet'])
            ->name('update');
    
        Route::post('/start-update-detail/{id}', [DonHangController::class, 'xuLyCapNhatChiTiet'])
            ->name('start-update-detail');
    
        Route::get('/delete-detail/{id}', [DonHangController::class, 'xoaChiTiet'])
            ->name('delete-detail');
    
        Route::get('/confirm/{id}', [DonHangController::class, 'xacNhan'])
            ->name('confirm');
    
        Route::get('/confirm-delivery/{id}', [DonHangController::class, 'giaoHang'])
            ->name('confirm-delivery');

        Route::get('/confirm-success/{id}', [DonHangController::class, 'hoanThanh'])
            ->name('confirm-success');
    
        Route::get('/cancel/{id}', [DonHangController::class, 'huy'])
            ->name('cancel');
    
        Route::get('/pay/{id}', [DonHangController::class, 'thanhToan'])
            ->name('pay');
    
        Route::get('/index/seach', [DonHangController::class, 'timKiem'])
            ->name('search');
    });

    Route::prefix('/image')->name('image.')->group(function () {
    
        Route::post('/start-add/{id}', [AnhSanPhamController::class, 'themMoi'])
            ->name('up');

        Route::get('/delete/{id}', [AnhSanPhamController::class, 'xoa'])
            ->name('delete');
    });
});

