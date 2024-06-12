<x-nav-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Performances') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class=" bg-white shadow rounded-2xl border-2 border-black">
                <div class="w-full h-[85vh] pb-4">
                    <div class="p-4 sm:flex sm:items-center border-b-2 border-black pb-3">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Performances') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Performances') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('performances.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>
                    <div class="px-2 max-h-[calc(800px)] h-[90%] overflow-y-scroll">
                        <div class="flow-root">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>

                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Times Completed</th>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Times Completed In Time</th>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Username</th>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Exercise </th>

                                            <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach ($performances as $performance)
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>

                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $performance->times_completed }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $performance->times_completed_in_time }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $performance->user->username}}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $performance->exercise->name }}</td>

                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('performances.destroy', $performance->id) }}" method="POST">
                                                        <a href="{{ route('performances.show', $performance->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                                        <a href="{{ route('performances.edit', $performance->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('performances.destroy', $performance->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                        {!! $performances->withQueryString()->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-nav-layout>
