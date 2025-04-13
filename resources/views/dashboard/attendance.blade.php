@extends('dashboard.navbar')
@section('content')
        <div class="w-full font-Poppins">
            <table class="w-full border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">STUDENT</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">DATE</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">TOTAL_ABSENT</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">PRESENT</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="border-b bg-white hover:bg-gray-100">
                    <td class="px-4 py-2 text-sm text-gray-600">
                        <div class="flex">
                            <div class="w-10 h-10 bg-green-300 flex items-center justify-center rounded-full mr-2">
                                <span class="text-lg font-bold text-slate-900">R</span>
                            </div>
                            <div>
                                <h1 class="text-sm font-semibold">Ram Shankar Bhola</h1>
                                <p class="text-xs text-gray-500">+977 9840079139</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-600">{{ now()->toDateString() }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600">
                        <span class="text-2xl font-semibold">5</span>
                        <span>Days</span>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <input type="checkbox" name="present" id="present" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </td>
                </tr>

                <tr class="border-b bg-white hover:bg-gray-100">
                    <td class="px-4 py-2 text-sm text-gray-600">
                        <div class="flex">
                            <div class="w-10 h-10 bg-green-300 flex items-center justify-center rounded-full mr-2">
                                <span class="text-lg font-bold text-slate-900">R</span>
                            </div>
                            <div>
                                <h1 class="text-sm font-semibold">Ram Shankar Bhola</h1>
                                <p class="text-xs text-gray-500">+977 9840079139</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-600">{{ now()->toDateString() }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600">
                        <span class="text-2xl font-semibold">5</span>
                        <span>Days</span>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <input type="checkbox" name="present" id="present" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Save Attendance</button>
        </div>
@endsection
