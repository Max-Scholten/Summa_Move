
<div class="space-y-6">

    <div>
        <x-input-label for="rolename" :value="__('Gebruikers Rol')"/>
        <x-text-input id="rolename" name="rolename" type="text" class="mt-1 block w-full" :value="old('rolename', $role?->rolename)" autocomplete="rolename" placeholder="Rolename"/>
        <x-input-error class="mt-2" :messages="$errors->get('rolename')"/>
    </div>
    @if(isset($role))
        <div>
            <x-input-label for="users" :value="__('Gebruiker')"/>
            @foreach($users as $user)
                <div>
                    <input type="checkbox" id="user_{{ $user->id }}" name="users[]" value="{{ $user->id }}" {{ $role->users->contains($user->id) ? 'checked' : '' }}>
                    <label for="user_{{ $user->id }}">{{ $user->username }}</label>
                </div>
            @endforeach
            <x-input-error class="mt-2" :messages="$errors->get('users')"/>
        </div>
    @endif

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
