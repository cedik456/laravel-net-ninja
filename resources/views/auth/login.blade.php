<x-form>
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="POST" class="w-screen">
        @csrf
    
        <!-- Email -->
        <label for="email">Email:</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          value="{{ old('email') }}" 
          required
        >
    
        <!-- Password -->
        <label for="password">Password:</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          required
        >
    
        <button type="submit" class="flex justify-center mt-4 btn">Login</button>
    
        <!-- Validation Errors -->
        @if ($errors->any()) 
            <ul>
                @foreach ($errors->all() as $error)
                <li class="my-2 text-sm text-red-500">{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <p class="mt-4 text-center">
            Don't have an account? 
            <a href="{{ route('signup') }}" class="text-blue-500 hover:underline">Register here</a>
        </p>

    </form>
</x-form>
