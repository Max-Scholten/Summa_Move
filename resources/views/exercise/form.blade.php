<div class="space-y-6">

    <div>
        <x-input-label for="exercises_img" :value="__('Exercises-Img')"/>
        <x-text-input id="exercises_img" name="exercises_img" type="text" class="mt-1 block w-full" :value="old('exercises_img', $exercise?->exercises_img)" autocomplete="exercises_img" placeholder="Exercises-Img"/>
        <x-input-error class="mt-2" :messages="$errors->get('exercises_img')"/>
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
    <div>
        <x-input-label for="times_completed" :value="__('Times-Completed')"/>
        <x-text-input id="times_completed" name="times_completed" type="text" class="mt-1 block w-full" :value="old('times_completed', $exercise?->times_completed)" autocomplete="times_completed" placeholder="Times-Completed"/>
        <x-input-error class="mt-2" :messages="$errors->get('times_completed')"/>
    </div>
    <div>
        <x-input-label for="user_id" :value="__('')"/>
        <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
