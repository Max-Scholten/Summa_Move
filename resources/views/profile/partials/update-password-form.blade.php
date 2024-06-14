

<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

    <!-- Current Password -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="current_password">Current Password</label>
        <input type="password" name="current_password" id="current_password" class="mt-1 block w-full">
    </div>

    <!-- New Password -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="password">New Password</label>
        <input type="password" name="password" id="password" class="mt-1 block w-full">
    </div>

    <!-- Confirm Password -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full">
    </div>

    <div class="flex items-center justify-end mt-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">
            {{ __('Save') }}
        </button>
    </div>
</form>
