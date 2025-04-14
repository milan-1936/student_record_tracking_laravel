<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    {{--cdn link of jquery--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- CDN link of tailwindcss --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- CDN link of remixicon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"> --}}

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-950" style="font-family: 'Poppins', sans-serif;">
<div class="flex">
{{-- side navigation --}}
<div class="min-w-70  sticky left-0 max-w-100 bg-gray-950 h-screen flex flex-col justify-between drop-shadow-xl">
    {{-- top navigation div --}}
    <div class="top flex gap-4 border-b text-slate-400 border-slate-600  ">
        <img src="{{asset('images/icon.png')}}" alt="school icon" class="w-15 h-15 rounded-xl">
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold">Devchuli School</h1>
            <h2 class="">Dashboard</h2>
        </div>
    </div>


        {{-- menues and tabs --}}
        <div class="flex flex-col text-slate-400 h-full ml-5 gap-5 mt-10 font-ubuntuMono ">
            <a href="{{Route('dashboard')}}" class="flex gap-4 items-center">
                <i class="ri-speed-up-line text-xl text-slate-700"></i>
                <span class="text-lg ">Dashboard</span>
            </a>
            <a href="{{route('examination')}}" class="flex gap-4 items-center">
                <i class="ri-book-open-line text-xl text-slate-700"></i>
                <span class="text-lg ">Examination</span>
            </a>
            <a href="#" class="flex gap-4 items-center">
                <i class="ri-money-dollar-circle-line text-xl text-slate-700"></i>
                <span class="text-lg ">Fee Collection</span>
            </a>
            <a href="#" class="flex gap-4 items-center">
                <i class="ri-chat-1-line text-xl text-slate-700"></i>
                <span class="text-lg ">Send Messages</span>
            </a>
            <a href="{{route('attendance')}}" class="flex gap-4 items-center">
                <i class="ri-fingerprint-line text-xl text-slate-700"></i>
                <span class="text-lg ">Attendance</span>
            </a>
            <a href="{{route('profile')}}" class="flex gap-4 items-center">
                <i class="ri-profile-line text-xl text-slate-700"></i>
                <span class="text-lg ">View Student Profile</span>
            </a>
        </div>

        {{-- log out session --}}
        <div class="flex flex-col ml-10">
            <a href="#" class="flex gap-4 items-center mb-15">
                <i class="ri-logout-box-line text-slate-700 text-xl"></i>
                <span class="text-lg  font-semibold">Log Out</span>
            </a>
        </div>
    </div>

    {{-- top navigation div --}}
    <div class="flex flex-col w-full">
        {{-- top navigatoin --}}
        <div class="flex w-full h-15 bg-gray-950 items-center justify-end gap-5 ">
            <div class="flex w-full justify-end mr-5 gap-5 ">
                {{-- for attendance --}}
                <a href="#" class="child-hover-style bg-blue-500 rounded-lg">
                    <div class="att px-2 py-1  rounded-lg text-white flex gap-2 items-center">
                        <i class="ri-fingerprint-line text-xl"></i>
                        <span class="font-semibold cursor-pointer">Attendance</span>
                    </div>
                </a>

                {{-- for exam --}}
                <a href="#" class="child-hover-style bg-blue-500 rounded-lg">
                    <div class="exam px-2 py-1  rounded-lg text-white flex gap-2 items-center">
                        <i class="ri-book-open-line text-xl"></i>
                        <span class="font-semibold cursor-pointer">Examination</span>
                    </div>
                </a>

                {{-- for message --}}
                <a href="#" class="child-hover-style bg-blue-500 rounded-lg">
                    <div class="message px-2 py-1  rounded-lg text-white flex gap-2 items-center">
                        <i class="ri-chat-1-line text-xl"></i>
                        <span class="font-semibold cursor-pointer">Message</span>
                    </div>
                </a>
            </div>
        </div>
        {{-- contents --}}
        <div class="flex w-full h-full overflow-scroll">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>



