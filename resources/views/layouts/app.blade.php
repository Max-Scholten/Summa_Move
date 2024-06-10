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

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      
        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <main class="grid grid-cols-[1fr_5fr_0.5fr] h-screen">
            <div class="col-start-2 row-start-2 h-full py-6 overflow-y-hidden rounded-2xl overflow-hidden ">
                <div class="h-full overflow-hidden overflow-y-auto rounded-2xl">
                    {{ $slot }}
                </div>
            </div>
        </main>
        <!-- #region Script to set active button -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const path = window.location.pathname;
                let activeButton = '';

                if (path.startsWith('/roles')) {
                    activeButton = 'roles';
                } else if (path.startsWith('/exercises')) {
                    activeButton = 'exercises';
                } else if (path.startsWith('/performances')) {
                    activeButton = 'performances';
                } else if (path.startsWith('/profile')) {
                    activeButton = 'profile';
                }

                if (activeButton) {
                    document.querySelectorAll('.nav-item').forEach(item => {
                        if (item.dataset.active === activeButton) {
                            item.classList.add('bg-[#5eb1ff]');
                        }
                    });
                }
            });
        </script>
        <!-- #endregion -->
        <!-- website navigation bar -->
        <nav class="z-40 sidebar fixed top-0 bottom-0 lg:left-0 overflow-y-auto text-center bg-[#166696] grid grid-rows-6">
            <!-- nav logo -->
            <button class="aspect-square border-b-2 border-gray-700">
                <img src="{{ asset('images/SummaMove-removebg-preview.png') }}" alt="Summa Move Logo" class="center h-fit w-fit" />
            </button>
            <!-- nav roles -->
            <a href="/roles" class="nav-item aspect-square hover:bg-[#5eb1ff] border-b-2 border-gray-700" data-active="roles">
                <div class="inline-flex w-full h-full p-7">
                    <img src="{{ asset('images/roles.png') }}" alt="roles" />
                </div>
            </a>
            <!-- nav exercises -->
            <a href="/exercises" class="nav-item aspect-square hover:bg-[#5eb1ff] border-b-2 border-gray-700" data-active="exercises">
                <div class="inline-flex w-full h-full p-7">
                    <img src="{{ asset('images/exercise.png') }}" alt="exercise" />
                </div>
            </a>
            <!-- nav performance -->
            <a href="/performances" class="nav-item aspect-square hover:bg-[#5eb1ff] border-b-2 border-gray-700" data-active="performances">
                <div class="inline-flex w-full h-full p-7">
                    <img src="{{ asset('images/performance.png') }}" alt="performance" />
                </div>
            </a>
            <!-- nav user settings -->
            <a href="/profile" class="nav-item aspect-square hover:bg-[#5eb1ff] border-b-2 border-gray-700" data-active="profile">
                <div class="inline-flex w-full h-full p-7">
                    <img src="{{ asset('images/usersettings.png') }}" alt="user settings" />
                </div>
            </a>
            <!-- nav logout -->
            <form method="POST" action="{{ route('logout') }}" class="aspect-square border-b-2 border-gray-700">
                @csrf
                <button type="submit" class="w-full h-full hover:bg-red-400 text-[15px] font-bold text-white">
                    <div class="inline-flex">
                        <img src="{{ asset('images/logout.png') }}" alt="logout" />
                    </div>
                </button>
            </form>
        </nav>

    </div>
    </div>
</body>

</html>
