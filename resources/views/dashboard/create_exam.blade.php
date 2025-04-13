@extends('dashboard.navbar')
@section('content')
    <div class="flex justify-center items-center bg-slate-100 px-[3%]">
        <div class="text-white w-full">
            <div class="bg-blue-500 rounded-t-xl text-white">
                <h1 class="text-lg text-center font-bold py-4 ">Create Examation form</h1>
            </div>
                <div class="px-5 mx-0 bg-slate-200 mt-5">
                    <form action="" method="GET" class=" text-slate-600 flex flex-col gap-4 pb-5">
                        @csrf
                        <label for="exam_name" >Exam Name</label>
                        <input type="text" name="exam_name" id="exam_name" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="Enter exam name">
                        {{--full marks--}}
                        <div class="flex gap-3 text-slate-600">
                            <label >Full Marks:</label>

                            <div class="flex flex-col">
                                <label for="english">English</label>
                                <input type="number" name="english" id="english" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col">
                                <label for="nepali">Nepali</label>
                                <input type="number" name="nepali" id="nepali" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col">
                                <label for="math">Math</label>
                                <input type="number" name="math" id="math" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col">
                                <label for="science">Science</label>
                                <input type="number" name="science" id="science" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col">
                                <label for="social">Social</label>
                                <input type="number" name="social" id="social" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col ">
                                <label for="opti">Opt I</label>
                                <input type="number" name="opti" id="opti" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="75">
                            </div>

                            <div class="flex flex-col">
                                <label for="optii">Opt II</label>
                                <input type="number" name="optii" id="optii" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="50">
                            </div>

                        </div>
                        <div class="flex justify-end cursor-pointer">
                            <div class="bg-blue-500 text-white rounded-md p-2 mt-4 cursor-pointer">
                                <i class="ri-pencil-line text-lg"></i>
                            <input type="submit" value="Create Exam" class="">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
    </div>
@endsection
