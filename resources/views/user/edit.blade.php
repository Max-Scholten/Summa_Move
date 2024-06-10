<x-nav-layout>
    <!-- ... -->
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <!-- Add your form fields here -->
        <div class="mb-4">
            <label class="text-gray-600" for="username">Username</label>
            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="username" id="username" value="{{ $user->username }}" required>
        </div>

        <div class="mb-4">
            <label class="text-gray-600" for="email">Email</label>
            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email" name="email" id="email" value="{{ $user->email }}" required>
        </div>

        <!-- Add more fields as needed -->

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 rounded-md text-white bg-indigo-600 hover:bg-indigo-500">
                {{ __('Update') }}
            </button>
        </div>
    </form>
    <!-- ... -->
</x-nav-layout>
