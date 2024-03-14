
@extends('master')


@section('content')

<main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              
            </h2>
            
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" onclick="window.location.href = '{{ route('suppliers.add') }}';">
                <div class="p-3 mr-4 text-orange-500  rounded-full dark:text-orange-100 dark:bg-orange-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" height="50" width="50"><g id="add-circle--button-remove-cross-add-buttons-plus-circle-+-mathematics-math"><path id="Vector" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M7 13.5c3.5899 0 6.5 -2.9101 6.5 -6.5C13.5 3.41015 10.5899 0.5 7 0.5 3.41015 0.5 0.5 3.41015 0.5 7c0 3.5899 2.91015 6.5 6.5 6.5Z" stroke-width="1"></path><path id="Vector_2" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M7 4v6" stroke-width="1"></path><path id="Vector_3" stroke="#06f08c" stroke-linecap="round" stroke-linejoin="round" d="M4 7h6" stroke-width="1"></path></g></svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Add new 
                  </p>
                  
                </div>
              </div>
              
            </div>
           
            <span style="display: inline-block; height: 15px;"></span>
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">ID</th>
                      <th class="px-4 py-3">TÊN</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($dsNhaCungCap as $nhaCungCap)
                    <tr class="text-center text-gray-700 dark:text-gray-400" onclick="window.location.href = '{{ route('suppliers.detail',['id'=>$nhaCungCap->id]) }}';">
                      <td class="px-4 py-3 text-sm">
                        {{$nhaCungCap->id}}
                      </td>
                      <td class="px-4 py-3">                      
                          <p class="font-semibold">{{$nhaCungCap->ten}}</p>
                      </td>
                    </tr>      
                    @endforeach      
                  </tbody>
                </table>
                <tbody>

                </tbody>
              </div>
              
            </div>

            
          </div>
  </main>
@endsection
