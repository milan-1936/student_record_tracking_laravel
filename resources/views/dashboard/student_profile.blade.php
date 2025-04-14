@php
    $lists = [
        'Baisakh', 'jeth', 'asar', 'First term examination'
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
                   <img src="" alt="">
                   <h1 class="text-2xl font-bold">Soneesha</h1>
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
            @include('component.table')
        </div>
    </div>
@endsection
