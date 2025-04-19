@extends('dashboard.navbar')
@include('component.alert')
@section('content')
    <div class="flex justify-center items-center bg-gray-900 px-[3%]">
        <div class="w-full">
            <div class="bg-indigo-600 rounded-t-xl text-white">
                <h1 class="text-lg text-center font-bold py-4">Create Examination Form</h1>
            </div>
            <div class="px-5 mx-0 bg-gray-800 mt-5 rounded-b-xl shadow-lg">
                <form action=" {{ route('examination.store') }} " method="POST" class="text-gray-200 flex flex-col gap-4 pb-5">
                    @csrf
                    <label for="exam_name" class="mt-4">Exam Name</label>
                    <input type="text" name="name" id="exam_name" class="border border-gray-700 bg-gray-700 rounded-md p-2 w-full mb-4" placeholder="Enter exam name">

                    {{--full marks--}}
                    <div class="justify-between gap-5 text-gray-200 grid grid-cols-8 ">
                        <label class="flex items-center">Full Marks:</label>

                        <div class="flex flex-col">
                            <label for="english">English</label>
                            <input type="number" name="english" id="english" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="nepali">Nepali</label>
                            <input type="number" name="nepali" id="nepali" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="math">Math</label>
                            <input type="number" name="math" id="math" class="border border-gray-700 bg-gray-700 rounded-md p-2 mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="science">Science</label>
                            <input type="number" name="science" id="science" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="social">Social</label>
                            <input type="number" name="social" id="social" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="opti">Opt I</label>
                            <input type="number" name="opti" id="opti" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="75">
                        </div>

                        <div class="flex flex-col">
                            <label for="optii">Opt II</label>
                            <input type="number" name="optii" id="optii" class="border border-gray-700 bg-gray-700 rounded-md p-2  mb-4" placeholder="50">
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-md px-4 py-2 mt-4 flex items-center transition-colors duration-300">
                            <i class="ri-pencil-line text-lg mr-2"></i>
                            Create Exam
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
