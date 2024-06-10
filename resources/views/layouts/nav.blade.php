<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=bg-white>
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Page Content -->
    <main class="ml-[300px] p-4 mt-14">
        {{ $slot }}
    </main>
    <div class="z-40 sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[180px] overflow-y-auto text-center bg-[#166696]">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 bg-bg-green-800 flex items-center">
                    <img src="{{ asset('images/SummaMove-removebg-preview.png') }}" alt="Summa Move Logo" class="object-left h-full"/>
                <i
                    class="bi bi-x cursor-pointer ml-28 lg:hidden"
                ></i>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>

        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 cursor-pointer hover:bg-Forestgreen text-white">
            <i class="bi bi-house-door-fill"></i>
            <i class='bx bxs-home'></i>
            <a href="/roles" class="text-[15px] ml-4 h-6 text-gray-200 font-bold">Role</a>
        </div>
        <br>
        <br>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 cursor-pointer hover:bg-Forestgreen text-white">
            <i class="bi bi-house-door-fill"></i>
            <i class='bx bx-food-menu' ></i>
            <a href="/exercises" class="text-[15px] ml-4 h-6 text-gray-200 font-bold">Exercise</a>
        </div>
        <br>
        <br>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 cursor-pointer hover:bg-Forestgreen text-white">
            <i class="bi bi-house-door-fill"></i>
            <i class='bx bx-group' ></i>
            <a href="/performances" class="text-[15px] ml-4 h-6 text-gray-200 font-bold">Performance</a>
        </div>
        <br>
        <br>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 cursor-pointer hover:bg-Forestgreen text-white">
            <i class="bi bi-house-door-fill"></i>
            <i class='bx bx-food-menu' ></i>
            <a href="/profile" class="text-[15px] ml-4 h-6 text-gray-200 font-bold">Profiel</a>
        </div>
        <br>
        <br>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 cursor-pointer hover:bg-Forestgreen text-white">
            <i class="bi bi-house-door-fill"></i>
            <i class='bx bx-group' ></i>
            <form method="POST" action="{{ route('logout') }} ">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                            this.closest('form').submit();"
                                 class="text-[15px] font-bold text-white hover:bg-transparent hover:text-white">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>

    </div>
</div>
</body>
</html>
