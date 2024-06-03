<div class="space-y-6">
    
    <div>
        <x-input-label for="rolename" :value="__('Rolename')"/>
        <x-text-input id="rolename" name="rolename" type="text" class="mt-1 block w-full" :value="old('rolename', $role?->rolename)" autocomplete="rolename" placeholder="Rolename"/>
        <x-input-error class="mt-2" :messages="$errors->get('rolename')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>