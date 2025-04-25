@php
    $lists = [
        'Baisakh', 'jeth', 'asar', 'First Term'
    ];
@endphp

@extends('dashboard.navbar')
@section('content')
    <div class="w-full mt-5 mx-5 bg-gray-900 text-gray-200 p-6 rounded-lg shadow-lg">
        <div class="flex w-full">
            <div class="w-full">
                <div class="flex items-center gap-2 border-slate-100   w-full px-5">
                    <label for="search" class="cursor-pointer">
                        <i class="ri-search-line text-blue-500   text-xl"></i>
                    </label>
                    <input type="text" id="search"  name="name" class=" w-full h-10 rounded-lg placeholder-text-slate-200  border-slate-300 focus:outline-none focus:border-slate-500 px-4" placeholder="Search by the name of student">
                    <button id="cross" class="cursor-pointer">
                        <i class="ri-close-line text-blue-500 text-xl"></i>
                    </button>
                </div>
                <div class="">
                        <table class="w-full mx-10 h-10 z-auto  absolute">
                            <tbody id="table_data">
                            </tbody>

                        </table>
                </div>
            </div>
        </div>
        @if(isset($student))
        <div class="flex justify-between gap-4 mt-5">
            <div class="flex gap-5">
                <div class="bg-gray-800 p-3 rounded-lg shadow-md">
                    <img src="{{asset('images/photos/'. $student->profile)}}" alt="PP size" class="w-40 rounded-md border-2 border-indigo-500">
                    <h1 class="text-2xl font-bold text-center text-white mt-2">{{$student->name}} </h1>
                </div>
                <div class="flex flex-col gap-2 bg-gray-800 p-4 rounded-lg shadow-md">
                    <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Class:</span> 10</h1>
                    <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Name:</span> {{$student->guardian}} </h1>
                    <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Address:</span>
                        {{$student->address}}</h1>
                    <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Contact:</span> +977
                        {{$student->contact}}</h1>
                </div>
            </div>
            <div class="flex-1 bg-gray-800 p-4 rounded-lg shadow-md">
                <h1 class="text-xl text-center font-bold text-white mb-4">Overall School Performance</h1>
                <div class="flex w-full justify-between mb-4">
                    <a href="#" class="text-gray-800 hover:text-gray-900 transition-colors font-medium bg-indigo-500 px-3 rounded-full">All</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">English</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Nepali</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Math</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Science</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Social</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">OPT I</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">OPT II</a>
                </div>
                <div class="w-full pb-5">
                    @include('component.progressionchart')
                </div>
            </div>
        </div>
        @else
            <div class="flex justify-between gap-4 mt-5">
                <div class="flex gap-5">
                    <div class="bg-gray-800 p-3 rounded-lg shadow-md">
                        <img src="{{asset('images/photos/pp.jpg')}}" alt="PP size" class="w-40 rounded-md border-2 border-indigo-500">
                        <h1 class="text-2xl font-bold text-center text-white mt-2">Student Name </h1>
                    </div>
                    <div class="flex flex-col gap-2 bg-gray-800 p-4 rounded-lg shadow-md">
                        <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Class:</span> 10</h1>
                        <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Name:</span> </h1>
                        <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Address:</span> Devchuli, Nawalpur</h1>
                        <h1 class="text-gray-300"><span class="text-indigo-400 font-semibold">Contact:</span> +977 9840079139</h1>
                    </div>
                </div>
                <div class="flex-1 bg-gray-800 p-4 rounded-lg shadow-md">
                    <h1 class="text-xl text-center font-bold text-white mb-4">Overall School Performance</h1>
                    <div class="flex w-full justify-between mb-4">
                        <a href="#" class="text-gray-800 hover:text-gray-900 transition-colors font-medium bg-indigo-500 px-3 rounded-full">All</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">English</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Nepali</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Math</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Science</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">Social</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">OPT I</a>
                        <a href="#" class="text-gray-400 hover:text-indigo-300 transition-colors font-medium">OPT II</a>
                    </div>
                    <div class="w-full pb-5">
                        @include('component.progressionchart')
                    </div>
                </div>
            </div>
        @endif
        <div class="mt-6 bg-gray-800 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-white mb-4">Examination Results</h2>
            <div class="overflow-x-auto">
                <table class="w-full mt-2">
                    <thead class="text-left bg-gray-700 text-gray-200">
                    <tr>
                        <th class="p-3 rounded-tl-lg">EXAMINATION</th>
                        <th class="p-3">ENG</th>
                        <th class="p-3">NEP</th>
                        <th class="p-3">MATH</th>
                        <th class="p-3">SCIENCE</th>
                        <th class="p-3">SOCIAL</th>
                        <th class="p-3">OPT I</th>
                        <th class="p-3">OPT II</th>
                        <th class="p-3">GPA</th>
                        <th class="p-3">RANK</th>
                        <th class="p-3 rounded-tr-lg">REMARK</th>
                    </tr>
                    </thead>
                    @if(isset($marks))
                        <tbody class="text-gray-300">
                        @foreach($marks as $mark)

                            <tr class="border-b border-gray-700 h-14 hover:bg-gray-700 transition-colors">
                                <td class="p-3">{{$mark[0]->fmExamSubject->examination->name}}</td>
                                <td class="p-3">{{$mark[0]->eng}}</td>
                                <td class="p-3">{{$mark[0]->nep}}</td>
                                <td class="p-3">{{$mark[0]->math}}</td>
                                <td class="p-3">{{$mark[0]->sci}}</td>
                                <td class="p-3">{{$mark[0]->soc}}</td>
                                <td class="p-3">{{$mark[0]->opti}}</td>
                                <td class="p-3">{{$mark[0]->optii}}</td>
                                <td class="p-3"><span class="font-bold text-indigo-400">{{$mark[0]->grade}}</span></td>
                                <td class="p-3"><span class="font-bold text-indigo-400">{{$mark[0]->rank}}</span></td>
                                <td class="p-3"><span class="font-bold text-green-400">Excellent</span></td>
                            </tr>
                        @endforeach
                        <!-- You can add more rows here -->
                        </tbody>
                    @else
                        <tbody class="text-gray-300">
                        <tr class="border-b border-gray-700 h-14 hover:bg-gray-700 transition-colors">
                            <td class="p-3">First Terminal</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3">80</td>
                            <td class="p-3"><span class="font-bold text-indigo-400">4.0</span></td>
                            <td class="p-3"><span class="font-bold text-indigo-400">1</span></td>
                            <td class="p-3"><span class="font-bold text-green-400">Excellent</span></td>
                        </tr>
                        <!-- You can add more rows here -->
                        </tbody>
                    @endif
                </table>
            </div>
            <div class="w-full flex justify-end mt-5">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-md shadow-md transition-colors flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    Print Report
                </button>
            </div>
        </div>
    </div>

    <script>
        search = document.getElementById('search');
        cross = document.getElementById('cross');
        cross.style.display = 'none';


        // Clearing the search input when the Esc key is pressed
        search.addEventListener('keydown', function(event){
            if (event.key === 'Escape'){
                // Perform search action here
                search.value='';
                cross.style.display='none';
            }
        });

        // Showing the cross icon when there is input in the search field
        search.addEventListener('input', function(){
            if (search.value.length > 0){
                cross.style.display = 'block';
            }else{
                cross.style.display = 'none';
            }
        });

        // Clearing the search input when the cross icon is clicked
        cross.addEventListener('click', function(){
            search.value = '';
            cross.style.display = 'none';
        });

        $(document).ready(function() {
            $('#table_data_container').hide();
            $('#search').on('keyup', function() {
               console.log($(this).val());
                $.ajax({
                    url: '{{ route('search_profile') }}', // Blade needs quotes here
                    type: 'GET',
                    data: {
                        search: $(this).val()
                    },
                    success: function(data) {
                        console.log(data);
                        $('#table_data_container').show();
                        if(data.length === 0){
                            $('#table_data').append('<tr class="items-center text-white w-full h-10 even:bg-gray-600"><td>No data found</td></tr>');
                        }
                        $('#table_data').empty();
                        $.each(data.data, function(index, value) {
                            console.log( value.name);
                            $('#table_data').append('' +
                                '<tr class="items-center flex text-white max-w-7xl px-5 h-10 even:bg-gray-600 odd:bg-gray-900">' +
                                '<td><a href="/student/' + value.id + '" class="w-full">' + value.name + '</a></td>' +
                            '</tr>');
                        });

                    },


                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });


    </script>
@endsection
