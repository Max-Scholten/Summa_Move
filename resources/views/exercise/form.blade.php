<div class="space-y-6">

    <div>
        <x-input-label for="exercises_img" :value="__('Exercises Img')"/>
        <x-text-input id="exercises_img" name="exercises_img" type="text" class="mt-1 block w-full" :value="old('exercises_img', $exercise?->exercises_img)" autocomplete="exercises_img" placeholder="Exercises Img"/>
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
    <div class="mt-4">
        <label for="times_completed" class="block text-sm font-medium text-gray-700">Times Completed</label>
        <select id="times_completed" name="times_completed" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($timesCompleted as $completed)
                <option value="{{ $completed->times_completed }}" {{ $exercise->completed && $exercise->completed->times_completed == $completed->times_completed ? 'selected' : '' }}>
                    {{ $completed->times_completed }}
                </option>
            @endforeach
        </select>
    </div>
    @if(Route::currentRouteName() == 'exercises.edit')
        <input type="hidden" id="user_id" name="user_id" value="{{ old('user_id', $exercise?->user_id) }}">
    @else
        <div>
            <x-input-label for="user_id" :value="__('')"/>
            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
            <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
        </div>
    @endif


    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
