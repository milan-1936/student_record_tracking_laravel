@php
    $students = [
        [
            'name'  => 'Soneesha Ghimire Chhetri',
            'contact'=> '9841234567',
            'guardian' => 'Sudeep Ghimire Chhetri',
            'total_abs' => 5,
        ],
        [
            'name' => 'Samir Kumal',
            'contact'=> '9841234567',
            'guardian' => 'Samir Ko Mummy Kumal',
            'total_abs' => 12,
        ],
        [
            'name' => 'Ram Khatri',
            'contact'=> '9841234567',
            'guardian' => 'Ram ko Baba Khatri',
            'total_abs' => 9,
        ],
        [
            'name' => 'Sajal Bista',
            'contact'=> '9841234567',
            'guardian' => 'Sajal ko Baba Bista',
            'total_abs' => 25,
        ],
]
@endphp
<div>
    <div>
        <table class="w-full ">
            <tr class="text-left text-slate-500 font-light py-4">
                <th>STUDENT</th>
                <th>PARENTS NAME</th>
                <th>TOTAL_ABSENT</th>
                <th>PROFILE</th>
            </tr>
            @foreach($students as $student)
                @php
                    $avt = explode(' ', $student['name']);
                    $avt = $avt[0][0].$avt[1][0];
                @endphp

                <tr class=" odd:bg-slate-100 even:bg-slate-50 ">
                    <td class="flex gap-3 items-center my-3">
                        {{--This is avatar--}}
                        <span class="rounded-full p-3 bg-blue-200">{{$avt}}</span>
                        <div>
                            <p>{{$student['name']}}</p>
                            <p class="text-slate-400">+977 {{$student['contact']}}</p>
                        </div>
                    </td>
                    <td class="">{{$student['guardian']}}</td>
                    <td class="text-slate-400">
                        <span class="text-slate-500 font-bold">
                            {{--This is total absent--}}
                            {{$student['total_abs']}}
                        </span> days</td>
                    <td class="">
                        <a href="">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded">View</button>
                        </a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
