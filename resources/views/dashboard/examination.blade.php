@extends('dashboard.navbar')
@include('component.alert')
@section('content')
    <div class="flex bg-gray-900 text-white min-h-screen w-full">
        <div class="wrapper w-full px-[3%] mt-5">

            {{-- Overview Card section --}}
            <div class="my-5 gap-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                @php
                    $array = [
                        [
                            'heading'=> "Passed Student",
                            'main' => '90%',
                            'sub' => 'in the test of Baisakh'
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

                @foreach($array as $arr)
                    <div class="bg-gray-800 rounded-xl p-5 shadow-lg hover:shadow-indigo-500/20 transition">
                        <h1 class="text-indigo-400 font-semibold text-lg mb-2">{{$arr['heading']}}</h1>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-300 font-bold text-5xl">{{$arr['main']}}</span>
                            <i class="ri-team-fill text-4xl bg-indigo-600 rounded-md text-white p-2"></i>
                        </div>
                        <p class="text-gray-400 text-sm mt-2">On the day of {{$arr['sub']}}</p>
                    </div>
                @endforeach
            </div>


{{--            <h1>{{$marks_table[0]->fm_exam_subject_id}}</h1>--}}
            <hr class="border-indigo-700 my-5">

            {{-- List of Exams + Progression Chart --}}
            <div class="flex flex-col lg:flex-row gap-5">
                {{-- This div is all about list of exams --}}
                @include('component.listofexams')

                {{-- This div is all about chart of progression --}}
                @include('component.progressionchart')
            </div>

            <hr class="border-indigo-700 my-5">

            {{-- Buttons --}}
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('examination.create') }}"
                   class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition text-white px-4 py-2 rounded-xl">
                    <i class="ri-add-circle-fill text-xl"></i>
                    <span>Create Exam</span>
                </a>
                    <a href="@if($exams->isEmpty() || $marks_table->last()->fm_exam_subject_id == $exams->last()->id ) #  @else {{ route('marks_update') }}  @endif"
                       class="flex items-center gap-2 @if($exams->isEmpty() || $marks_table->last()->fm_exam_subject_id == $exams->last()->id) bg-indigo-400 @else bg-indigo-600 @endif hover:bg-indigo-700 transition text-white px-4 py-2 rounded-xl">
                        <i class="ri-corner-down-left-line text-xl"></i>
                        <span>Enter Marks</span>
                    </a>

                <a href="{{ route('result.publish') }}"
                   class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 transition text-white px-4 py-2 rounded-xl">
                    <i class="ri-printer-line text-xl"></i>
                    <span>Publish Result</span>
                </a>


            </div>
        </div>
    </div>
@endsection
