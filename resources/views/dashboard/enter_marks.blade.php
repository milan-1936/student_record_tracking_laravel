@extends('dashboard.navbar')
@include('component.alert')
@section('content')
    <div class="max-w-7xl">
        <h1 class="font-semibold text-gray-400 text-xl">
            Enter Marks of the {{$exams[0]->examination->name}}
        </h1>

       <form method="post"
             action = " {{route('marks_enter')}}">
           @csrf
           @if($exams[0]->examination->name)
               <table class="table-auto w-full p-2" id="myTable">
                   <thead class="font-thin text-center bg-gray-600 h-10">
                   <td class="text-left">FM</td>
                   <td>{{$fms[0]->english}}</td>
                   <td>{{$fms[0]->nepali}}</td>
                   <td>{{$fms[0]->math}}</td>
                   <td>{{$fms[0]->science}}</td>
                   <td>{{$fms[0]->social}}</td>
                   <td>{{$fms[0]->opti}}</td>
                   <td>{{$fms[0]->optii}}</td>
                   </thead>

                   <thead class="text-center h-14 bg-indigo-700">
                   <th class="text-left">Name of the Students</th>
                   <th>ENGLISH</th>
                   <th>NEPALI</th>
                   <th>MATH</th>
                   <th>SCIENCE</th>
                   <th>SOCIAL</th>
                   <th>OPT I</th>
                   <th>COMPUTER</th>
                   </thead>
                   <tbody>

                   @foreach ($students as $student)
                       <tr class="h-15 odd:bg-gray-800 text-center">
                           <td class="text-left pl-2">{{$student->name}}</td>
                           <input type="hidden" value="{{$student->id}}" name="student[{{$student->id}}][student_id]">
                           <input type="hidden" value="{{$fms[0]->examination->id}}" name="student[{{$student->id}}][examid]">
                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][english]" id="english" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][nepali]" id="nepali" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][math]" id="math" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][science]" id="science" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][social]" id="social" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][opti]" id="opti" >
                           </td>

                           <td>
                               <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="student[{{$student->rn}}][optii]" id="optii" >
                           </td>

                       </tr>
                   @endforeach


                   </tbody>
               </table>
           @else
               <h1>No any Exams to enter marks</h1>
           @endif
           <div class="w-full class flex justify-end mt-4">
               <input type="submit" value="Submit" class="bg-indigo-600 px-2 py-1 rounded-md text-white">
           </div>
       </form>
    </div>


    <script>
        $(document).ready(function(){
            student_count = @json($students->count());
            listofExams =[];
            fms = @json($fms[0]);
            exam = @json($exams[0]);
            $('input[type="text"]').each(function(index) {
            $(this).on('keyup', function(){

            });
            });
        });
    </script>
@endsection

