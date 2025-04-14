<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    {{--cdn link of jquery--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    {{-- CDN link of tailwindcss --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- CDN link of remixicon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"> --}}

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="max-w-7xl mx-auto font-ubuntuMono">
<div class="flex">
{{-- side navigation --}}
<div class="min-w-80 max-w-100 bg-slate-200 h-screen flex flex-col justify-between drop-shadow-xl">
    {{-- top navigation div --}}
    <div class="top flex gap-4 border-b border-slate-600  ">
        <img src="{{asset('images/icon.png')}}" alt="school icon" class="w-15 h-15 rounded-xl">
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold">Devchuli School</h1>
            <h2 class="text-slate-400">Dashboard</h2>
        </div>
    </div>


    {{-- menues and tabs --}}
    <div class="flex flex-col h-full ml-10 gap-5 mt-10 font-ubuntuMono ">
        <a href="{{Route('dashboard')}}" class="flex gap-4 items-center">
            <i class="ri-speed-up-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">Dashboard</span>
        </a>
        <a href="{{route('examination')}}" class="flex gap-4 items-center">
            <i class="ri-book-open-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">Examination</span>
        </a>
        <a href="#" class="flex gap-4 items-center">
            <i class="ri-money-dollar-circle-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">Fee Collection</span>
        </a>
        <a href="#" class="flex gap-4 items-center">
            <i class="ri-chat-1-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">Send Messages</span>
        </a>
        <a href="{{route('attendance')}}" class="flex gap-4 items-center">
            <i class="ri-fingerprint-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">Attendance</span>
        </a>
        <a href="{{route('profile')}}" class="flex gap-4 items-center">
            <i class="ri-profile-line text-xl text-slate-700"></i>
            <span class="text-lg text-slate-600">View Student Profile</span>
        </a>
    </div>

    {{-- log out session --}}
    <div class="flex flex-col ml-10">
        <a href="#" class="flex gap-4 items-center mb-15">
            <i class="ri-logout-box-line text-slate-700 text-xl"></i>
            <span class="text-lg text-slate-600 font-semibold">Log Out</span>
        </a>
    </div>
</div>

{{-- top navigation div --}}
<div class="flex flex-col w-full">
    {{-- top navigatoin --}}
    <div class="flex w-full h-15 bg-slate-300 items-center justify-end gap-5 ">
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
    <div class="flex w-full h-full">
        @yield('content')
    </div>
</div>
</div>
</body>
</html>



