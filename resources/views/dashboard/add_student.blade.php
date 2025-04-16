@extends('dashboard.navbar')
@include('component.alert')
@section('content')
    <div class="flex justify-center items-center bg-gray-900 w-full">
        <div class="max-w-3xl">
            <form action=" {{ route('student.store') }} " method="POST" enctype="multipart/form-data" class="bg-gray-800 p-8 rounded-md grid grid-cols-3 items-start">
                @csrf
                <label for="profile" class="col-span-1">
                    <div  class="w-[35mm] h-[45mm] bg-blue-300 rounded-xl">

                        <img src="" alt="" id="d_profile" class="rounded-xl object-cover w-full h-full">
                        <h1 id="d_name" class="w-full text-center">Name</h1>
                    </div>
                </label>
                <div class="col-span-2">
                    <label for="rn">Roll Number</label>"
                    <input type="text" name="rn" id="rn" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" id="contact" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="guardian">Guardian</label>
                    <input type="text" name="guardian" id="guardian" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="border border-gray-700 bg-gray-800 text-white px-4 py-2 rounded-md mb-4 w-full" required>
                    <input type="submit" value="Add Student" class="border border-gray-700 bg-indigo-700 text-white px-4 py-2 rounded-md mb-4 w-full">
                </div>
            </form>
        </div>

    </div>
    <script>
        $(document).ready(function(){
            // Added Name
            $('#name').on('keyup', function(){
              $('#d_name').text($(this).val());
            });
            // Added Profile Picture preview and validation
            $('#profile').on('change', function(){
                const file = $(this).prop('files')[0];
                const fileType = file.type;
                const fileSize = file.size;
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#d_profile').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);

                if(fileType !== 'image/jpeg' && fileType !== 'image/png' && fileType !== 'image/jpg'){
                    alert('Please upload a valid image file (jpg, png)');
                    $(this).val('');
                }

                if(fileSize > 1000000){
                    alert('File size exceeds 1MB');
                    $(this).val('');
                }
            });


        });
    </script>
@endsection
