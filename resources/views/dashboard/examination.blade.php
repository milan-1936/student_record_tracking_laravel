@extends('dashboard.navbar')
@section('content')
    <div class="flex bg-slate-100 h-full w-full">
        <div class="wrapper w-full px-[3%] mt-5">
            {{--      Overview Card section      --}}
            <div class="my-5 gap-5 grid grid-cols-1 xl:grid-cols-3">

                @php
                    $array = [
                        [
                            'heading'=> "Passed Student",
                            'main' => '90%',
                            'sub' => 'in the class test of Baisakh'
                        ],
                        [
                            'heading'=> "Passed Student Percentage",
                            'main' => '78%',
                            'sub' => 'in the  test of Jeth'
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

            @php
                $lists = [
                    'Baisakh', 'jeth', 'asar', 'First term examination'
                    ];
            @endphp
            <hr class="border-2 my-5">
            {{--List of Exams--}}
            <div class="flex gap-5">
                {{--This div is all about list of exam--}}
                @include('component.listofexams')

                {{--This div is all about chart of progression--}}
                @include('component.progressionchart')
            </div>

            <hr class="border-2 my-5">
            {{--buttons--}}
            <div class="flex gap-5">
                <a href="" class="flex gap-2 items-center bg-blue-500 rounded-xl px-2 py-1 text-white">
                    <i class="ri-add-circle-fill text-xl "></i>
                    <button class="">Create Exam</button>
                </a>
                <a href="" class="flex gap-2 items-center bg-blue-500 rounded-xl px-2 py-1 text-white">
                    <i class="ri-corner-down-left-line text-xl"></i>
                    <button class="">Enter Marks</button>
                </a>
                <a href="" class="flex gap-2 items-center bg-blue-500 rounded-xl px-2 py-1 text-white">
                    <i class="ri-printer-line text-xl "></i>
                    <button class="">Publish Result</button>
                </a>

        </div>
@endsection
