@extends('dashboard.navbar')
@php
    $student_id = 1;
@endphp
@section('content')
    <div>
        <h1 class="font-semibold text-gray-400 text-xl">
            Enter Marks of the {Examination Name}
        </h1>
        <table class="table-auto w-full p-2" id="myTable">
            <thead class="text-left">
                <th>Name of the Students</th>
                <th>ENG</th>
                <th>GPA</th>
                <th>NEP</th>
                <th>GPA</th>
                <th>MATH</th>
                <th>GPA</th>
                <th>SCI</th>
                <th>GPA</th>
                <th>SOC</th>
                <th>GPA</th>
                <th>OPT I</th>
                <th>GPA</th>
                <th>OPT II</th>
                <th>GPA</th>
                <th>CGPA</th>
                <th class="text-center">Remarks</th>
            </thead>
            <tbody>
                <tr class="h-15 odd:bg-gray-800 text-center">
                    <td class="text-left pl-2">Soneesha Ghimire Chhetri</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="english{{$student_id}}" id="english">
                    </td>
                    <td>3.5</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="nepali" id="nepali">
                    </td>
                    <td>3.8</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="math" id="math">
                    </td>
                    <td>3.9</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="science" id="science">
                    </td>
                    <td>4.0</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="social" id="social">
                    </td>
                    <td>4.0</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="opti" id="opti">
                    </td>
                    <td>4.0</td>
                    <td>
                        <input type="text" class="w-8 h-8 border border-gray-500 rounded-md text-center" name="optii" id="optii">
                    </td>
                    <td>4.0</td>
                    <td>3.9</td>
                    <td class="text-center text-gray-800">
                        <span class="text-sm bg-green-500 px-2 py-1 rounded-full ">passed</span>
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="w-full class flex justify-end mt-4">
            <input type="submit" value="Submit" class="bg-indigo-600 px-2 py-1 rounded-md text-white">
        </div>
    </div>
@endsection

