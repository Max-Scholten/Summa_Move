<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $role->name ?? __('Details') . " " . __('User account') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('User account') }} </h1>
                            <p class="mt-2 text-sm text-gray-700">Details of the {{ __('User') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('roles.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">User Photo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                                <img src="{{ $role->user ? $role->user->profile_photo_url : 'N/A' }}" alt="Profile Photo" class="h-32 w-32 rounded-xl bg-indigo-600 text-white ">
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Username</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $role->user ? $role->user->username : 'N/A' }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">E-mail</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $role->user ? $role->user->email : 'N/A' }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">First Name</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $role->user ? $role->user->first_name : 'N/A' }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Last Name</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $role->user ? $role->user->last_name : 'N/A' }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Rolename</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $role->rolename }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
