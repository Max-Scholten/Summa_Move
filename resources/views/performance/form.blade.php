<div class="space-y-6">

    <div>
        <x-input-label for="times_completed" :value="__('Times Completed')"/>
        <x-text-input id="times_completed" name="times_completed" type="text" class="mt-1 block w-full" :value="old('times_completed', $performance?->times_completed)" autocomplete="times_completed" placeholder="Times Completed"/>
        <x-input-error class="mt-2" :messages="$errors->get('times_completed')"/>
    </div>
    <div>
        <x-input-label for="times_completed_in_time" :value="__('Times Completed In Time')"/>
        <x-text-input id="times_completed_in_time" name="times_completed_in_time" type="text" class="mt-1 block w-full" :value="old('times_completed_in_time', $performance?->times_completed_in_time)" autocomplete="times_completed_in_time" placeholder="Times Completed In Time"/>
        <x-input-error class="mt-2" :messages="$errors->get('times_completed_in_time')"/>
    </div>
    <div>
        <x-input-label for="exercise_id" :value="__('Exercise')"/>
        <select id="exercise_id" name="exercise_id" class="mt-1 block w-full">
            @foreach($exercises as $exercise)
                <option value="{{ $exercise->id }}" {{ (isset($performance) && $performance->exercise_id == $exercise->id) ? 'selected' : '' }}>
                    {{ $exercise->name }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('exercise_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
