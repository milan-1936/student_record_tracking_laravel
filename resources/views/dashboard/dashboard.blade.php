@php use App\Services\SmsService; @endphp
@extends('dashboard.navbar')
@section('content')

    <div class="flex bg-gray-900 h-full w-full rounded-lg shadow-lg">
        <div class="wrapper w-full px-4 md:px-6">
            {{-- Dashboard Title --}}
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-white">Dashboard Overview</h1>

                <div class="flex gap-2">
                    <button class="bg-gray-800 hover:bg-gray-700 text-gray-300 px-3 py-1.5 rounded-md flex items-center gap-1 text-sm transition-colors">
                        <i class="ri-calendar-line"></i>
                        Today
                    </button>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1.5 rounded-md flex items-center gap-1 text-sm transition-colors">
                        <i class="ri-refresh-line"></i>
                        Refresh
                    </button>
                </div>
            </div>


            {{-- Overview Card section --}}
            <div class="my-5 gap-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                @php
                    $array = [
                        [
                            'heading' => 'Total SMS Credit Available',
                            'main' => $balance,
                            'sub' => 2025,
                            'icon' => 'ri-message-line',
                            'color' => 'bg-indigo-600',
                            'textColor' => 'text-indigo-400'
                        ],
                        [
                            'heading' => "Passed Student",
                            'main' => '78%',
                            'sub' => '40',
                            'icon' => 'ri-medal-line',
                            'color' => 'bg-emerald-600',
                            'textColor' => 'text-emerald-400'
                        ],
                        [
                            'heading' => "Total Student",
                            'main' => $total_students,
                            'sub' => '2025/06/8',
                            'icon' => 'ri-calendar-check-line',
                            'color' => 'bg-amber-600',
                            'textColor' => 'text-amber-400'
                        ],
                    ];
                @endphp

                {{-- Cards --}}
                @foreach($array as $arr)
                    <div class="bg-gray-800 rounded-xl p-5 border border-gray-700 shadow-md hover:shadow-lg transition-all duration-300 hover:translate-y-[-2px]">
                        <div class="flex justify-between items-start">
                            <h2 class="text-gray-300 font-semibold mb-1">{{$arr['heading']}}</h2>
                            <div class="{{$arr['color']}} text-white p-2.5 rounded-md shadow-lg">
                                <i class="{{$arr['icon']}} text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="{{$arr['textColor']}} font-bold text-5xl">{{$arr['main']}}</span>
                        </div>
                        <p class="text-gray-500 text-sm mt-3 flex items-center">
                            <i class="ri-information-line mr-1"></i>
                            On the day of {{$arr['sub']}}
                        </p>
                    </div>
                @endforeach
            </div>

            {{-- Performance Charts Section --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-6">
                <div class="lg:col-span-2 bg-gray-800 p-5 rounded-xl border border-gray-700 shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-white">Student Performance</h2>
                        <div class="flex gap-2">
                            <button class="text-xs bg-gray-700 hover:bg-gray-600 px-3 py-1 rounded-md text-gray-300 transition-colors">Week</button>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 px-3 py-1 rounded-md text-white transition-colors">Month</button>
                            <button class="text-xs bg-gray-700 hover:bg-gray-600 px-3 py-1 rounded-md text-gray-300 transition-colors">Year</button>
                        </div>
                    </div>
                    <div class="h-64">
                        {{-- Chart will be rendered here --}}
                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                            <p>Performance chart will be rendered here</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 p-5 rounded-xl border border-gray-700 shadow-md">
                    <h2 class="text-lg font-semibold text-white mb-4">Attendance Overview</h2>
                    <div class="h-64">
                        {{-- Pie chart will be rendered here --}}
                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                            <p>Attendance chart will be rendered here</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Search section --}}
            <div class="w-full flex mb-5">
                @include('component.searchbar')
            </div>

            {{-- Table section --}}
            <div class="w-full mb-6 bg-gray-800 rounded-xl shadow-md border border-gray-700 overflow-hidden">
                <div class="px-5 py-4 border-b border-gray-700 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-white">Student Records</h2>
                    <div class="flex gap-2">
                        <button class="bg-gray-700 hover:bg-gray-600 text-gray-300 px-3 py-1.5 rounded-md flex items-center gap-1 text-sm transition-colors">
                            <i class="ri-filter-line"></i>
                            Filter
                        </button>
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1.5 rounded-md flex items-center gap-1 text-sm transition-colors">
                            <i class="ri-download-line"></i>
                            Export
                        </button>
                    </div>
                </div>
                <div class="p-0">
                    @include('component.table')
                </div>
            </div>
        </div>
    </div>
@endsection
