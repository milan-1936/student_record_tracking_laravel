<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Devchuli School</title>

    {{-- Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- TailwindCSS --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- App Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #111827;
            color: #e5e7eb;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar-item {
            transition: all 0.2s ease;
            position: relative;
        }

        .sidebar-item:hover {
            background-color: #1e293b;
            color: #e5e7eb;
        }

        .sidebar-item.active {
            background-color: rgba(99, 102, 241, 0.1);
            color: #6366f1;
            border-left: 3px solid #6366f1;
        }

        .sidebar-item.active i {
            color: #6366f1;
        }

        .top-actions a {
            transition: all 0.2s ease;
        }

        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                z-index: 50;
                height: 100vh;
            }

            .sidebar.active {
                transform: translateX(0);
            }
        }

        .dropdown-menu {
            transition: all 0.3s ease;
            visibility: hidden;
            opacity: 0;
            transform: translateY(10px);
        }

        .dropdown:hover .dropdown-menu {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .user-menu {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-300 h-screen overflow-hidden">

<div class="flex flex-col lg:flex-row h-screen overflow-hidden">
    {{-- Mobile Sidebar Toggle --}}
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="sidebar-toggle" class="p-2 rounded-lg bg-gray-800 text-white hover:bg-indigo-600 transition-colors">
            <i class="ri-menu-line text-xl"></i>
        </button>
    </div>

    {{-- Sidebar --}}
    <aside id="sidebar" class="sidebar w-72 bg-gray-950 shadow-xl p-5 flex flex-col justify-between lg:fixed lg:h-screen lg:left-0 lg:top-0 lg:z-40 overflow-y-auto">
        {{-- Logo --}}
        <div class="flex items-center gap-3 mb-8 border-b border-gray-800 pb-5">
            <img src="{{ asset('images/icon.png') }}" alt="school icon" class="w-10 h-10 rounded-lg">
            <div>
                <h1 class="text-lg font-bold text-white">Devchuli School</h1>
                <h2 class="text-xs text-indigo-400 font-medium">Management System</h2>
            </div>
        </div>

        {{-- Navigation --}}
        <nav class="flex flex-col space-y-1 text-base font-medium">
            <a href="{{ route('dashboard') }}" class="sidebar-item active flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-dashboard-line text-xl"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('examination') }}" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-book-open-line text-xl"></i>
                <span>Examination</span>
            </a>
            <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-money-dollar-circle-line text-xl"></i>
                <span>Fee Collection</span>
            </a>
            <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-chat-1-line text-xl"></i>
                <span>Send Messages</span>
            </a>
            <a href="{{ route('attendance') }}" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-fingerprint-line text-xl"></i>
                <span>Attendance</span>
            </a>
            <a href="{{ route('profile') }}" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                <i class="ri-profile-line text-xl"></i>
                <span>Student Profiles</span>
            </a>

            {{-- Settings Section --}}
            <div class="mt-4 pt-4 border-t border-gray-800">
                <p class="text-xs uppercase text-gray-500 font-semibold px-4 mb-2">System</p>
                <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                    <i class="ri-settings-4-line text-xl"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-md">
                    <i class="ri-question-line text-xl"></i>
                    <span>Help & Support</span>
                </a>
            </div>
        </nav>

        {{-- Logout --}}
        <div class="mt-auto pt-5 border-t border-gray-800">
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-md text-red-400 hover:bg-gray-800 hover:text-red-300 transition-colors">
                <i class="ri-logout-box-r-line text-xl"></i>
                <span>Log Out</span>
            </a>
        </div>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 flex flex-col lg:ml-72">
        {{-- Top Bar --}}
        <div class="flex items-center justify-between bg-gray-950 p-4 border-b border-gray-800 shadow-md sticky top-0 z-30">
            <div class="lg:hidden w-8"></div>

            {{-- Search --}}
            <div class="hidden md:flex relative">
                <input type="text" placeholder="Search..." class="bg-gray-800 text-gray-300 rounded-lg pl-10 pr-4 py-2 text-sm border border-gray-700 focus:outline-none focus:border-indigo-500 w-64">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
            </div>

            {{-- Action Buttons --}}
            <div class="flex gap-2 md:gap-3 top-actions">
                <a href="#" class="flex items-center gap-2 px-3 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition-colors text-sm whitespace-nowrap">
                    <i class="ri-fingerprint-line text-lg"></i>
                    <span class="hidden md:inline">Attendance</span>
                </a>
                <a href="#" class="flex items-center gap-2 px-3 py-2 bg-gray-800 hover:bg-indigo-600 text-white rounded-lg transition-colors text-sm whitespace-nowrap">
                    <i class="ri-notification-3-line text-lg"></i>
                    <span class="hidden md:inline">Notifications</span>
                    <span class="inline-flex items-center justify-center w-5 h-5 text-xs bg-red-500 text-white rounded-full">3</span>
                </a>

                {{-- User Profile --}}
                <div class="relative dropdown">
                    <button class="flex items-center gap-2 px-3 py-2 bg-gray-800 hover:bg-gray-700 text-white rounded-lg transition-colors">
                        <img src="{{ asset('images/avatar.png') }}" alt="User" class="w-8 h-8 rounded-full border-2 border-indigo-500">
                        <span class="hidden md:inline text-sm font-medium">Admin</span>
                        <i class="ri-arrow-down-s-line"></i>
                    </button>

                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 transition-colors">My Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700 transition-colors">Account Settings</a>
                        <div class="border-t border-gray-700 my-1"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 transition-colors">Log Out</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="flex-1 overflow-auto p-6 h-[calc(100vh-64px)]">
            @yield('content')
        </div>
    </main>
</div>

{{-- Scripts --}}
<script>
    // Sidebar toggle for mobile
    document.getElementById('sidebar-toggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('active');
    });

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');

        if (window.innerWidth < 1024 &&
            !sidebar.contains(event.target) &&
            !sidebarToggle.contains(event.target) &&
            sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
</script>

</body>
</html>
