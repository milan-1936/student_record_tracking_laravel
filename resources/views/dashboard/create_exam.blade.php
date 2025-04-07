@extends('dashboard.navbar')
@section('content')
    <div class="flex justify-center items-center bg-slate-100 h-full w-full">
        <div class=" bg-blue-500">
            <div class="bg-blue-500 text-white">
                <h1 class="text-lg text-center font-bold py-4">Create Examation form</h1>
                <form action="" method="POST">
                    @csrf
                    <label for="exam_name" >Exam Name</label>
                    <input type="text" name="exam_name" id="exam_name" class="border border-gray-300 rounded-md p-2 w-full mb-4" placeholder="Enter exam name">
                    <div class="flex gap-4">
                        <label >Full Marks:</label>
                        <div class="flex gap-7">
                            <label for="english">English</label>
                            <label for="nepali">Nepali</label>
                            <label for="math">Math</label>
                            <label for="science">Science</label>
                            <label for="social">Social</label>
                            <label for="opti">Opt I</label>
                            <label for="optii">Opt II</label>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
