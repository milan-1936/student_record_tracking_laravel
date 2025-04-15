@extends('dashboard.navbar')
@section('content')
    <div class="w-full font-Poppins bg-gray-900 min-h-screen text-gray-200">
        <table class="w-full border border-gray-700">
            <thead class="bg-gray-800">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-medium text-indigo-400">STUDENT</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-indigo-400">DATE</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-indigo-400">TOTAL_ABSENT</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-indigo-400">PRESENT</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-gray-700 bg-gray-800 hover:bg-gray-700">
                <td class="px-4 py-2 text-sm">
                    <div class="flex">
                        <div class="w-10 h-10 bg-indigo-600 flex items-center justify-center rounded-full mr-2">
                            <span class="text-lg font-bold text-white">R</span>
                        </div>
                        <div>
                            <h1 class="text-sm font-semibold text-white">Ram Shankar Bhola</h1>
                            <p class="text-xs text-gray-400">+977 9840079139</p>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm">{{ now()->toDateString() }}</td>
                <td class="px-4 py-2 text-sm">
                    <span class="text-2xl font-semibold text-white">5</span>
                    <span class="text-gray-400">Days</span>
                </td>
                <td class="px-4 py-2 text-center">
                    <input type="checkbox" name="present" id="present" class="h-4 w-4 text-indigo-500 focus:ring-indigo-400 bg-gray-900 border-gray-600 rounded">
                </td>
            </tr>

            <tr class="border-b border-gray-700 bg-gray-800 hover:bg-gray-700">
                <td class="px-4 py-2 text-sm">
                    <div class="flex">
                        <div class="w-10 h-10 bg-indigo-600 flex items-center justify-center rounded-full mr-2">
                            <span class="text-lg font-bold text-white">R</span>
                        </div>
                        <div>
                            <h1 class="text-sm font-semibold text-white">Ram Shankar Bhola</h1>
                            <p class="text-xs text-gray-400">+977 9840079139</p>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-2 text-sm">{{ now()->toDateString() }}</td>
                <td class="px-4 py-2 text-sm">
                    <span class="text-2xl font-semibold text-white">5</span>
                    <span class="text-gray-400">Days</span>
                </td>
                <td class="px-4 py-2 text-center">
                    <input type="checkbox" name="present" id="present" class="h-4 w-4 text-indigo-500 focus:ring-indigo-400 bg-gray-900 border-gray-600 rounded">
                </td>
            </tr>
            </tbody>
        </table>
        <div class="flex justify-end mt-4">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-all">Save Attendance</button>
        </div>
    </div>
@endsection
