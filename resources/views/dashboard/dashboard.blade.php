@extends('dashboard.navbar')
@section('content')
    <div class="flex bg-slate-100 h-full w-full">
        <div class="wrapper w-full px-[3%] mt-5">
        {{--      Overview Card section      --}}
            <div class="my-5 gap-5 grid grid-cols-1 xl:grid-cols-3">

                @php
                    $array = [
                        [
                            'heading'=> "अनुपस्थित विद्यार्थी",
                            'main' => 19,
                            'sub' => 2025
                        ],
                        [
                            'heading'=> "Total Passed Student",
                            'main' => '78%',
                            'sub' => '40'
                        ],
                        [
                            'heading'=> "राम संकर भोला",
                            'main'=> 25,
                            'sub' => '2025/06/8'
                        ],

                ];
                @endphp

                {{--first card--}}
                @foreach($array as $arr)
                    <div class="first_card w-70 bg-slate-50 rounded-xl p-4 drop-shadow-lg overflow-hidden">
                        <h1 class="text-slate-600 font-semibold">{{$arr['heading']}}</h1>
                        <h1 class="flex justify-between items-center">
                            <span class="text-blue-500 font-bold text-6xl">{{$arr['main']}}</span>
                            <span>
                           <i class="ri-team-fill text-4xl bg-blue-500 rounded-md text-white p-2"></i>
                        </span>
                        </h1>
                        <p class="text-slate-600">On the day of {{$arr['sub']}}</p>
                    </div>
                @endforeach
            </div>

            {{--search section--}}
            <div class="w-full flex ">
                @include('component.searchbar')
            </div>

            {{--table section--}}
            <div class="w-full mt-5">
                @include('component.table')
        </div>
    </div>
@endsection


