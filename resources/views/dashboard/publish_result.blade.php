@extends('dashboard.navbar')

@include('component.alert')

@section('content')

    <h1 class="text-xl font-medium my-4">Result of {{$exam_name->fmExamSubject->examination->name}}</h1>
    <div class="max-w-7xl" id="printableArea">
        <table class="w-full">
            <thead class="w-full bg-slate-800 h-10">
            <th colspan="2" class="text-left">Full marks</th>
            <th>{{$exam_name->fmExamSubject->english}}</th>
            <th>{{$exam_name->fmExamSubject->nepali}}</th>
            <th>{{$exam_name->fmExamSubject->math}}</th>
            <th>{{$exam_name->fmExamSubject->science}}</th>
            <th>{{$exam_name->fmExamSubject->social}}</th>
            <th>{{$exam_name->fmExamSubject->opti}}</th>
            <th>{{$exam_name->fmExamSubject->optii}}</th>
            <th></th>
            <th></th>
            <th></th>

            </thead>
            <thead class="h-12 bg-indigo-700 text-white">
            <th>R.N.</th>
            <th class="text-left">Name</th>
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
                <tr class="text-center h-14 even:bg-gray-600">
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
        <div class="w-full flex justify-end my-3 gap-5 ">
            <button class="bg-indigo-600 px-4 py-2 rounded-lg flex gap-2 noPrint " id="print">
                <i class="ri-printer-fill"></i>
                <span>Print</span>
            </button>

            <button class="bg-indigo-600 px-4 py-2 rounded-lg flex gap-2 noPrint" >
                <i class="ri-mail-send-fill"></i>
                <span>Publish Result</span>
            </button>
        </div>
    </div>
    <script>
        $(document).ready(function(){
           $('#print').on('click', function(){
            var printContents = $('#printableArea').html();
            var originalContents = $('body').html();
            document.body.innerHTML = printContents;
            window.print();
            location.reload();
           });
        });
    </script>
@endsection
