<div class="space-y-6">

    <div>
        <x-input-label for="rolename" :value="__('Rolename')"/>
        <x-text-input id="rolename" name="rolename" type="text" class="mt-1 block w-full" :value="old('rolename', $role?->rolename)" autocomplete="rolename" placeholder="Rolename"/>
        <x-input-error class="mt-2" :messages="$errors->get('rolename')"/>
    </div>
    <div>
        <x-input-label for="user_id" :value="__('User')"/>
        <select id="user_id" name="user_id" class="mt-1 block w-full">
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id', $role?->user_id) == $user->id ? 'selected' : '' }}>{{ $user->username }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
