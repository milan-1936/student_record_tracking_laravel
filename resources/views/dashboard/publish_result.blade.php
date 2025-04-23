@extends('dashboard.navbar')

@include('component.alert')

@section('content')
    <h1>{{$exam_name->fmExamSubject->examination->name}}</h1>
    <div class="max-w-7xl">
        <table class="w-full">
            <thead>
            <th>R.N.</th>
            <th>Name</th>
            <th>English</th>
            <th>Nepali</th>
            <th>Math</th>
            <th>Science</th>
            <th>Social</th>
            <th>opti</th>
            <th>optii</th>
            <th>total</th>
            <th>Percentage</th>
            <th>Rank</th>
            </thead>

            @foreach($result as $res)
                <tr class="text-center h-14 odd:bg-gray-600">
                    <td>{{$res->student->rn}}</td>
                    <td class="text-left flex gap-2 items-center">
                        <div class="flex items-center gap-2  ">
                            <img src="{{asset('images/photos/'. $res->student->profile)}}" class="w-10 h-10 rounded-full">
                            {{$res->student->name}}
                        </div>
                    </td>
                    <td>{{$res->eng}}</td>
                    <td>{{$res->nep}}</td>
                    <td>{{$res->math}}</td>
                    <td>{{$res->sci}}</td>
                    <td>{{$res->soc}}</td>
                    <td>{{$res->opti}}</td>
                    <td>{{$res->optii}}</td>
                    <td>{{$res->total}}</td>
                    <td>{{$res->percentage}}%</td>
                    <td>{{$res->rank}}</td>
                </tr>
            @endforeach


        </table>
        <div class="w-full flex justify-end my-3 ">
            <button class="bg-indigo-600 px-4 py-2 rounded-lg flex gap-2">
                <i class="ri-printer-fill"></i>
                <span>Print</span>
            </button>
        </div>
    </div>
@endsection
