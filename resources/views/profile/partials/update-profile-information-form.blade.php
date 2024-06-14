<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <!-- Profile Photo -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="profile_photo">Profile Photo</label>
        <input type="file" name="profile_photo" id="profile_photo" class="mt-1 block w-full">
    </div>

    <!-- Username -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ old('username', auth()->user()->username) }}" class="mt-1 block w-full">
    </div>

    <!-- Email -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" class="mt-1 block w-full">
    </div>

    <div class="flex items-center justify-end mt-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">
            {{ __('Save') }}
        </button>
    </div>
</form>
