<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/dwcl-logo.png') }}" type="image/x-icon">
    <title>Divine Word College of Legazpi</title>
    @vite('resources/css/app.css')
</head>
<body>

    @if (session('success'))

    <div id="flash" class="p-2 text-sm text-center text-green-500 bg-green-50">
        {{ session('success') }}
    </div>

    @endif

    <header>
        <nav>
            <h1><img src="{{ asset('images/dwcl-logo.png') }}" class="inline-block h-10 mr-2"></h1>
            <div class="flex items-center justify-center gap-5">
                <a class="text-md hover:text-blue-500" href="{{ route('students.index') }}">Students</a>
                <a class="text-md hover:text-blue-500" href="{{ route('students.create') }}">Add Students</a>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="flex items-center hover:text-red-500">
                    <!-- Logout Icon (Heroicons or Font Awesome) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m10 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z" />
                    </svg>
                </button>
            </form>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>