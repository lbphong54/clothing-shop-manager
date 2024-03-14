
@extends('master')


@section('content')

<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            </h2>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
              <!-- Card infor -->
                <div class="p-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center mb-2">
                        <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.715 -0.715 20 20" >
                          <g id="business-card--name-card-business-information-money-payment"><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.580357142857142 3.316071428571429h-14.590714285714286c-0.7325666035714287 0 -1.3264285714285715 0.5938686000000001 -1.3264285714285715 1.3264285714285715v9.285c0 0.7325865 0.5938619678571428 1.3264285714285715 1.3264285714285715 1.3264285714285715h14.590714285714286c0.7325865 0 1.3264285714285715 -0.5938420714285715 1.3264285714285715 -1.3264285714285715v-9.285c0 -0.7325599714285714 -0.5938420714285715 -1.3264285714285715 -1.3264285714285715 -1.3264285714285715Z" stroke-width="1.43"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M5.968928571428572 11.274642857142858C7.067781792857144 11.274642857142858 7.958571428571429 10.383853221428572 7.958571428571429 9.285s-0.8907896357142858 -1.9896428571428573 -1.9896428571428573 -1.9896428571428573S3.9792857142857145 8.186146778571429 3.9792857142857145 9.285s0.8907896357142858 1.9896428571428573 1.9896428571428573 1.9896428571428573Z" stroke-width="1.43"></path><path id="Vector_3" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M11.274642857142858 7.295357142857143H14.590714285714286" stroke-width="1.43"></path><path id="Vector_4" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M11.274642857142858 11.274642857142858H14.590714285714286" stroke-width="1.43"></path></g>
                        </svg>
                        
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $sanPham->ten }}</p>
                    </div>
                    <div class="flex items-center mb-2">
                        
                        <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.715 -0.715 20 20" ><g id="bill-2--currency-billing-payment-finance-cash-bill-money-accounting"><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.580357142857142 3.316071428571429h-14.590714285714286c-0.7325666035714287 0 -1.3264285714285715 0.5938686000000001 -1.3264285714285715 1.3264285714285715v9.285c0 0.7325865 0.5938619678571428 1.3264285714285715 1.3264285714285715 1.3264285714285715h14.590714285714286c0.7325865 0 1.3264285714285715 -0.5938420714285715 1.3264285714285715 -1.3264285714285715v-9.285c0 -0.7325599714285714 -0.5938420714285715 -1.3264285714285715 -1.3264285714285715 -1.3264285714285715Z" stroke-width="1.43"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M9.285 11.937857142857144c1.4651332071428573 0 2.652857142857143 -1.1877239357142857 2.652857142857143 -2.652857142857143s-1.1877239357142857 -2.652857142857143 -2.652857142857143 -2.652857142857143 -2.652857142857143 1.1877239357142857 -2.652857142857143 2.652857142857143 1.1877239357142857 2.652857142857143 2.652857142857143 2.652857142857143Z" stroke-width="1.43"></path><g id="Group 8"><path id="Ellipse 1" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3.6807066428571433 9.616607142857143c-0.18313999285714286 0 -0.3316071428571429 -0.14846715000000002 -0.3316071428571429 -0.3316071428571429s0.14846715000000002 -0.3316071428571429 0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path><path id="Ellipse 2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3.6807066428571433 9.616607142857143c0.18313999285714286 0 0.3316071428571429 -0.14846715000000002 0.3316071428571429 -0.3316071428571429s-0.14846715000000002 -0.3316071428571429 -0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path></g><g id="Group 9"><path id="Ellipse 1_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M14.889293357142858 9.616607142857143c-0.18317978571428573 0 -0.3316071428571429 -0.14846715000000002 -0.3316071428571429 -0.3316071428571429s0.14842735714285715 -0.3316071428571429 0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path><path id="Ellipse 2_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M14.889293357142858 9.616607142857143c0.18317978571428573 0 0.3316071428571429 -0.14846715000000002 0.3316071428571429 -0.3316071428571429s-0.14842735714285715 -0.3316071428571429 -0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path></g></g></svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">Giá bán: {{ $sanPham->gia_ban }}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        
                        <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.715 -0.715 20 20" ><g id="payment-cash-out-3"><path id="Vector 2494" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M9.285 15.253928571428572v2.652857142857143" stroke-width="1.43"></path><path id="Vector 2495" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M12.60107142857143 13.9275v2.652857142857143" stroke-width="1.43"></path><path id="Vector 2496" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M5.968928571428572 13.9275v2.652857142857143" stroke-width="1.43"></path><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M16.580357142857142 0.6632142857142858h-14.590714285714286c-0.7325666035714287 0 -1.3264285714285715 0.5938619678571428 -1.3264285714285715 1.3264285714285715v7.958571428571429c0 0.7325599714285714 0.5938619678571428 1.3264285714285715 1.3264285714285715 1.3264285714285715h14.590714285714286c0.7325865 0 1.3264285714285715 -0.5938686000000001 1.3264285714285715 -1.3264285714285715v-7.958571428571429c0 -0.7325666035714287 -0.5938420714285715 -1.3264285714285715 -1.3264285714285715 -1.3264285714285715Z" stroke-width="1.43"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M9.285 8.290178571428571c1.2819932142857144 0 2.32125 -1.0392567857142858 2.32125 -2.32125S10.566993214285715 3.6476785714285715 9.285 3.6476785714285715s-2.32125 1.0392567857142858 -2.32125 2.32125S8.003006785714286 8.290178571428571 9.285 8.290178571428571Z" stroke-width="1.43"></path><g id="Group 8"><path id="Ellipse 1" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3.6807066428571433 6.300535714285715c-0.18313999285714286 0 -0.3316071428571429 -0.14846715000000002 -0.3316071428571429 -0.3316071428571429s0.14846715000000002 -0.3316071428571429 0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path><path id="Ellipse 2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3.6807066428571433 6.300535714285715c0.18313999285714286 0 0.3316071428571429 -0.14846715000000002 0.3316071428571429 -0.3316071428571429s-0.14846715000000002 -0.3316071428571429 -0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path></g><g id="Group 9"><path id="Ellipse 1_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M14.889293357142858 6.300535714285715c-0.18317978571428573 0 -0.3316071428571429 -0.14846715000000002 -0.3316071428571429 -0.3316071428571429s0.14842735714285715 -0.3316071428571429 0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path><path id="Ellipse 2_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M14.889293357142858 6.300535714285715c0.18317978571428573 0 0.3316071428571429 -0.14846715000000002 0.3316071428571429 -0.3316071428571429s-0.14842735714285715 -0.3316071428571429 -0.3316071428571429 -0.3316071428571429" stroke-width="1.43"></path></g></g></svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400">Giá nhập: {{ $sanPham->gia_nhap }}</p>
                    </div>

                    <div class="flex items-center mb-2">
                        
                        <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" ><g id="factory-plant--business-factory-plant"><path id="Vector 1689" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M37 33H27" stroke-width="3"></path><path id="Vector 1690" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M37 38H27" stroke-width="3"></path><path id="Vector 1691" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M39.5 14h-11" stroke-width="3"></path><path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M23 4c-2.761 -1.253 -6.154 -1.411 -10 0S5.761 5.253 3 4" stroke-width="3"></path><path id="Vector_2" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M23 10c-2.761 -1.253 -6.154 -1.411 -10 0s-7.239 1.253 -10 0" stroke-width="3"></path><path id="Union" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M3 27.912c0 -1.985 0.737 -3.904 2.283 -5.148 2.23 -1.795 6.107 -4.436 11.698 -6.577 1.804 -0.692 3.688 0.621 3.77 2.551 0.08 1.914 0.168 4.425 0.214 7.22l21.037 0a2.998 2.998 0 0 1 2.998 3l0 6.5c0 2.526 -0.159 4.475 -0.35 5.907 -0.26 1.94 -1.9 3.228 -3.856 3.309 -3.109 0.129 -8.572 0.285 -16.794 0.285 -8.222 0 -13.685 -0.156 -16.794 -0.285 -1.956 -0.081 -3.597 -1.368 -3.856 -3.309C3.16 39.933 3 37.984 3 35.46l0 -7.548Z" stroke-width="3"></path><path id="Intersect" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M18.962 44.98c0.022 -1.012 0.038 -2.315 0.038 -3.98 0 -2.4 -0.033 -4.05 -0.071 -5.157 -0.046 -1.327 -0.72 -2.51 -2.033 -2.713A12.452 12.452 0 0 0 15 33c-0.768 0 -1.392 0.052 -1.896 0.13 -1.313 0.203 -1.987 1.386 -2.033 2.713A151.965 151.965 0 0 0 11 41c0 1.592 0.014 2.853 0.035 3.845" stroke-width="3"></path><path id="Rectangle 1675" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M27 26a643.11 643.11 0 0 1 1.843 -17.429c0.151 -1.258 1.085 -2.274 2.345 -2.413A25.93 25.93 0 0 1 34 6c1.05 0 2.018 0.071 2.812 0.158 1.26 0.14 2.194 1.155 2.345 2.413A643.11 643.11 0 0 1 41 26" stroke-width="3"></path></g></svg>
                          
                        <p class="text-lg text-gray-600 dark:text-gray-400"> Nhà cung cấp: {{ $sanPham->nha_cung_cap->ten }}</p>
                    </div>
                    
                    <div class="flex items-center mb-2">
                      <svg class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" ><g id="tag--tags-bookmark-favorite"><path id="Intersect" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M7.291 12.697c0.708 0.647 1.789 0.69 2.562 0.122 0.557 -0.409 1.116 -0.841 1.621 -1.347 0.505 -0.505 0.938 -1.064 1.347 -1.621 0.567 -0.773 0.525 -1.853 -0.122 -2.562a76.962 76.962 0 0 0 -5.798 -5.712 1.853 1.853 0 0 0 -0.876 -0.439C4.84 0.908 1.882 0.422 1.153 1.151 0.424 1.88 0.91 4.838 1.14 6.023c0.064 0.327 0.217 0.627 0.438 0.876a76.962 76.962 0 0 0 5.713 5.798Z" stroke-width="1"></path><path id="Vector" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" d="M4.662 5.81c0.736 0 1.15 -0.414 1.15 -1.15 0 -0.737 -0.414 -1.151 -1.15 -1.151 -0.737 0 -1.15 0.414 -1.15 1.15 0 0.737 0.413 1.151 1.15 1.151Z" stroke-width="1"></path></g></svg>  
                      <p class="text-lg text-gray-600 dark:text-gray-400"> Loại sản phẩm: {{ $sanPham->loai_sp->ten }}</p>
                    </div>

                    
                    
                
                </div>
                {{-- Cart  --}}
                <div class="p-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center mb-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14" class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400"><g id="bag--bag-payment-cash-money-finance">
                            <path id="Vector" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M6.5 12.535807142857143c3.25 0 5.571428571428571 -1.1514285714285715 5.571428571428571 -3.7142485714285716 0 -2.7857142857142856 -1.3928571428571428 -4.197245 -4.178571428571429 -5.590102142857143l1.2049328571428572 -1.882882857142857c0.04730142857142857 -0.09084214285714286 0.07071071428571428 -0.19223285714285715 0.06802714285714287 -0.29461714285714286 -0.0026928571428571427 -0.10239357142857144 -0.031395 -0.2024109285714286 -0.08341357142857142 -0.29064564285714284 -0.052009285714285716 -0.08823564285714286 -0.12561714285714287 -0.16178314285714285 -0.21389642857142857 -0.21372000000000002 -0.08827928571428571 -0.05193592857142858 -0.18832357142857142 -0.08055264285714286 -0.2907171428571429 -0.08315542857142857h-3.9371428571428573C4.531428571428571 0.46435907142857147 4.4236957142857145 0.4919627142857143 4.328935 0.5463017857142857c-0.09477000000000001 0.054340000000000006 -0.17300214285714285 0.13337814285714286 -0.2263764285714286 0.22868857142857144 -0.05337428571428572 0.09531042857142857 -0.079885 0.20331535714285717 -0.0767 0.3125060714285714 0.003185 0.1091907142857143 0.035945000000000005 0.215475 0.09478857142857143 0.3075057142857143L5.107142857142858 3.2314564285714287c-2.7857142857142856 1.4114285714285715 -4.178571428571429 2.8229592857142856 -4.178571428571429 5.608673571428572 0 2.5442485714285716 2.3214285714285716 3.6956771428571433 5.571428571428571 3.6956771428571433Z" stroke-width="1"></path><path id="Vector 19" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M5.107142857142858 3.25v0c0.66261 0.9939150000000001 2.123104285714286 0.9939150000000001 2.7857142857142856 0v0" stroke-width="1"></path></g>
                        </svg>
                          
                        <p class="text-lg  text-gray-700 dark:text-gray-200">Sản phẩm còn lại: {{$tongSoLuong}} </p>
                    </div>
                   
                    <div class="flex items-center mb-2">
                        
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" version="1.1" class="w-12 h-8 mr-2 text-gray-600 dark:text-gray-400">
                          <path d="M 25.500 1.399 C 15.806 4.465, 7.330 11.887, 3.120 20.998 C 0.066 27.605, -0.829 37.916, 1.054 44.801 C 3.919 55.278, 12.717 65.113, 22.921 69.242 L 28.500 71.500 105.143 71.796 L 181.787 72.092 182.378 76.296 C 182.703 78.608, 196.692 211.020, 213.465 370.544 C 246.517 684.902, 244.912 671.964, 252.934 688.706 C 266.774 717.591, 291.639 738.098, 324 747.315 L 331.500 749.451 570 749.764 C 738.141 749.984, 810.968 749.755, 816.865 748.986 C 839.686 746.010, 861.217 734.791, 878.545 716.846 C 888.789 706.238, 895.504 696.099, 900.513 683.677 C 904.729 673.221, 995.343 311.745, 996.939 299.013 C 998.383 287.496, 998.268 280.200, 996.465 269.084 C 989.193 224.245, 957.375 191.147, 911 180.180 C 905.239 178.817, 868.127 178.604, 584.750 178.300 C 296.487 177.992, 265 177.805, 265 176.405 C 265 171.794, 249.804 30.736, 248.868 26.658 C 247.352 20.055, 240.563 10.338, 234.657 6.318 C 224.988 -0.262, 229.484 -0.007, 124.568 0.067 C 50.839 0.119, 28.602 0.418, 25.500 1.399 M 273 250.534 C 273 250.827, 282.450 340.810, 293.999 450.495 C 311.405 615.788, 315.362 650.913, 317.121 655.711 C 320.021 663.620, 329.280 672.839, 337.359 675.861 L 343.119 678.017 577.310 677.758 L 811.500 677.500 817 674.640 C 824.401 670.791, 831.389 663.250, 833.984 656.312 C 835.130 653.251, 856.337 569.692, 881.111 470.624 C 931.565 268.871, 928.645 282.959, 922.572 270.554 C 919.377 264.028, 913.083 257.129, 907.858 254.426 C 898.987 249.836, 912.825 250.024, 583.750 250.012 C 412.837 250.005, 273 250.240, 273 250.534 M 702.344 339.981 C 697.337 341.044, 691.335 344.006, 687.294 347.406 C 685.659 348.782, 653.825 384.766, 616.552 427.370 L 548.783 504.833 512.883 477.926 C 493.138 463.128, 475.299 450.310, 473.242 449.442 C 455.103 441.794, 434.925 449.329, 426.225 467 C 422.818 473.920, 422.053 484.229, 424.357 492.157 C 427.698 503.648, 428.346 504.232, 484.660 546.474 C 542.875 590.141, 541.797 589.499, 555.786 588.852 C 565.684 588.394, 572.561 585.140, 580.263 577.271 C 583.369 574.097, 620.365 532.125, 662.477 484 C 744.513 390.249, 744.637 390.091, 745.703 378.339 C 747.853 354.629, 725.688 335.021, 702.344 339.981 M 304.763 857.964 C 278.783 862.715, 256.758 882.423, 248.842 908 C 245.503 918.791, 245.501 938.198, 248.838 949 C 263.978 997.997, 323.818 1016.168, 363.070 983.689 C 383.778 966.554, 392.907 940.145, 387.434 913.208 C 382.511 888.980, 362.728 867.475, 338.500 860.014 C 330.642 857.594, 312.735 856.506, 304.763 857.964 M 770.500 857.698 C 764.334 858.515, 756.257 861.307, 748.500 865.301 C 736.775 871.338, 723.836 884.435, 718.173 896 C 712.450 907.685, 710.697 915.258, 710.646 928.500 C 710.594 941.986, 711.898 947.794, 717.699 959.916 C 721.541 967.943, 723.555 970.687, 731.353 978.519 C 745.931 993.161, 758.440 998.779, 778.500 999.694 C 792.727 1000.342, 801.476 998.539, 813.925 992.393 C 830.105 984.404, 844.273 968.171, 850.053 951 C 852.845 942.703, 853.825 924.827, 852.036 914.816 C 847.127 887.347, 824.478 864.311, 796.746 858.583 C 789.699 857.127, 777.822 856.726, 770.500 857.698" stroke="none" fill="#000" fill-rule="evenodd"></path>
                      </svg>
                      @if( $sanPham->khuyen_mai_id == 0 )
                        <p class="text-lg text-gray-600 dark:text-gray-400">Khuyến mãi: không</p>
                        @else
                          <p class="text-lg text-gray-600 dark:text-gray-400">Khuyến mãi: {{$sanPham->khuyen_mai->ten}}</p>
                        @endif                          
                      
                    </div>
                    
                  
                    
                
                </div>
              
            </div>
            <div class="update-product">
              <button class="update-button" > <a href="{{ route('products.update',['id'=>$sanPham->id]) }}"> Cập nhật thông tin </a> </button>
            </div>
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                
            </h2>
            <!-- New Table -->
           
            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap item-center">
                  <thead>
                    <tr class="text-center text-xs font-semibold tracking-wide  text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3 ">Size</th>
                      <th class="px-4 py-3">Màu</th>
                      <th class="px-4 py-3">Số lượng</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($dsChiTietSP as $chiTietSP)
                    <tr class="text-center text-gray-700 dark:text-gray-400" >
                      <td class="px-4 py-3 text-sm">
                        {{$chiTietSP->size->ten}}
                      </td>
                      <td class="px-4 py-3">                         
                        {{$chiTietSP->color->ten}}
                      </td>
                      <td class="px-4 py-3">                         
                        {{$chiTietSP->so_luong}}
                      </td>
                    </tr>      
                    @endforeach      
                  </tbody>
                </table>
              </div>
              
            </div>
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Danh sách hình ảnh
            </h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                  <form method="POST" action="{{ route('image.up', ['id' => $sanPham->id]) }}" enctype="multipart/form-data">
                      @csrf
                      Thêm hình ảnh <input type="file" name="images[]" multiple>
                      <button type="submit">Upload</button>
                  </form>
              </div>
          </div>
            @php
            $stt = 1; // Khởi tạo biến đếm STT
            @endphp
            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap item-center">
                  <thead>
                    <tr class="text-center text-xs font-semibold tracking-wide  text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3 ">STT</th>
                      <th class="px-4 py-3"></th>
                      <th class="px-4 py-3">Tên</th>
                      <th class="px-4 py-3"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                   
                      @foreach($dsAnhSanPham as $anhSanPham)
                    <tr class="text-center text-gray-700 dark:text-gray-400" >
                      <td class="px-4 py-3 text-sm">
                        {{$stt}}
                      </td>
                      <td class="px-4 py-3">                                                
                          <img src="{{asset($anhSanPham->duong_dan)}}" alt="Hình ảnh" style="width: 100px;
                          height: 100px;
                          object-fit: cover;">
                      </td>
                      <td class="px-4 py-3">                         
                        {{$anhSanPham->ten}}
                      </td>
                      <td class="px-4 py-3">  
                        <button type="button" class="delete-button"><a href="{{ route('image.delete', ['id' => $anhSanPham->id]) }}"> Xóa</a></button>
                      </td>
                    </tr>     
                    @php
                    $stt ++ ; 
                    @endphp
                    @endforeach     
                    
                  </tbody>
                </table>
              </div>
              
            </div>
            
          </div>
  </main>
@endsection
