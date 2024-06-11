<x-nav-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    
        <div class="max-w-full">
            <div class="py-4 bg-white shadow rounded-2xl border-2 border-black">
                <div class="w-full pb-4">
                    <div class="px-4 sm:flex sm:items-center border-b-2 border-black pb-3">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Roles') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Roles') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('roles.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>
                    <!-- #region Tables -->
                    <div class=" px-2 max-h-[calc(800px)] overflow-y-scroll">
                        @foreach($roles->take(4) as $key => $role)
                            <div class="flow-root">
                                <div class="mb-8 overflow-x-auto">
                                    <div class="inline-block min-w-full py-2 align-middle">
                                        <table class="w-full divide-y divide-gray-300">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Gebruikers Rol</th>
                                                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Gebruikersnaam</th>
                                                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">E-mail</th>
                                                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Toon gebruiker</th>
                                                <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                            @foreach ($role->users as $user)
                                                <tr class="even:bg-gray-50">
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $role->rolename }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->username }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->email }}</td>
                                                    @foreach ($users as $user)
                                                        <td><a href="{{ route('users.show', $user->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{$user->name ?? __('Toon') . " " . __('Gebruiker') }}</a></td>
                                                    @endforeach
                                                </tr>

                                            @endforeach

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                    <a href="{{ route('roles.show', $role->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{$user->name ?? __('Toon') . " " . __('Gebruiker') }}</a>
                                                    <a href="{{ route('roles.edit', $role->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Aanpassen') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('roles.destroy', $role->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Weet je zeker dat je de tabel met rollen wilt verwijderen') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                </form>
                                            </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>  
                    <!-- #endregion -->
                </div>
            </div>
        </div>
</x-nav-layout>
