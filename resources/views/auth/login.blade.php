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

<body class="bg-gray-600 h-screen w-screen grid grid-cols-[1fr_0.6fr_1fr] grid-rows-[0.5fr_1.5fr_0.5fr]">
    <!-- #region switch script -->
    <script>
        function toggleDivs() {
            const loginDiv = document.getElementById('loginDiv');


            if (document.getElementById('checkboxInput').checked) {
                loginDiv.classList.add('animate-left');
                loginDiv.classList.remove('animate-right');
            } else {
                loginDiv.classList.add('animate-right');
                loginDiv.classList.remove('animate-left');
            }
        }
    </script>
    <!-- #endregion -->
    <div class="bg-black bg-opacity-50 rounded-md overflow-hidden col-start-2 row-start-2 grid grid-rows-[2fr_1fr] h-[calc(700px)]">
        <div id="loginDiv" class="row-start-1 grid grid-rows-1" style="width: 200%;">
            <!-- #region login -->
            <div class=" h-full row-start-1 overflow-hidden">
                <div class="grid grid-cols-1 grid-rows-[0.5fr_6fr] h-full p-4">
                    <h2 class="text-4xl font-semibold mb-4 text-white">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-white text-sm  mb-2 ">
                                Email Address
                            </label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="max-w-[411px] border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('email') border-red-500 @enderror">
                            @error('email')
                            <p class="max-w-[400px] text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-white text-sm mb-2">
                                Password
                            </label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="max-w-[411px] border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full @error('password') border-red-500 @enderror">
                            @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full max-w-[411px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- #endregion -->
            <!-- #region register -->
            <div class="h-full w-full translate-right row-start-1">
                <div class="grid grid-cols-1 grid-rows-[0.5fr_6fr] h-full p-4">
                    <h2 class="text-4xl font-semibold mb-4 mt-1 text-white">Register</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Username -->
                        <div class="mb-4">
                            <x-input-label for="username" :value="__('Username')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                        </div>

                        <!-- First Name -->
                        <div class="mb-4">
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autocomplete="first_name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
                        </div>

                        <!-- Last Name -->
                        <div class="mb-4">
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
                        </div>

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="max-w-[411px] block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="max-w-[411px] block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="max-w-[411px] block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Register Button -->
                        <x-primary-button class="max-w-[411px] mt-2 mb-0 w-full h-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center">
                            {{ __('Register') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
            <!-- #endregion -->
        </div>

        <!-- login/register switch -->
        <div class="row-start-2 flex items-center justify-center">
            <input id="checkboxInput" type="checkbox" onchange="toggleDivs()">
            <label class="toggleSwitch overflow-hidden" for="checkboxInput">
                <img src="Images/login.png" style="height: 25px; width: 20px;"></img>
                <div style="width: 22px;"></div>
                <img src="Images/register.png" style="height: 23px; width: 20px;"></img>
            </label>
        </div>
    </div>
</body>
</html>