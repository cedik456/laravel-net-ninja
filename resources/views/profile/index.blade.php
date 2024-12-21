<x-layout>

        <h2>Your Profile</h2>

        <div class="profile-info">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>

            <!-- You can add more fields as per your user model, e.g., avatar, bio, etc. -->
            <p><strong>Created At:</strong> {{ $user->created_at }}</p>
            <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="btn hover:bg-red-500">
                Logout
            </button>
        </form>

</x-layout>
