
@extends('master')


@section('content')

<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
                  <!-- Card infor -->
                <div class="p-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center mb-2">
                        
                      <svg class="w-12 h-8 mr-2 text-black dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="blank-calendar--blank-calendar-date-day-month-empty"><path id="Vector" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M1.5 2c-0.26522 0 -0.51957 0.10536 -0.707107 0.29289C0.605357 2.48043 0.5 2.73478 0.5 3v9.5c0 0.2652 0.105357 0.5196 0.292893 0.7071 0.187537 0.1875 0.441887 0.2929 0.707107 0.2929h11c0.2652 0 0.5196 -0.1054 0.7071 -0.2929s0.2929 -0.4419 0.2929 -0.7071V3c0 -0.26522 -0.1054 -0.51957 -0.2929 -0.70711C13.0196 2.10536 12.7652 2 12.5 2h-2" stroke-width="1"></path><path id="Vector_2" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M0.5 5.5h13" stroke-width="1"></path><path id="Vector_3" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M3.5 0.5v3" stroke-width="1"></path><path id="Vector_4" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M10.5 0.5v3" stroke-width="1"></path><path id="Vector_5" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M3.5 2h5" stroke-width="1"></path></g></svg>
                          
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">Ngày nhập:{{ $phieuNhap-> ngay_nhap }}</p>
                    </div>
                    <div class="flex items-center mb-2">
                        
                        <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" ><g id="factory-plant--business-factory-plant"><path id="Vector 1689" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M37 33H27" stroke-width="3"></path><path id="Vector 1690" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M37 38H27" stroke-width="3"></path><path id="Vector 1691" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M39.5 14h-11" stroke-width="3"></path><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M23 4c-2.761 -1.253 -6.154 -1.411 -10 0S5.761 5.253 3 4" stroke-width="3"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M23 10c-2.761 -1.253 -6.154 -1.411 -10 0s-7.239 1.253 -10 0" stroke-width="3"></path><path id="Union" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3 27.912c0 -1.985 0.737 -3.904 2.283 -5.148 2.23 -1.795 6.107 -4.436 11.698 -6.577 1.804 -0.692 3.688 0.621 3.77 2.551 0.08 1.914 0.168 4.425 0.214 7.22l21.037 0a2.998 2.998 0 0 1 2.998 3l0 6.5c0 2.526 -0.159 4.475 -0.35 5.907 -0.26 1.94 -1.9 3.228 -3.856 3.309 -3.109 0.129 -8.572 0.285 -16.794 0.285 -8.222 0 -13.685 -0.156 -16.794 -0.285 -1.956 -0.081 -3.597 -1.368 -3.856 -3.309C3.16 39.933 3 37.984 3 35.46l0 -7.548Z" stroke-width="3"></path><path id="Intersect" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M18.962 44.98c0.022 -1.012 0.038 -2.315 0.038 -3.98 0 -2.4 -0.033 -4.05 -0.071 -5.157 -0.046 -1.327 -0.72 -2.51 -2.033 -2.713A12.452 12.452 0 0 0 15 33c-0.768 0 -1.392 0.052 -1.896 0.13 -1.313 0.203 -1.987 1.386 -2.033 2.713A151.965 151.965 0 0 0 11 41c0 1.592 0.014 2.853 0.035 3.845" stroke-width="3"></path><path id="Rectangle 1675" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M27 26a643.11 643.11 0 0 1 1.843 -17.429c0.151 -1.258 1.085 -2.274 2.345 -2.413A25.93 25.93 0 0 1 34 6c1.05 0 2.018 0.071 2.812 0.158 1.26 0.14 2.194 1.155 2.345 2.413A643.11 643.11 0 0 1 41 26" stroke-width="3"></path></g></svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">Nhà cung cấp: {{ $phieuNhap->nha_cung_cap->ten }}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">

                        <svg class="w-12 h-8 mr-2 text-black dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">Người nhập: {{ $phieuNhap->nhan_vien->ten }}</p>
                    </div>

                    <div class="flex items-center mb-2">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" class="w-12 h-8 mr-2 text-black dark:text-gray-400"><g id="bag-dollar--bag-payment-cash-money-finance"><path id="Vector" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M7 13.5c3.5 0 6 -1.2381 6 -3.99386 0 -2.99539 -1.5 -4.99232 -4.5 -6.49001l1.18 -1.51767c0.05995 -0.09957 0.09246 -0.2132 0.09425 -0.32937S9.74704 0.938348 9.69018 0.836979C9.63333 0.73561 9.55065 0.651051 9.45051 0.591872 9.35038 0.532693 9.23636 0.500998 9.12 0.5H4.88c-0.11636 0.000998 -0.23038 0.032693 -0.33051 0.091872 -0.10014 0.059179 -0.18282 0.143738 -0.23967 0.245107 -0.05686 0.101369 -0.08586 0.215941 -0.08407 0.332111s0.0343 0.2298 0.09425 0.32937L5.5 3.02611c-3 1.50768 -4.5 3.50461 -4.5 6.5C1 12.2619 3.5 13.5 7 13.5Z" stroke-width="1"></path><path id="Vector 3" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M8.3828 6.80572c-0.04756 -0.13456 -0.12095 -0.25691 -0.21421 -0.36111 -0.19836 -0.22163 -0.48663 -0.36111 -0.80748 -0.36111h-0.83854c-0.53408 0 -0.96703 0.43295 -0.96703 0.96702 0 0.45444 0.31643 0.84757 0.76038 0.94469l1.27669 0.27927c0.49735 0.1088 0.85184 0.54953 0.85184 1.05864 0 0.59831 -0.48503 1.08378 -1.08334 1.08378h-0.72223c-0.47169 0 -0.87297 -0.3015 -1.02169 -0.72227" stroke-width="1"></path><path id="Vector 2489" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M7 6.08334V5" stroke-width="1"></path><path id="Vector 2490" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M7 11.5001v-1.0834" stroke-width="1"></path></g></svg>  
                        <p class="text-lg text-gray-600 dark:text-gray-400">Tổng tiền: {{ $phieuNhap->tong_tien }} </p>
                    </div>  
                
                </div>
                <!-- Card add -->
                <div class="flex justify-center items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" onclick="window.location.href = '{{ route('receipts.add-detail' ,['id' => $phieuNhap->id ]) }}';">
                  <div class="p-3 mr-4 text-orange-500  rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="100" width="100"><g id="add-circle--button-remove-cross-add-buttons-plus-circle-+-mathematics-math"><path id="Vector" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M7 13.5c3.5899 0 6.5 -2.9101 6.5 -6.5C13.5 3.41015 10.5899 0.5 7 0.5 3.41015 0.5 0.5 3.41015 0.5 7c0 3.5899 2.91015 6.5 6.5 6.5Z" stroke-width="1"></path><path id="Vector_2" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M7 4v6" stroke-width="1"></path><path id="Vector_3" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M4 7h6" stroke-width="1"></path></g></svg>
                  </div>
                  <div>
                    <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                      Add new
                    </p>
                    
                  </div>
                </div>
            </div>
              
               
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Danh sách 
            </h2>
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap text-center">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Sản phẩm</th>
                      <th class="px-4 py-3">Size</th>
                      <th class="px-4 py-3">Màu</th>
                      <th class="px-4 py-3">Số lượng</th>
                      <th class="px-4 py-3">Giá nhập</th>
                      <th class="px-4 py-3">Giá bán</th>
                      <th class="px-4 py-3">Thành tiền</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($dsCTPhieuNhap as $ctPhieuNhap)
                    <tr class="text-gray-700 dark:text-gray-400" >
                        <td class="px-4 py-3 text-sm">
                            {{$ctPhieuNhap->san_pham->ten}}
                        </td>
                        <td class="px-4 py-3">  
                            {{$ctPhieuNhap->size->ten}}            
                            
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$ctPhieuNhap->color->ten}}
                        </td>
                        
                        <td class="px-4 py-3 text-sm"> 
                            {{$ctPhieuNhap->so_luong}}
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold">
                            {{$ctPhieuNhap->gia_nhap}}
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold">
                            {{$ctPhieuNhap->gia_ban}}
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold">
                            {{$ctPhieuNhap->thanh_tien}}
                        </td>
                        <td>
                            <button type="button" class="update-button"><a href="{{ route('receipts.update', ['id' => $ctPhieuNhap->id]) }}" class="nav-link active">Sửa</a></button> ||
                            <button type="button" class="delete-button"><a href="{{ route('receipts.delete-detail', ['id' => $ctPhieuNhap->id]) }}" class="nav-link active" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a></button>
                        </td>
                      </tr>      
                    @endforeach
      
                  </tbody>
                </table>
                <tbody>

                </tbody>
                <button type="button" class="delete-button"><a href="{{ route('receipts.delete', ['id' => $phieuNhap->id]) }}" class="nav-link active">Xóa phiéu nhập</a></button>
              </div>
              
            </div>

            
            
          </div>
  </main>
@endsection
