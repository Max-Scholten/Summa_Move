<x-nav-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $performance->name ?? __('Show') . " " . __('Performance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Show') }} Performance</h1>
                            <p class="mt-2 text-sm text-gray-700">Details of {{ __('Performance') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('performances.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Img-Exercise</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->exercise->exercise_photo_url }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Username</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->user->username }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Exercise</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->exercise->name }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->exercise->description }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Times Completed</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->times_completed }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Times Completed In Time</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $performance->times_completed_in_time }}</dd>
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
</x-nav-layout>
