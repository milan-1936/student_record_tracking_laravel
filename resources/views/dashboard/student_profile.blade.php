@php
    $lists = [
        'Baisakh', 'jeth', 'asar', 'First Term'
        ];
@endphp

@extends('dashboard.navbar')
@section('content')
    <div class="w-full  mt-5 mx-5">
        <div class="flex w-full">
            @include('component.searchbar')
        </div>
        <div class="flex justify-between gap-4 mt-5">
            <div class="flex gap-5">
               <div>
                   <img src="{{asset('images/photos/pp.jpg')}}" alt="PP size" class="w-40">
                   <h1 class="text-2xl font-bold text-center">Soneesha</h1>
               </div>
                <div class="flex flex-col gap-2">
                    <h1 class="">Class: 10</h1>
                    <h1 class="">Sudeep Ghimire Chhetri</h1>
                    <h1 class="">Devchuli, Nawalpur</h1>
                    <h1 class="">+977 9840079139</h1>
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-xl text-center font-bold">Overall School Performance</h1>
                <div class="flex w-full justify-between">
                    <a>All</a>
                    <a>English</a>
                    <a>Nepali</a>
                    <a>Math</a>
                    <a>Science</a>
                    <a>Social</a>
                    <a>OPT I</a>
                    <a>OPT II</a>
                </div>
                <div>
                    @include('component.progressionchart')
                </div>

            </div>
        </div>
        <div>
            <table class="w-full mt-5">
                <thead class="text-left">
                    <th>EXAMINATION</th>
                    <th>ENG</th>
                    <th>NEP</th>
                    <th>MATH</th>
                    <th>SCIENCE</th>
                    <th>SOCIAL</th>
                    <th>OPT I</th>
                    <th>OPT II</th>
                    <th>GPA</th>
                    <th>RANK</th>
                    <th>REMARK</th>
                </thead>
                <tbody>
                    <tr class="border-b h-14 odd:bg-gray-100">
                        <td>First Terminal</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>80</td>
                        <td>4.0</td>
                        <td>1</td>
                        <td>Excellent</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
