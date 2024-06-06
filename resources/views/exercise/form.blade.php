<div class="space-y-6">
    
    <div>
        <x-input-label for="exercise_photo_url" :value="__('Exercise Photo Url')"/>
        <x-text-input id="exercise_photo_url" name="exercise_photo_url" type="text" class="mt-1 block w-full" :value="old('exercise_photo_url', $exercise?->exercise_photo_url)" autocomplete="exercise_photo_url" placeholder="Exercise Photo Url"/>
        <x-input-error class="mt-2" :messages="$errors->get('exercise_photo_url')"/>
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $exercise?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $exercise?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>