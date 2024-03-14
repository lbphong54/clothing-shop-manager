@extends('master')

@section('content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        
      </h2>
      
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" >
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
              </svg>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Doanh thu trong tháng
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $doanhThu }}
              </p>
            </div>
          </div>
          <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" >
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
              </svg>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Thành viên mới trong tháng
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $thanhVienMoi }}
              </p>
            </div>
          </div>
          <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" >
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
              </svg>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Tổng đơn hàng trong tháng
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $tongDonHang }}
              </p>
            </div>
          </div>
        
        
      </div>
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Đơn hàng chờ xác nhận      
      </h2>
      <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Đơn hàng</th>
                <th class="px-4 py-3">Ngày</th>
                <th class="px-4 py-3">Tình trạng thanh toán</th>
                <th class="px-4 py-3">Tình trạng vận chuyển</th>
                <th class="px-4 py-3">Tổng</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              @foreach ($dsDonHang as $donHang)
              <tr class="text-center text-gray-700 dark:text-gray-400" onclick="window.location.href = '{{ route('oders.detail',['id'=>$donHang->id]) }}';">
                  <td class="px-4 py-3 text-sm">
                    {{$donHang->ma_don}}
                  </td>
                  <td class="px-4 py-3">  
                      {{$donHang->ngay_dat}}          
                      
                  </td>
                  <td class="px-4 py-3 text-sm">
                      <span class="text-md  px-2 py-1 font-semibold{{ $donHang->thanh_toan == 1 ? 'leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100' : 'leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100' }}">
                          {{ $donHang->thanh_toan == 1 ? 'Paid' : 'Unpaid' }}
                      </span>
                  </td>
                  
                  <td class="px-4 py-3 text-sm"> 
                    
                      @if($donHang->trang_thai == 0 )
                      {{-- //Chờ xác nhận --}}
                        <span class="px-2 py-1 font-semibold leading-tight text-orange-500 bg-orange-100 rounded-full dark:bg-orange-500 dark:text-orange-100">
                            Wait 
                        </span>
                        
                      @elseif($donHang->trang_thai == 1)
                      {{-- Xác nhận --}}
                        <span class="px-2 py-1 font-semibold leading-tight text-purple-600 bg-orange-100 rounded-full dark:bg-teal-500 dark:text-orange-100">
                            Confirm 
                        </span>
                        
                      @elseif($donHang->trang_thai == 2)
                      {{-- Đang giao hàng --}}
                        <span class="px-2 py-1 font-semibold leading-tight text-blue-500 bg-blue-300 rounded-full dark:bg-blue-500 dark:text-red-100">
                            Shippping
                        </span> 
                        
                      @elseif($donHang->trang_thai == 3)
                      {{-- //Hoàn thành --}}
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Complete 
                        </span>
                      @else
                      {{-- //Hủy đơn --}}
                          <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                              Cancel 
                          </span>
                      @endif            
                    
                  </td>
                  <td class="px-6 py-4 text-sm font-semibold">
                      {{$donHang->tong_tien}}
                  </td>
                </tr>      
              @endforeach
              
                  
            </tbody>
          </table>
          <div class="mt-4">
              {{ $dsDonHang->links() }}
          </div> 
          <tbody>
    
          </tbody>
        </div>
        
      </div>

      
    </div>
</main>


  
@endsection