

<div class="p-6 bg-gray-900 text-white rounded-lg shadow-lg overflow-x-auto">
    <h2 class="text-2xl font-semibold text-indigo-400 mb-4">Student Attendance Summary</h2>

    <table class="w-full text-left min-w-[700px]">
        <thead>
        <tr class="text-indigo-300 border-b border-indigo-600 uppercase text-sm">
            <th class="py-3">Student</th>
            <th class="py-3">Parent's Name</th>
            <th class="py-3">Profile</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            @php
                $avt = explode(' ', $student['name']);
                $avt = strtoupper($avt[0][0] . ($avt[1][0] ?? ''));
            @endphp
            <tr class="border-b border-gray-700 hover:bg-gray-800 transition-all duration-200">
                <td class="flex items-center gap-4 py-4">
                    <div class="bg-indigo-600 text-white rounded-full w-10 h-10 flex items-center justify-center text-lg font-semibold">
                       <img src = "{{asset('images/photos/'.$student->profile)}}" alt="PP" class="w-10 h-10 rounded-full bg-cover">


                    </div>
                    <div>
                        <p class="font-medium">{{ $student['name'] }}</p>
                        <p class="text-sm text-gray-400">+977 {{ $student['contact'] }}</p>
                    </div>
                </td>
                <td class="py-4">{{ $student['guardian'] }}</td>

                <td class="py-4">
                    <a href="#" class="inline-block">
                        <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded shadow">
                            View
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
