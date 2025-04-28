@extends('dashboard.navbar')
@section('content')
<h1 class="text-xl pb-2" >Attendance of the <span class="bg-violet-200 px-2 py-1 text-gray-800 rounded-full text-lg font-bold">{{now()->format('y, F, l')}}</span> </h1>
    <div class="w-full font-Poppins bg-gray-900 min-h-screen text-gray-200">
        <form action="{{ route('attendance_update') }}" method="post">
            @csrf
            <table class="w-full border border-gray-700">
                <thead class="bg-gray-800">
                <tr class="text-center">
                    <th class="px-4 py-2 text-left text-sm  font-medium text-indigo-400">STUDENT</th>
                    <th class="px-4 py-2  text-sm font-medium text-indigo-400">PRESENT</th>
                    <th class="px-4 py-2  text-sm font-medium text-indigo-400">ABSENT</th>
                    <th class="px-4 py-2 text-sm font-medium text-indigo-400">LEAVE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attendances as $stu)
                    <tr class="border-b border-gray-700 bg-gray-800 hover:bg-gray-700 text-center">
                        <td class="px-4 py-2 text-sm">
                            <div class="flex justify-start">
                                <div class="w-10 h-10 bg-indigo-600 flex items-center justify-center rounded-full mr-2">
                                    <span class="text-lg  text-white">{{$stu->name[0]}}</span>
                                </div>
                                <div class="flex flex-col text-left">
                                    <h1 class="text-sm font-semibold text-white">{{$stu->name}}</h1>
                                </div>
                            </div>
                        </td>

                        <td class="px-4 py-2 text-center">
                            <input type="radio" value="P" name="present{{$stu->student_id}}" id="present" class="h-4 w-4 text-indigo-500 focus:ring-indigo-400 bg-gray-900 border-gray-600 rounded">
                        </td>
                        <td>
                            <input  type="radio" value="A" name="present{{$stu->student_id}}" id="absent" class="h-4 w-4 text-indigo-500 focus:ring-indigo-600">
                        </td><td>
                            <input  type="radio" value="L" name="present{{$stu->student_id}}" id="leave" class="h-4 w-4 text-indigo-500 focus:ring-indigo-600">
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-all">Save Attendance</button>
            </div>
        </form>
    </div>
@endsection
