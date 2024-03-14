
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
                        
                        <svg class="w-12 h-8 mr-2 text-black dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                          
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $khachHang->ten }}</p>
                    </div>
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-8 mr-2 text-black dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                          </svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">{{ $khachHang->email }}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-8 mr-2 text-black dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                          </svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">{{ $khachHang->sdt }}</p>
                    </div>

                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-8 mr-2 text-black dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                          </svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">{{ $khachHang->dia_chi }}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        
                      @if($khachHang->trang_thai == 0)
                        <svg class="w-12 h-8 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="invisible-1--disable-eye-eyeball-hide-off-view"><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3.62914 3.6244C4.62188 2.9793 5.7722 2.5 6.99997 2.5c2.79 0 5.18003 2.47503 6.23003 3.7463 0.1658 0.20672 0.2576 0.47529 0.2576 0.75376s-0.0918 0.54704 -0.2576 0.75376c-0.5788 0.70075 -1.5648 1.76726 -2.8004 2.58338m-1.92963 0.9325c-0.48238 0.1459 -0.98436 0.2304 -1.5 0.2304 -2.79 0 -5.18 -2.47501 -6.230002 -3.74628 -0.16584 -0.20672 -0.257639 -0.47529 -0.257639 -0.75376s0.091799 -0.54704 0.257639 -0.75376c0.332672 -0.40278 0.799852 -0.92639 1.371652 -1.45383" stroke-width="1"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M8.41421 8.41427c0.78105 -0.78105 0.78105 -2.04738 0 -2.82843 -0.78105 -0.78104 -2.04737 -0.78104 -2.82842 0" stroke-width="1"></path><path id="Vector_3" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M13.5 13.5 0.5 0.5" stroke-width="1"></path></g></svg>
                      @else
                        <svg class="w-12 h-8 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="14" width="14"><g id="visible--eye-eyeball-open-view"><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M13.23 6.2463c0.1658 0.20672 0.2576 0.47529 0.2576 0.75376s-0.0918 0.54704 -0.2576 0.75376c-1.05 1.27127 -3.44003 3.74628 -6.23003 3.74628s-5.18 -2.47501 -6.230002 -3.74628c-0.16584 -0.20672 -0.257639 -0.47529 -0.257639 -0.75376s0.091799 -0.54704 0.257639 -0.75376C1.81997 4.97503 4.20997 2.5 6.99997 2.5S12.18 4.97503 13.23 6.2463Z" stroke-width="1"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M7 9c1.10457 0 2 -0.89543 2 -2s-0.89543 -2 -2 -2 -2 0.89543 -2 2 0.89543 2 2 2Z" stroke-width="1"></path></g></svg>
                      @endif
                        <p class="text-lg font-medium {{ $khachHang->trang_thai == 1 ? 'text-green-600' : 'text-red-600' }}" >

                            {{ $khachHang->trang_thai == 1 ? 'Active' : 'Locked' }}
                        </p>
                    </div>
                    
                
                </div>
                {{-- Cart --}}
                <div class="p-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14" class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400"><g id="bag--bag-payment-cash-money-finance">
                            <path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M6.5 12.535807142857143c3.25 0 5.571428571428571 -1.1514285714285715 5.571428571428571 -3.7142485714285716 0 -2.7857142857142856 -1.3928571428571428 -4.197245 -4.178571428571429 -5.590102142857143l1.2049328571428572 -1.882882857142857c0.04730142857142857 -0.09084214285714286 0.07071071428571428 -0.19223285714285715 0.06802714285714287 -0.29461714285714286 -0.0026928571428571427 -0.10239357142857144 -0.031395 -0.2024109285714286 -0.08341357142857142 -0.29064564285714284 -0.052009285714285716 -0.08823564285714286 -0.12561714285714287 -0.16178314285714285 -0.21389642857142857 -0.21372000000000002 -0.08827928571428571 -0.05193592857142858 -0.18832357142857142 -0.08055264285714286 -0.2907171428571429 -0.08315542857142857h-3.9371428571428573C4.531428571428571 0.46435907142857147 4.4236957142857145 0.4919627142857143 4.328935 0.5463017857142857c-0.09477000000000001 0.054340000000000006 -0.17300214285714285 0.13337814285714286 -0.2263764285714286 0.22868857142857144 -0.05337428571428572 0.09531042857142857 -0.079885 0.20331535714285717 -0.0767 0.3125060714285714 0.003185 0.1091907142857143 0.035945000000000005 0.215475 0.09478857142857143 0.3075057142857143L5.107142857142858 3.2314564285714287c-2.7857142857142856 1.4114285714285715 -4.178571428571429 2.8229592857142856 -4.178571428571429 5.608673571428572 0 2.5442485714285716 2.3214285714285716 3.6956771428571433 5.571428571428571 3.6956771428571433Z" stroke-width="1"></path><path id="Vector 19" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M5.107142857142858 3.25v0c0.66261 0.9939150000000001 2.123104285714286 0.9939150000000001 2.7857142857142856 0v0" stroke-width="1"></path></g>
                        </svg>
                          
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">Tổng tiền đã mua: {{$tongTienMua}}</p>
                    </div>
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1" class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400">
                            <path d="M 25.500 1.399 C 15.806 4.465, 7.330 11.887, 3.120 20.998 C 0.066 27.605, -0.829 37.916, 1.054 44.801 C 3.919 55.278, 12.717 65.113, 22.921 69.242 L 28.500 71.500 105.143 71.796 L 181.787 72.092 182.378 76.296 C 182.703 78.608, 196.692 211.020, 213.465 370.544 C 246.517 684.902, 244.912 671.964, 252.934 688.706 C 266.774 717.591, 291.639 738.098, 324 747.315 L 331.500 749.451 570 749.764 C 738.141 749.984, 810.968 749.755, 816.865 748.986 C 839.686 746.010, 861.217 734.791, 878.545 716.846 C 888.789 706.238, 895.504 696.099, 900.513 683.677 C 904.729 673.221, 995.343 311.745, 996.939 299.013 C 998.383 287.496, 998.268 280.200, 996.465 269.084 C 989.193 224.245, 957.375 191.147, 911 180.180 C 905.239 178.817, 868.127 178.604, 584.750 178.300 C 296.487 177.992, 265 177.805, 265 176.405 C 265 171.794, 249.804 30.736, 248.868 26.658 C 247.352 20.055, 240.563 10.338, 234.657 6.318 C 224.988 -0.262, 229.484 -0.007, 124.568 0.067 C 50.839 0.119, 28.602 0.418, 25.500 1.399 M 273 250.534 C 273 250.827, 282.450 340.810, 293.999 450.495 C 311.405 615.788, 315.362 650.913, 317.121 655.711 C 320.021 663.620, 329.280 672.839, 337.359 675.861 L 343.119 678.017 577.310 677.758 L 811.500 677.500 817 674.640 C 824.401 670.791, 831.389 663.250, 833.984 656.312 C 835.130 653.251, 856.337 569.692, 881.111 470.624 C 931.565 268.871, 928.645 282.959, 922.572 270.554 C 919.377 264.028, 913.083 257.129, 907.858 254.426 C 898.987 249.836, 912.825 250.024, 583.750 250.012 C 412.837 250.005, 273 250.240, 273 250.534 M 702.344 339.981 C 697.337 341.044, 691.335 344.006, 687.294 347.406 C 685.659 348.782, 653.825 384.766, 616.552 427.370 L 548.783 504.833 512.883 477.926 C 493.138 463.128, 475.299 450.310, 473.242 449.442 C 455.103 441.794, 434.925 449.329, 426.225 467 C 422.818 473.920, 422.053 484.229, 424.357 492.157 C 427.698 503.648, 428.346 504.232, 484.660 546.474 C 542.875 590.141, 541.797 589.499, 555.786 588.852 C 565.684 588.394, 572.561 585.140, 580.263 577.271 C 583.369 574.097, 620.365 532.125, 662.477 484 C 744.513 390.249, 744.637 390.091, 745.703 378.339 C 747.853 354.629, 725.688 335.021, 702.344 339.981 M 304.763 857.964 C 278.783 862.715, 256.758 882.423, 248.842 908 C 245.503 918.791, 245.501 938.198, 248.838 949 C 263.978 997.997, 323.818 1016.168, 363.070 983.689 C 383.778 966.554, 392.907 940.145, 387.434 913.208 C 382.511 888.980, 362.728 867.475, 338.500 860.014 C 330.642 857.594, 312.735 856.506, 304.763 857.964 M 770.500 857.698 C 764.334 858.515, 756.257 861.307, 748.500 865.301 C 736.775 871.338, 723.836 884.435, 718.173 896 C 712.450 907.685, 710.697 915.258, 710.646 928.500 C 710.594 941.986, 711.898 947.794, 717.699 959.916 C 721.541 967.943, 723.555 970.687, 731.353 978.519 C 745.931 993.161, 758.440 998.779, 778.500 999.694 C 792.727 1000.342, 801.476 998.539, 813.925 992.393 C 830.105 984.404, 844.273 968.171, 850.053 951 C 852.845 942.703, 853.825 924.827, 852.036 914.816 C 847.127 887.347, 824.478 864.311, 796.746 858.583 C 789.699 857.127, 777.822 856.726, 770.500 857.698" stroke="none" fill="#000" fill-rule="evenodd"></path>
                        </svg>                        
                        <p class="text-lg text-gray-600 dark:text-gray-400">Số đơn hoàn thành: {{$donHoanThanh}}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1" class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400">
                            <path d="M 25.500 1.399 C 15.806 4.465, 7.330 11.887, 3.120 20.998 C 0.066 27.605, -0.829 37.916, 1.054 44.801 C 3.919 55.278, 12.717 65.113, 22.921 69.242 L 28.500 71.500 105.143 71.796 L 181.787 72.092 182.378 76.296 C 182.703 78.608, 196.692 211.020, 213.465 370.544 C 246.517 684.902, 244.912 671.964, 252.934 688.706 C 266.774 717.591, 291.639 738.098, 324 747.315 L 331.500 749.451 570 749.764 C 738.141 749.984, 810.968 749.755, 816.865 748.986 C 839.686 746.010, 861.217 734.791, 878.545 716.846 C 888.789 706.238, 895.504 696.099, 900.513 683.677 C 904.729 673.221, 995.343 311.745, 996.939 299.013 C 998.383 287.496, 998.268 280.200, 996.465 269.084 C 989.193 224.245, 957.375 191.147, 911 180.180 C 905.239 178.817, 868.127 178.604, 584.750 178.300 C 296.487 177.992, 265 177.805, 265 176.405 C 265 171.794, 249.804 30.736, 248.868 26.658 C 247.352 20.055, 240.563 10.338, 234.657 6.318 C 224.988 -0.262, 229.484 -0.007, 124.568 0.067 C 50.839 0.119, 28.602 0.418, 25.500 1.399 M 273 250.534 C 273 250.827, 282.450 340.810, 293.999 450.495 C 311.405 615.788, 315.362 650.913, 317.121 655.711 C 320.021 663.620, 329.280 672.839, 337.359 675.861 L 343.119 678.017 577.310 677.758 L 811.500 677.500 817 674.640 C 824.401 670.791, 831.389 663.250, 833.984 656.312 C 835.130 653.251, 856.337 569.692, 881.111 470.624 C 931.565 268.871, 928.645 282.959, 922.572 270.554 C 919.377 264.028, 913.083 257.129, 907.858 254.426 C 898.987 249.836, 912.825 250.024, 583.750 250.012 C 412.837 250.005, 273 250.240, 273 250.534 M 466.228 429.018 C 454.636 430.708, 444.452 438.536, 439.160 449.825 C 436.897 454.653, 436.500 456.843, 436.501 464.500 C 436.501 472.086, 436.907 474.364, 439.082 479.002 C 442.379 486.033, 449.966 493.620, 456.998 496.919 L 462.500 499.500 579 499.500 L 695.500 499.500 701.007 496.795 C 711.270 491.755, 718.784 482.284, 720.984 471.617 C 723.428 459.766, 719.837 447.738, 711.312 439.221 C 705.410 433.326, 699.055 430.145, 690.789 428.950 C 683.214 427.854, 473.772 427.918, 466.228 429.018 M 304.763 857.964 C 278.897 862.694, 256.723 882.535, 248.842 908 C 245.503 918.791, 245.501 938.198, 248.838 949 C 263.978 997.997, 323.818 1016.168, 363.070 983.689 C 383.778 966.554, 392.907 940.145, 387.434 913.208 C 382.511 888.980, 362.728 867.475, 338.500 860.014 C 330.642 857.594, 312.735 856.506, 304.763 857.964 M 770.500 857.698 C 750.234 860.386, 727.700 876.893, 718.214 896 C 712.534 907.442, 710.705 915.207, 710.676 928 C 710.645 941.595, 712.134 948.378, 717.680 959.916 C 721.528 967.922, 723.575 970.707, 731.353 978.519 C 745.931 993.161, 758.440 998.779, 778.500 999.694 C 792.752 1000.343, 801.471 998.541, 813.997 992.357 C 821.918 988.446, 824.906 986.240, 831.997 979.071 C 846.535 964.374, 851.943 952.356, 852.769 932.911 C 853.333 919.635, 852.141 911.152, 848.426 902.009 C 835.878 871.129, 804.360 853.207, 770.500 857.698" stroke="none" fill="#000" fill-rule="evenodd"></path>
                        </svg>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Số đơn hủy: {{$donHangHuy}}</p>
                    </div>
        
                    
                
                </div>
              
            </div>
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Danh sách đơn hàng
            </h2>
            <!-- New Table -->
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
                    <tr class="text-center text-gray-700 dark:text-gray-400" onclick="window.location.href = '{{ route('customers.detail',['id'=>$khachHang->id]) }}';">
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
