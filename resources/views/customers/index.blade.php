
@extends('master')


@section('content')

<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              
            </h2>
            
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Số thành viên:
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{ count($dsKhachHangAll) }}
                  </p>
                </div>
              </div>
              
            </div>
            <!-- Search -->
            <div class="flex justify-center flex-1 lg:mr-32 mb-10">
                <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500 ">
                  <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search for client" aria-label="Search">
                </div>
            </div>
            <span style="display: inline-block; height: 15px;"></span>
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">ID</th>
                      <th class="px-4 py-3">TÊN</th>
                      <th class="px-4 py-3">EMAIL</th>
                      <th class="px-4 py-3">SỐ ĐIỆN THOẠI</th>
                      <th class="px-4 py-3">TRẠNG THÁI</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($dsKhachHang as $khachHang)
                    <tr class="text-gray-700 dark:text-gray-400" onclick="window.location.href = '{{ route('customers.detail',['id'=>$khachHang->id]) }}';">
                      <td class="px-4 py-3 text-sm">
                        {{$khachHang->id}}
                      </td>
                      <td class="px-4 py-3">                      
                          <div class="flex items-center text-sm">
                            <div>
                              <p class="font-semibold">{{$khachHang->ten}}</p>
                              <p class="text-xs text-gray-600 dark:text-gray-400"></p>
                            </div>
                          </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$khachHang->email}}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$khachHang->sdt}}
                      </td>
                      <td class="px-4 py-3 text-xs"> 
                        @if($khachHang->trang_thai == 1 )
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                active
                            </span>
                        @else
                            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                Lock
                            </span>
                        @endif            
                        
                      </td>
                      
                    </tr>      
                    @endforeach      
                  </tbody>
                </table>
                <div class="mt-4">
                  {{ $dsKhachHang->links() }} <!-- Hiển thị thanh phân trang -->
                </div> 
                
              </div>
              
            </div>

            
          </div>
  </main>
@endsection
