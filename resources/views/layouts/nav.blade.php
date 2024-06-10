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
<body class="min-h-screen min-w-screen bg-gray-100 dark:bg-gray-900">
    <!-- website navigation bar -->
    <nav class="z-40 sidebar fixed top-0 bottom-0 lg:left-0 overflow-y-auto text-center bg-[#166696] grid grid-rows-6">
        <!-- nav logo -->
        <button class="aspect-square border-b-2 border-gray-700">
            <img src="{{ asset('images/SummaMove-removebg-preview.png') }}" alt="Summa Move Logo" class="center h-fit w-fit"/>
        </button>
        <!-- nav roles -->
        <a href="/roles" class="aspect-square hover:bg-[#0085FF] border-b-2 border-gray-700">
            <div class="inline-flex w-full h-full p-7">
                <img src="{{ asset('images/roles.png') }}" alt="roles"/>
            </div>
        </a>
        <!-- nav exercises -->
        <a href="/exercises" class="aspect-square hover:bg-blue-500 border-b-2 border-gray-700">
            <div class="inline-flex w-full h-full p-7">
                <img src="{{ asset('images/exercise.png') }}" alt="exercise"/>
            </div>
        </a>
        <!-- nav performance -->
        <a href="/performances" class="aspect-square hover:bg-blue-500 border-b-2 border-gray-700">
            <div class="inline-flex w-full h-full p-7">
                <img src="{{ asset('images/performance.png') }}" alt="performance"/>
            </div>
        </a>
        <!-- nav user settings -->
        <a href="/profile" class="aspect-square hover:bg-blue-500 border-b-2 border-gray-700">
            <div class="inline-flex w-full h-full p-7">
                <img src="{{ asset('images/usersettings.png') }}" alt="user settings"/>
            </div>
        </a>
        <!-- nav logout -->
        <form method="POST" action="{{ route('logout') }}" class="aspect-square border-b-2 border-gray-700">
            @csrf
            <button type="submit" class="w-full h-full hover:bg-red-400 text-[15px] font-bold text-white">
                <div class="inline-flex">
                    <img src="{{ asset('images/logout.png') }}" alt="logout"/>
                </div>
            </button>
        </form>
    </nav>



            <!-- <div class="text-gray-100 text-xl row-start-1 row-span-1 max-w-[180px] max-h-[180px]">
                <div class="p-2.5 mt-1 bg-bg-green-800 flex items-center">
                    <img src="{{ asset('images/SummaMove-removebg-preview.png') }}" alt="Summa Move Logo" class="center h-full"/>
                    <i class="bi bi-x cursor-pointer ml-28 lg:hidden"></i>
                </div>
                <div class="my-2 bg-gray-600 h-[2px]"></div>
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
            </div> -->


        <!-- Page Content -->
        <main class="ml-[300px] p-0 mt-14">
            {{ $slot }}
        </main>
</body>
</html>
